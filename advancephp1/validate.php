<?php

//Start the Session
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "php";

// connect to the database
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

echo "connection created";
if (mysqli_connect_error()) {
die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}

$message="";

if(count($_POST)>0) {

//Query for fetching the login details of admin
$query = "SELECT * FROM admin WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_array($result);

if(is_array($row)) {
$_SESSION["username"] = $row['username'];
$_SESSION["password"] = $row['password'];
} else {
$message = "Invalid Email or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:welcome.php");
}
?>