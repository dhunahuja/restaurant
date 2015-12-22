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


@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

if(isset($_POST['upload']) && $_FILES['image']['size'] > 0)
{
$fileName = $_FILES['image']['name'];
$tmpName  = $_FILES['image']['tmp_name'];
move_uploaded_file($tmpName, "./uploads/$fileName");
$image = "./uploads/$fileName";

$sql="UPDATE restaurant_list SET image='$image' WHERE user_id= '".$id."'";
mysql_query($sql) or die(mysql_error());
echo "<br>File $fileName uploaded<br>";
}
?>
<form method="post" action="" enctype="multipart/form-data">
<table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
<tr>
<td width="246">
<input type="hidden" name="MAX_FILE_SIZE" value="2000000000">
<input name="image" type="file" id="image">
</td>
<td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
</tr>
</table>
</form>
