<?php
//print_r($_POST);
//die('===');
$name = (isset($_POST['name']) ? $_POST['name'] : '');
$mobile = (isset($_POST['mobile']) ? $_POST['mobile'] : '');
$email = (isset($_POST['email']) ? $_POST['email'] : '');
$gender = (isset($_POST['gender']) ? $_POST['gender'] : '');
if (!empty($name) || !empty($mobile) || !empty($email)|| !empty($gender)) {
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "php";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
echo "connection created";
if (mysqli_connect_error()) {
die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} else {
$INSERT = "INSERT Into customer( `name`,`mobile`,`email`,`gender`) values('$name','$mobile','$email','$gender' )";
$stmt = $conn->prepare($INSERT);
//$stmt->bind_param("ssis", $name);
$stmt->execute();
$rnum = $stmt->num_rows;
echo "value inserted";
if ($rnum==0) {
$stmt->close();
}
}
$conn->close(); 
}
?>




