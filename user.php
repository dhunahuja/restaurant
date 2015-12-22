<?php

include ("librarylib.php");

session_start();

require("sessioncheck.php");

html_begin($choralcfg_sitename, $choralcfg_sitename, $choralcfg_cssfile);

if (($_SERVER["REQUEST_METHOD"] == "GET")||($_SERVER["REQUEST_METHOD"] == "POST")) {
   $timestamp = date("YmdHis");
   //Grab all of the variables and store em in the database
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       while(list($key,$value)=each($HTTP_POST_VARS)) {
          $$key = $value;
          if ($DEBUG) print "HTTP_POST_VARS[$key] = $value<br>\n";
       }
   }
   if ($_SERVER["REQUEST_METHOD"] == "GET") {
       while(list($key,$value)=each($HTTP_GET_VARS)) {
          $$key = $value;
          if ($DEBUG) print "HTTP_GET_VARS[$key] = $value<br>\n";
       }
   }
}

print "<TABLE width=\"100%\" border=\"0\" cellpadding=\"0\" ".
      "cellspacing=\"10\">\n";
print "<TR><TD valign=\"top\">\n";
include("addlinks.phtml");
print "</TD>\n";
print "<TD>";
if ($_SESSION["permission"] == "admin") {
    switch($action) {
        case "add":
            include("add_user.phtml");
            break;
        case "delete":
            include("delete_user.phtml");
            break;
        default:
            include("edit_user.phtml");
            break;
    }
} else if ($_SESSION["permission"] == "user") {
      print( 
            "<p>$choral_adduser_permissiondenied</p>\n<p>$choral_thanks</p>\n"
           );
} else {
      print(
            "<p>$choral_youarenotloggedin</p>\n<p>$choral_thanks</p>\n"
           );
}
library_footer();
print "</TD></TABLE>";
html_end();

?>
