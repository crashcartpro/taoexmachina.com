<!DOCTYPE html>
<html>
<head>
 <title>The Way from a machine</title>
 <base href="http://www.taoexmachina.com/">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="maroon-black-ivory-07-2014.css">
</head>
 
<body>

<!--
==============================
      Header of page
==============================
-->
<div id="masthead">
 <div class="wrapper">
  <img src="images/TaoExMachina_150.png" alt="Ying Yang Gear" />
  <span><h1>Tao&nbsp;Ex&nbsp;Machina</h1>
  <h2>The Way from a machine</h2>
  <h3>Project blog by Tim Heath</h3></span>
 </div>
</div>

<!--
==============================
        Site navigation
==============================
-->
<div id="nav">
 <div class="wrapper">
  <ul>
   <li><a href="index.php">Blog</a>
   </li>
   <li><a href="museum.php">Museum</a>
   </li>
   <li><a href="resume.php">Resume</a>
   </li>
   <li><a href="videos.php">Videos</a>
   <li><a href="links.php">Links</a>
   </li>
  </ul>
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
         Page Content
==============================
-->
<div class="wrapper">
 <div class="video-column">
  <h2><a id="talks">Talks</a></h2>
  <hr>
  <iframe width="288" height="162" src="https://www.youtube.com/embed/XBtRu4Gjouk" frameborder="0" allowfullscreen></iframe>
  <iframe width="288" height="162" src="https://www.youtube.com/embed/UvYffDYUEgM" frameborder="0" allowfullscreen></iframe>
 </div>

 <div class="video-column">
  <h2><a id="projects">Projects</a></h2>
  <hr>
  <iframe width="288" height="162" src="https://www.youtube.com/embed/ZGvMbKtTaPQ" frameborder="0" allowfullscreen></iframe>
  <iframe width="288" height="162" src="https://www.youtube.com/embed/Ht5GdcKvUjA" frameborder="0" allowfullscreen></iframe>
  <iframe width="288" height="162" src="https://www.youtube.com/embed/AHp-1C8Ep9U" frameborder="0" allowfullscreen></iframe>
  <iframe width="288" height="162" src="https://www.youtube.com/embed/7quhFYJxMok" frameborder="0" allowfullscreen></iframe> 
</div>

 <div class="video-column">
  <h2><a id="fun">Fun</a></h2>
  <hr>
  <iframe width="288" height="162" src="https://www.youtube.com/embed/02GwHVyJO3A" frameborder="0" allowfullscreen></iframe>
 </div>
</div>

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
