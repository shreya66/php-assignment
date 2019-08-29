<?php
//connnection


$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "php";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
$id = $_GET['id'];
$q = "UPDATE customer SET status =1 WHERE id= $id";
mysqli_query($conn, $q);

header('location: client.php');


?>