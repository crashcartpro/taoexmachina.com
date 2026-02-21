<?php

/**************************
  BNC index file v0.1
 **************************/

require "config.php"; 

// test for 'a' argument passed in url.
if (!empty($_GET['a'])) {
    // test that 'a' is a file in the published path. also making sure to colapse any tricky requests and make sure they stay withing the specified folder.
    $request = $_GET['a'];
    if (strpos(realpath($published_path.$request),$published_path)===0) {
        // create an article list with just the requested article
        $article_list = array($published_path.$request);
  	    // pull page title from H1 tag in article
        $article_DOM = new DOMDocument();
        $article_DOM->loadHTMLFile($published_path.$request);
        $h1 = $article_DOM->getElementsByTagName('h1');
        if ($h1->length>0) {
            $page_title = $h1->item(0)->nodeValue;
        }
    // same test but with the staging path.
    } else if (strpos(realpath($staging_path.$_GET['a']),$staging_path)===0) {
        // create an article list with just the requested article
        $article_list = array($staging_path.$_GET['a']);
        // pull page title from H1 tag in article
        $article_DOM = new DOMDocument();
        $article_DOM->loadHTMLFile($staging_path.$request);
        $h1 = $article_DOM->getElementsByTagName('h1');
        if ($h1->length>0) {
            $page_title = $h1->item(0)->nodeValue;
        }
    } else {
        // argument 'a' failed all tests, so set error message, and populate normal article list 
	$err_msg = "404 not found";
        $article_list = preg_grep('/^[^.]/', scandir($published_path, 1));
        foreach ($article_list as &$value) { $value = $published_path.$value;} unset($value);    
    }
} else {
    // no argument passed in url, so just make the standard article list
    $article_list = preg_grep('/^[^.]/', scandir($published_path, 1));
    foreach ($article_list as &$value) { $value = $published_path.$value;} unset($value);    
}

if (!empty($_GET['s'])) {
    $request = htmlspecialchars($_GET['s'], ENT_QUOTES, 'UTF-8');
    $page_links = array($request);
}

?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $page_title; ?></title>
<base href="https://www.taoexmachina.com/">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
foreach ($page_links as $link) {
    echo '<link rel="stylesheet" type="text/css" href="'.$link.'">';
}
?>
</head>
<body>

<?php
//begin parsing page_elements array from config.php
foreach ($page_elements as $element) {
    //special element, representing that included articles or content should be loaded now
    if ($element == "#content") {
        if (!empty($err_msg)) { echo $err_msg; }
        foreach ($article_list as $article) {
            echo "<div class='article'>";
            include $article;
            echo "</div>";
        }
    // raw html could be included in the page_elements array. I crudely just look for the "<" at the start of a tag.
    } else if (strpos($element, "<") === 0) {
        // output the inserted html as is
	echo $element; 
    } else {
        // failing to be anything special, the element should be a file to be included now 
        include $element;
    }
}
?>
</body>
</html>
