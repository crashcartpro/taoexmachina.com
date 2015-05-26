<html>
<head>
<style>
p{width:480px;border:5px solid gray;}
/*div{width:480px;border:5px solid black;}*/
</style>
</head>
<body>
<h1>Files on server:</h1>
<?php

$WebDir = opendir("/var/www/html/");
while (!($FileName = readdir($WebDir)) === FALSE) {
 if (is_file($FileName)) { 
  print "<h2>".$FileName."</h2>"; 
  #print "<div>";
  if ($File = fopen($FileName,"rt")) {
   print "<p>";
   while (!feof($File)) {
    $Line = fgets($File);
    print htmlspecialchars($Line)."<br>";
   }
   print "</p>";
   fclose($File);
  } else {
   print "File cannot be opened";
  }
  #print "</div>;
 }
}
closedir($WebDir);

?>
</body>
</html>
