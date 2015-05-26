<html><head></head><body><?php

$path_to_articles = "/var/www/html/mainpage/";

if (!empty($_GET)) {
 if ($real_article_path = realpath($path_to_articles.$_GET['a'])) {
  if (strpos($real_article_path, $path_to_articles) === 0){
   include $real_article_path;
  } else {
   echo "ERMAHGERD, YER FERBERDERN.";
  }
 } else {
  echo "ERMAHGERD, FERL NERT FERND.";
 }
} else {
 echo "ERMAHGERD, NER ERNPERT.";
}

?></body></html>
