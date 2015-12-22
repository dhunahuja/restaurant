<html>
<head>
<title>create restaurant</title>
<body>

<form name="registration" method="post" action="">
USER ID:<input type="number" name="user_id" value=""></br></br>
RESTAURANT NAME:<input type="text" name="name" value=""></br></br>
LOCATION:<input type="text" name="location" value=""></br></br>
CUSINES:<input type="text" name="cusines" value=""></br></br>
CONTACT NO.:<input type="text" name="contactno" value=""></br></br>
<input type="submit" name="submit" value="submit">
</form>

</body>
</head>
</html>
<?php
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="sourcefuse";       //blank if no password is set for mysql.
$database="restaurant";  //database name which you created
$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);
?>
<?php     //start php tag
//include connect.php page for database connection
//Include('connect.php')
//if submit is not blanked i.e. it is clicked.
If(isset($_REQUEST['submit'])!='')
{
If ($_REQUEST['user_id']=='' || $_REQUEST['name']=='' || 
	$_REQUEST['location']=='' || $_REQUEST['cusines']==''|| 
	$_REQUEST['contactno']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into restaurant_list(user_id, name, location, cusines, 
		contactno) values('".$_REQUEST['user_id']."','"
			.$_REQUEST['name']."', '".$_REQUEST['location']."', '"
			.$_REQUEST['cusines']."','".$_REQUEST['contactno']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}


