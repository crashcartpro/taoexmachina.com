<!DOCTYPE html>
<html>
<head>
<title>The Way from a machine</title>
<base href="http://www.taoexmachina.com/">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="maroon-black-ivory-02-2015.css">
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

?>
<div class="article">
<h2>Hardware</h2>
<hr>
Pictures of old computers and some projects<br>
<ul class="gallery">
<li><a href="images/stacks1.jpg"><img src="images/stacks1.jpg" width=150px height=112px></a><br>Stack 1</li>
<li><a href="images/stacks2.jpg"><img src="images/stacks2.jpg" width=150px height=112px></a><br>Stack 2</li>
<li><a href="images/Amiga2000.jpg"><img src="images/Amiga2000.jpg" width=150px></a><br>Amiga 2000</li>
<li><a href="images/Trs80lovesSam.jpg"><img src="images/Trs80lovesSam.jpg" width=150px></a><br>TRS-80</li>
<li><a href="images/3macs.jpg"><img src="images/3macs.jpg" width=150px></a></li>
<li><a href="images/c64c.jpg"><img src="images/c64c.jpg" width=150px></a><br>Commodore 64c</li>
</ul>
</div>

<div class="article">
<h2>Software</h2>
<hr>
<a href="http://taoexmachina.com/example/angular/index.php">AngularJS examples</a><br>
<a href="http://mageape.com/">Mage Ape</a> - Magento API test utility
</div>

<div class="article">
<h2>Images</h2>
<hr>
amature photography and drawings
</div>

<div class="article">
<h2>Music</h2>
<hr>
wishful thinking
</div>
</div>
</div>
<?php

/*===== PULL FOOTER =====*/
include 'footer.part';

?>
</body>
</html>
