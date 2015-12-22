<?php
 $_POST['id'] = $id;

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="sourcefuse"; // Mysql password 
$db_name="restaurant"; // Database name 
$tbl_name="restaurant_list"; // Table name
 
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// update data in mysql database
//if (isset($_POST['cuisines'])) {    
   // $cuisines = $_POST['cuisines'];     
If (isset($_POST)){
	$name=$_POST['name'];
	$location=$_POST['location'];
	$cusines=$_POST['cusines'];
	$contactno=$_POST['contactno'];
}
$sql="UPDATE restaurant_list SET name='$name', location='$location', cusines='$cusines', contactno='$contactno' WHERE user_id= '".$id."';
if (mysql_query($sql)){
echo "Successful";
echo "<BR>";
echo "<a href='restaurant_list.php'>View result</a><br>";
}else {
echo "ERROR";
}

?>
<a href="logout.php">logout</a>

