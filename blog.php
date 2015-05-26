<!DOCTYPE html>
<html>
<head>
 <title>The Way from a machine</title>
 <meta name="viewport" content="width=device-width; initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="maroon-black-ivory-10-2013.css">
</head>
 
<body>

<!--
==============================
      Header of page
==============================
-->
<div id="masthead">
 <div class="wrapper">
  <img id="logo" src="images/TaoExMachina_150.png" alt="Ying Yang Gear" />
  <div class="title">Tao&nbsp;Ex&nbsp;Machina<br/><span style="font-size:0.75em;">The&nbsp;Way&nbsp;from&nbsp;a&nbsp;machine</span><br/><span class="author">Project blog by Tim Heath</span></div> 
 </div>
</div>

<!--
==============================
        Site navigation
==============================
-->
<div id="nav-bar">
 <div class="wrapper">
  <a class="nav" href="http://www.taoexmachina.com/blog.php">Blog</a>
  <a class="nav" href="http://www.taoexmachina.com/resume.php">Resume</a>
  <a class="nav" href="http://www.taoexmachina.com/videos.php">Videos</a>
  <a class="nav" href="http://www.taoexmachina.com/links.php">Links</a>
 </div>
</div>

<!--
==============================
          Page Quote
==============================
-->
<div id="quote">
<?php
exec('fortune taoexmachina',$quoteOutput);
$quoteLength=count($quoteOutput);
for($x=0;$x<$quoteLength;$x++){
 echo $quoteOutput[$x];
 echo "<br>";
}
?>
</div>

<!--
==============================
      Content loader
==============================
-->
<?php

$Dir = "/var/www/html/blog_pg_1/";
$ContentDir = opendir("/var/www/html/blog_pg_1/");
while (!($FileName = readdir($ContentDir)) === FALSE)
{
 if (is_file($Dir.$FileName))
 {
  if ($File = fopen($Dir.$FileName,"rt"))
  {
   print "<div class='content'>";
   while (!feof($File))
   {
    $Line = fgets($File);
    print $Line;
   }
   fclose($File);
   print "</div>";
  }
 }
}
closedir($ContentDir);
?>

<!--
==============================
      Footer of Page
==============================
-->
<div id="footer">
 <div class="wrapper">
  <pre class="footer-block">
<?php
$footerOutput1 = system('cat footer.txt | cowsay -n',$footerOutput2);
$footerLength=count($footerOutput);
for($x=0;$x<$footerLength;$x++){
 echo $footerOutput[$x];
 echo "<br>";
}
?>
  </pre>
 </div>
</div>

</body>
</html>
