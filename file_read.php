<html>
<head>
</head>
<body>

<?php

echo "My fisrt PHP<br>";

if ($file = fopen("/proc/cpuinfo","rb")) {
 while (!feof($file)) {
  $line = fgets($file);
  print $line."<br>";
 }
} else {
 echo "File cannot be opened";
}

?>

</body>
</html>
