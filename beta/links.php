<!DOCTYPE html>
<html>
<head>
<title>The Way from a machine</title>
<base href="http://www.taoexmachina.com/beta">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="beta/maroon-black-ivory-02-2015.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
                // grab the initial top offset of the navigation 
                var stickyNavTop = $('.nav-bar').offset().top;
                console.log(stickyNavTop);
                // our function that decides weather the navigation bar should have "fixed" css position or not.
                var stickyNav = function(){
                    var scrollTop = $(window).scrollTop(); // our current vertical position from the top
                    console.log(scrollTop);     
                    // if we've scrolled more than the navigation, change its position to fixed to stick to top,
                    // otherwise change it back to relative
                    if (scrollTop > stickyNavTop) { 
                        $('.nav-bar').addClass('sticky');
                        console.log("add class");
                    } else {
                        $('.nav-bar').removeClass('sticky'); 
                    }
                };

                stickyNav();
                // and run it again every time you scroll
                $(window).scroll(function() {
                        stickyNav();
                });
        });
</script>

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
<h2>Tim around the web</h2>
<hr>
https://www.facebook.com/insideoutboy<br/>
https://twitter.com/crashcartpro<br/>
https://256.makerslocal.org/wiki/User:CrashCart<br/>
https://github.com/crashcartpro<br/>
http://www.codecademy.com/crashcartpro<br/>
</div>
</div>
</div>
<?php

/*===== PULL FOOTER =====*/
include 'footer.part';

?>
</body>
</html>
