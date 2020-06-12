<?php /*
   +------------------------------------------------------------------+
   | Green-Beast.com                                                  |
   | PHP: Browser Sniffer                                             |
   | PHP Hypertext Preprocessor                                       |
   | Copyright July 2006                                              |
   | Use with attribution by visible link please!                     |
   | Attribute to: <a href="http://green-beast.com/">Mike Cherim</a>  |
   +------------------------------------------------------------------+
*/ ?>

<?php // IMPORTANT *************************************************
/* 
  INFORMATION:
  This script should not be used in its complete form. Instead, only 
  the needed script blocks should be employed. For example, let's say
  you made a site that renders great in all browsers, yet, for some 
  odd reason it doesn't look right in Opera 9. In such a case you have
  a couple of options: You can just go into your CSS, locate, and fix
  the problem, assuming that is you can do so without messing up the
  styles in other browsers. Another option, one using this script, is
  to create a handful of specific CSS rules/properties to address the
  discrepancy and return a link to a special style sheet with said 
  information on it or simply return those styles directly to the head
 (below the main CSS link so it effectively overrides the default 
  styles). I made this script because, unlike Internet Explorer 
  browsers, a conditional comment cannot be used to call or link a 
  special CSS on most browsers. Moreover, some of the other methods 
  for linking special styles/style sheets is complicated at best. 
  This method is really designed for Opera browsers and some Mac 
  browsers like IE 5.2 for Mac, but you can use it for any browser, 
  even IE should you choose to employ this method instead of using a
  conditional comment.

  EXPERIMENT PAGE DISCLAIMER
  The script used on the experiment page is far more complicated than
  it needs to be, but since I wanted to actually return your browser 
  info to you when you visit (plus to help me determine what's working
  and what's not), I had to add a lot of scripting. And it's not complete.
  It works is nearly everything I tested on, but more versions, builds, 
  and revisions yet to be will render it obsolete in the future. Script
  blocks will have to be added to keep it current. However, browsers are 
  getting better so it is backwards compatibility that is of the most 
  importance. Note: I am no longer updating this script for newer browsers, 
  but with what's shown you should be able to figure out how to modify it
  for your personal needs. Have fun.

  USAGE INSTRUCTIONS
  I will use the Mac IE 5.2 browser for example. Let's say it needs 
  special styles that need to be linked to or returned to the page on
  which they're needed. Here's how it's meant to be used:

  1) To link a style sheet:

     <?php 
     // First grab the HTTP User Agent info and it becomes the $ua_ok variable
        $ua_ok= $_SERVER['HTTP_USER_AGENT'];
     // Now create a condition which only outputs the link if there is a browser match
        if( eregi( "Mac_PowerPC", $ua_ok ) && 
            eregi( "msie", $ua_ok ) && 
            eregi( "[5]\.[2][0-9]", $ua_ok ) ) {
        echo ( '<link rel="stylesheet" type="text/css" href="styles/MacIE52.css" media="screen" />' );
        }
     ?>

  2) To return CSS to the head:

     <?php
     // First grab the HTTP User Agent info and it becomes the $ua_ok variable
        $ua_ok= $_SERVER['HTTP_USER_AGENT'];
     // Now the create a condition which only outputs the CSS info if there is a browser match
        if( eregi( "Mac_PowerPC", $ua_ok ) && 
            eregi( "msie", $ua_ok ) && 
            eregi( "[5]\.[2][0-9]", $ua_ok ) ) {
        echo ( '<style type="text/css" media="screen" >
                  body {
                    /* some_unique_style_info_for_body_in_this_example */
                  }
                </style>' );
        }
     ?>

  That's it. Be sure the script is placed in the <head></head> and that it
  comes AFTER the normal CSS link so it overrides it.

  Below are the other script blocks I've created thus far (Dec 19th, 2007)

  NOTE: This script will not be supported in PHP6 because of ereg()/eregi() isn't
        supported. With PHP6 you'll have to use preg_match('(MATHCHES HERE)i'); 
        The lowercase i, like the ereg() function, makes it case-insensitive.
