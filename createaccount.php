<html>
<head>
<title>REGISTRATION FORM</title>
<body>

<form name="registration" method="post" action="">

USERNAME:<input type="text" name="name" value=""></br>
EMAIL-ID:<input type="text" name="email" value=""></br>
PASSWORD:<input type="text" name="password" value=""></br>
RE-PASSWORD:<input type="text" name="repassword" value=""></br>
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
If($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['password']==''|| $_REQUEST['repassword']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into user(username,password,email) values('".$_REQUEST['username']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."'";
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

