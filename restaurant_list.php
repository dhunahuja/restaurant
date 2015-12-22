<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="sourcefuse"; // Mysql password 
$db_name="restaurant"; // Database name 
$tbl_name="restaurant_list"; // Table name

//define variables
$user_id = $name = $location = $cusines = $contactno ="";

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


// get value of id that sent from address bar
$sql="SELECT * FROM restaurant_list";
//print_r($sql);die;
$result=mysql_query($sql);



?>
<h3 align="center"> Hellow <?php echo $login_session; ?></h3> 
<form  id="Upload" action="" enctype="multipart/form-data">
<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>
<table width="400" border="1" cellspacing="0" cellpadding="3">


<tr>
<td align="center"><strong>user id</strong></td>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>location</strong></td>
<td align="center"><strong>cusines</strong></td>
<td align="center"><strong>contact no.</strong></td>
<td align="center"><strong>image</strong></td>
<td align="center"><strong>delete</strong></td>
<td align="center"><strong>Update</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){

?>

<tr>
<td><?php echo $rows['user_id'];?></td>
<td><?php echo $rows['name']; ?></td>
<td><?php echo $rows['location']; ?></td>
<td><?php echo $rows['cusines']; ?></td>
<td><?php echo $rows['contactno']; ?></td>
<td align="center"><a href="upload.php?id=<?php echo $rows['user_id']; ?>">upload image</a></td>

<td align="center"><a href="delete.php?id=<?php echo $rows['user_id']; ?>">delete</a></td>

<td align="center"><a href="update.php?id=<?php echo $rows['user_id']; ?>">update</a></td>

</tr>

<?php
}
?>

</table>
</td>
</tr>
</table>
</form>
<a href="logout.php">logout</a>
<td align="center"><a href="add_restaurant.php?id=<?php echo $rows['user_id']; ?>">add restaurant</a></td>
<?php
mysql_close();
?>
 

