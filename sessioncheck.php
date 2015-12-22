<?php

if ( !isset( $_SESSION["user_id"] )) {
   $_SESSION["user_id"] = -1;
}

//if ( !isset( $_SESSION["this_name"] )) {
  // $_SESSION["this_name"] = "Unknown User"; 
}

if ( !isset( $_SESSION["username"] )) {
   $_SESSION["username"] = "anonymous";
}

if ( !isset( $_SESSION["permission"] )) {
   $_SESSION["permission"] = "anonymous";
}

//if ( !isset( $_SESSION["link"] )) {
$link = connect_db($host,$user,$passwd,$name)
   or die ( "Unable to connect to server. \n" );
$_SESSION["link"] = $link;
//}

?>

