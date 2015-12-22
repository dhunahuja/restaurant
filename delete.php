<?php
session_start();
$_SESSION['user_id'] = $id;
?>
<?php
$servername = "localhost";
$username = "root";
$password = "sourcefuse";
$dbname = "restaurant";
$_POST['user_id']= $id;
// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM restaurant_list WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