*/
?>

<?php // First the Windows( PC) browsers **************************** ?>


<?php
// Win Internet Explorer 7.0
if( eregi( "Windows", $ua_ok ) && 
    eregi( "msie", $ua_ok ) && 
    eregi( "[7]\.[0]", $ua_ok ) ) {
echo( 'Link or styles go here' );    
} 
?>



<?php
// Win Internet Explorer 6.x or AOL 9.x
if( eregi( "Windows", $ua_ok ) && 
    eregi( "msie", $ua_ok ) && 
    eregi( "[6]\.[0-9]", $ua_ok ) ) {
echo( 'Link or styles go here' );
} 
?>



<?php
// Win Internet Explorer 5.5
if( eregi( "Windows", $ua_ok ) && 
    eregi( "msie", $ua_ok ) && 
    eregi( "[5]\.[5]", $ua_ok ) ) {
echo( 'Link or styles go here' );
} 
?>



<?php
// Win Internet Explorer 5.0
if( eregi( "Windows", $ua_ok ) && 
    eregi( "msie", $ua_ok ) && 
    eregi( "[5]\.[01]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>

 

<?php
// Win Internet Explorer 4.0
if( eregi( "Windows", $ua_ok ) && 
    eregi( "msie", $ua_ok ) && 
    eregi( "[4]\.[01]", $ua_ok ) ) {
echo( 'Link or styles go here' );
} 
?>


<?php
// Win Opera 7.03
if( eregi( "Windows", $ua_ok ) && 
    eregi( "Opera", $ua_ok ) && 
    eregi( "[7]\.[03]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php
// Win Opera 7.23
if( eregi( "Windows", $ua_ok ) && 
    eregi( "Opera", $ua_ok ) && 
    eregi( "[7]\.[23]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Win Opera 8.50
if( eregi( "Windows", $ua_ok ) && 
    eregi( "Opera", $ua_ok ) && 
    eregi( "[8]\.[50]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Win Opera 9.x
if( eregi( "Windows", $ua_ok ) && 
    eregi( "Opera", $ua_ok ) && 
    eregi( "[9]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php 
// Win Firefox 3.0
if( eregi( "Windows", $ua_ok ) && 
     eregi( "firefox", $ua_ok ) && 
     eregi( "[1]\.[9]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php 
// Win Firefox 2.0
if( eregi( "Windows", $ua_ok ) && 
     eregi( "firefox", $ua_ok ) && 
     eregi( "[1]\.[8]\.[1]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php
// Win Firefox 1.5.0
if( eregi( "Windows", $ua_ok ) && 
    eregi( "firefox", $ua_ok ) && 
    eregi( "[1]\.[5]\.[0]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Win Firefox 1.0.7
if( eregi( "Windows", $ua_ok ) && 
    eregi( "firefox", $ua_ok ) && 
    eregi( "[1]\.[0]\.[7]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Win Firefox 1.0.7
if( eregi( "Windows", $ua_ok ) && 
    eregi( "firefox", $ua_ok ) && 
    eregi( "seamonkey", $ua_ok ) && 
    eregi( "[1]\.[8]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Win Mozilla 1.7.12
if( eregi( "Windows", $ua_ok ) && 
    eregi( "mozilla", $ua_ok ) && 
    !eregi( "netscape", $ua_ok ) &&
    eregi( "rv:[1]\.[7]\.[12]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Win Mozilla 1.6
if( eregi( "Windows", $ua_ok ) && 
    eregi( "mozilla", $ua_ok ) && 
    eregi( "rv:[1]\.[6]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php
// Win Mozilla 1.5
if( eregi( "Windows", $ua_ok ) && 
    eregi( "mozilla", $ua_ok ) && 
    eregi( "rv:[1]\.[5]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php
// Win Netscape 4.78
if( eregi( "Windows", $ua_ok ) && 
    eregi( "mozilla", $ua_ok ) && 
    eregi( "[4]\.[78]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Win Netscape 6.x
if( eregi( "Windows", $ua_ok ) && 
    eregi( "netscape", $ua_ok ) && 
    eregi( "[6]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Win Netscape 7.x
if( eregi( "Windows", $ua_ok ) && 
    eregi( "netscape", $ua_ok ) && 
    eregi( "[7]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Win Flock 0.4
if( eregi( "Windows", $ua_ok ) && 
    eregi( "flock", $ua_ok ) && 
    eregi( "[0]\.[4]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Win Safari 3
if( eregi( "Windows", $ua_ok ) && 
    eregi( "safari", $ua_ok ) && 
    eregi( "[3]\.[0]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php // Now the Mac browsers **************************************** ?>


<?php 
// Mac Firefox 1.0
if( eregi( "Macintosh", $ua_ok ) && 
    eregi( "firefox", $ua_ok ) && 
    eregi( "rv:[1]\.[7]\.[5]", $ua_ok ) &&
    eregi( "[1]\.[0]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php
// Mac Firefox 1.0.7
if( eregi( "Macintosh", $ua_ok ) && 
    eregi( "firefox", $ua_ok ) && 
    eregi( "[1]\.[0]\.[7]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Mac Firefox 1.5.0
if( eregi( "Macintosh", $ua_ok ) && 
    eregi( "firefox", $ua_ok ) && 
    eregi( "[1]\.[5]\.[0]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php 
// Mac Firefox 2.0
if( eregi( "Macintosh", $ua_ok ) && 
     eregi( "firefox", $ua_ok ) && 
     eregi( "[1]\.[8]\.[1]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php 
// Mac Firefox 3.0
if( eregi( "Macintosh", $ua_ok ) && 
     eregi( "firefox", $ua_ok ) && 
     eregi( "[1]\.[9]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php 
// Mac Camino 1.03
if( eregi( "Macintosh", $ua_ok ) && 
     eregi( "camino", $ua_ok ) && 
     eregi( "[1]\.[8]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php 
// Mac Camino 1.1
if( eregi( "Macintosh", $ua_ok ) && 
     eregi( "camino", $ua_ok ) && 
     eregi( "[1]\.[8]\.[1]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php 
// Mac Camino 1.2
if( eregi( "Macintosh", $ua_ok ) && 
     eregi( "camino", $ua_ok ) && 
     eregi( "[1]\.[9]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php 
// Mac SeaMonkey 1.0
if( eregi( "Macintosh", $ua_ok ) && 
     eregi( "seamonkey", $ua_ok ) && 
     eregi( "[1]\.[8]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php 
// Mac SeaMonkey 1.1
if( eregi( "Macintosh", $ua_ok ) && 
     eregi( "seamonkey", $ua_ok ) && 
     eregi( "[1]\.[8]\.[1]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php
// Mac Mozilla 1.7.2
if( eregi( "Macintosh", $ua_ok ) && 
    eregi( "mozilla", $ua_ok ) && 
    eregi( "rv:[1]\.[7]\.[12]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Mac Opera 7.5.4ul
if( eregi( "Macintosh", $ua_ok ) && 
    eregi( "opera", $ua_ok ) && 
    eregi( "[7]\.[0-9,a-z]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Mac Opera 8.5
if( eregi( "Macintosh", $ua_ok ) && 
    eregi( "opera", $ua_ok ) && 
    eregi( "[8]\.[5]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Mac Opera 9.x
if( eregi( "Macintosh", $ua_ok ) && 
    eregi( "opera", $ua_ok ) && 
    eregi( "[9]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Mac Safari 1.3
if( eregi( "Macintosh", $ua_ok ) && 
    eregi( "safari", $ua_ok ) && 
    eregi( "[312]\.[6]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Mac Camino 1.0
if( eregi( "Macintosh", $ua_ok ) && 
    eregi( "camino", $ua_ok ) && 
    eregi( "[1]\.[0]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Mac Mozilla 1.6
if( eregi( "Macintosh", $ua_ok ) && 
    eregi( "mozilla", $ua_ok ) && 
    eregi( "rv:[1]\.[6]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Mac Nescape 7.2
if( eregi( "Macintosh", $ua_ok ) && 
    eregi( "netscape", $ua_ok ) && 
    eregi( "[7]\.[2]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Mac Safari 2.0
if( eregi( "Macintosh", $ua_ok ) && 
    eregi( "safari", $ua_ok ) && 
    eregi( "[417]\.[0-9]\.[0-9]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Mac Safari 2.0.4
if( eregi( "Macintosh", $ua_ok ) && 
    eregi( "safari", $ua_ok ) && 
    eregi( "[419]\.[0-9]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php
// Mac Safari 3.x
else if( eregi( "Macintosh", $ua_ok ) && 
     eregi( "safari", $ua_ok ) && 
     eregi( "[3]\.[0]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php
// Mac Internet Explorer 5.2
if( eregi( "Mac_PowerPC", $ua_ok ) && 
    eregi( "msie", $ua_ok ) && 
    eregi( "[5]\.[2][0-9]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php // Now I offer Linux ********************************************** ?>

<?php
// Linux Konqueror 3.4
if( eregi( "Linux", $ua_ok ) && 
    eregi( "konqueror", $ua_ok ) && 
    eregi( "[3]\.[4]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php 
// Linux Firefox 1.0 RedHat
else if( eregi( "Linux", $ua_ok ) && 
     eregi( "firefox", $ua_ok ) && 
     eregi( "rv:[1]\.[7]\.[5]", $ua_ok ) &&
     eregi( "[1]\.[0]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php 
// Linux Firefox 2.0 Iceweasel
if( eregi( "Linux", $ua_ok ) && 
     eregi( "firefox", $ua_ok ) && 
     eregi( "[1]\.[8]\.[1]\.[6]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php
// Linux Firefox 2.0 Swiftfox
if( eregi( "Linux", $ua_ok ) && 
    eregi( "firefox", $ua_ok ) && 
    eregi( "[1]\.[8]\.[1]\.[4]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>

<?php
// Linux Firefox 2.0 Ubuntu
if( eregi( "Linux", $ua_ok ) && 
    eregi( "firefox", $ua_ok ) && 
    eregi( "[1]\.[8]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php
// Linux Firefox 2.0
if( eregi( "Linux", $ua_ok ) && 
    eregi( "firefox", $ua_ok ) && 
    eregi( "[1]\.[8]\.[1]\.[1]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


<?php
// Linux Firefox 1.0.7
if( eregi( "Linux", $ua_ok ) && 
    eregi( "firefox", $ua_ok ) && 
    eregi( "[1]\.[0]\.[7]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Linux Firefox 1.5.0
if( eregi( "Linux", $ua_ok ) && 
    eregi( "firefox", $ua_ok ) && 
    eregi( "[1]\.[5]\.[0]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Linux Mozilla 1.7.2
if( eregi( "Linux", $ua_ok ) && 
    eregi( "mozilla", $ua_ok ) && 
    eregi( "rv:[1]\.[7]\.[12]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php
// Linux Opera 9.x
if( eregi( "Linux", $ua_ok ) && 
    eregi( "opera", $ua_ok ) && 
    eregi( "[9]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>



<?php // Now I offer FreeBSD ********************************************** ?>


<?php
if( eregi( "FreeBSD", $ua_ok ) && 
    eregi( "firefox", $ua_ok ) && 
    eregi( "[1]\.[8]\.[1]", $ua_ok ) ) {
echo( 'Link or styles go here' );
}
?>


