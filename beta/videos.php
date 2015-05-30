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

?>
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
</div>
<?php

/*===== PULL FOOTER =====*/
include 'footer.part';

?>
</body>
</html>
