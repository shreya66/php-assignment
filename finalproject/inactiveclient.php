<?php
	
	//Include Database Configuratiion File
	include "config.php";
	//Get the particular Id for which record has to be updated
	$id = $_GET['id'];
	
	//SQL update command
	$q = "UPDATE customer SET status = 0 WHERE id = $id";
	mysqli_query($con, $q);
	header('location:mysql.php');
?>