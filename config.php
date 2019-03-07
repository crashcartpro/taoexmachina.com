<?php
/************************** 
  BNC config file v0.1 
 **************************/

// Paths should be full, not relative, as they may be used to confirm requests
// published_path gets picked up and displayed as #content
$published_path = "/var/www/taoexmachina.com/mainpage/";
// staging_path holds articles that are not published, but can still be requested directly
$staging_path = "/var/www/taoexmachina.com/staging/";

// Page title is the default as it appears in the HTML head
$page_title = "The Way From a Machine";

// page_links is an array of css or js files that get included in building your pages
$page_links = array(
	"red-black-grey-08-2018.css",
);

// page_elements is an array of files that are included to build a page, in the order listed.
// Should be relative paths, files can be named anything, but should be html or php parts that get included into the greater whole.
// #content represents where articles from the above direcotries are pulled in
$page_elements = array(
	"header.part",
	"nav-bar.part",
	"<div id='content'><div class='wrapper'>",
	"quote.part",
	"#content",
	"</div></div>",
	"footer.part",
);

?>
