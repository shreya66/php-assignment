<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "php";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

$id=$_GET['id'];

$q = "DELETE FROM customer where id=$id";
$result = mysqli_query($conn, $q)

?>