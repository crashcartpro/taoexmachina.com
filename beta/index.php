<!DOCTYPE html>
<html>
<head>
<title>The Way from a machine</title>
<base href="http://www.taoexmachina.com/beta">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="beta/maroon-black-ivory-02-2015.css">
</head>
<body>
<?php

/*===== PULL HEADERS =====*/
include 'header.part';
include 'nav-bar.part';
/*===== PAGE CONTENT =====*/
echo "<div id='content'>";
echo "<div class='wrapper'>";
include 'quote.part';
$path_to_content = "/var/www/html/beta/mainpage/";
// Test for any arguments passed in url
if (!empty($_GET)) {
 // Test for file to exist AND collapse any redirects 
 if ($real_article_path = realpath($path_to_content.$_GET['a'])) {
  //Test that the colapsed path still points where we expect 
  if (strpos($real_article_path, $path_to_content) === 0){
   //All tests satisfied, include the specified article as the only content.
   echo "<div class='article'>";
   include $real_article_path;
   echo "</div>";
  } else {
   echo "<p>Path error</p>";
   goto fail;
  }
 } else {
  echo "<p>File error</p>";
  goto fail;
 }
} else {
//Any test for a specified article fails, read in the 5 most recent articles.
fail:
 //read in files in content directory, decending order.
 $files_in_directory = scandir($path_to_content, 1);
 array_pop($files_in_directory);  //leave off ./ and ../
 array_pop($files_in_directory);
 $articles_to_display = array_slice($files_in_directory, 0, 5);  //limit to the first 5
 foreach($files_in_directory as $content_file){
  echo "<div class='article'>";
  include $path_to_content.$content_file;
  echo "</div>";
 }
}
echo "</div>";
echo "</div>";

/*===== PULL FOOTER =====*/
include 'footer.part';

?>

</body>
</html>

