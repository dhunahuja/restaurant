<?php

$id = $_GET['id'];
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="sourcefuse"; // Mysql password 
$db_name="restaurant"; // Database name 
$tbl_name="restaurant_list"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");



// get value of id that sent from address bar
if(!isset($login_session)){

// Retrieve data from database 
$sql="SELECT * FROM restaurant_list WHERE user_id= $id";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);

}else{

header("Location:index.php");
}

?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<form name="form" method="post" action="update_ac.php">
<td>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>&nbsp;</td>
<td colspan="3"><strong>Update data </strong> </td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center"><strong>name</strong></td>
<td align="center"><strong>location</strong></td>
<td align="center"><strong>cusines</strong></td>
<td align="center"><strong>contact no.</strong></td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center">
<input name="name" type="text" id="name" value="<?php echo $rows['name'];?>">
</td>
<td align="center">
<input name="location" type="text" id="location" value="<?php echo $rows['location'];?>" size="15">
</td>
<td align="center">
<input name="cusines" type="text" id="cusines" value="<?php echo $rows['cusines'];?>" size="15">
</td>
<td align="center">
<input name="contactno" type="text" id="contactno" value="<?php echo $rows['contactno'];?>" size="15">
</td>

</tr>

<tr>
<td>&nbsp;</td>
<td>
<input name="user_id" type="hidden" id="user_id" value="<?php echo $rows['user_id'];?>">
</td>
<td align="center">
<input type="submit" name="Submit" value="Submit">
</td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<a href="logout.php">logout</a>
<?php
// close connection 
mysql_close();
?>

