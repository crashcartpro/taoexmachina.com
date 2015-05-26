<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="frameworks/bootstrap.min.css">
   <link rel="stylesheet" href="index.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
   <h1>AngularJS Examples</h1>

<?php
$x=0;
$files_in_directory = scandir("/var/www/html/angular/", 0);
array_shift($files_in_directory);
array_shift($files_in_directory);
foreach($files_in_directory as $FileName){
   $x = $x + 1;
   if (is_file($FileName)) {
      if ($File = fopen($FileName,"rt")) {
         print "<a href='".$FileName."'><h2>".$FileName."</h2></a>";
         print "<input class='toggle' id='item".$x."' type='checkbox'><label for='item".$x."'>view code</label><br><div>";
         while (!feof($File)) {
            $Line = fgets($File);
            print htmlspecialchars($Line)."<br>";
         }
         print "</div>";
         fclose($File);
      } else {
         print "File cannot be opened";
      }
   }
} 

?>
</div>
</body>
</html>
