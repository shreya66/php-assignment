<?php
 	
 	//establish the Connection with Database
	$con = mysqli_connect('localhost','root','','php');
 	
 	//Displays error if connection not established
	if($con->connect_error){
		echo $con->connect_error;
	}
 
?>