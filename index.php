
<?php
session_start();
include('login.php'); // Includes Login Script


if(isset($_SESSION['login_username'])){
header("location:restaurant_list.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>

</head>
<body>
<div id="main">
<h1></h1>
<div id="login">
<h2>login</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
<a href="createaccount.php">create account</a>
<a href="forgotpassword.php">forgotpassowrd</a>
</div>
</div>
</body>
</html>
