<?php
//print_r($_POST);
//die('===');
$name = (isset($_POST['name']) ? $_POST['name'] : '');
$mobile = (isset($_POST['mobile']) ? $_POST['mobile'] : '');
$email = (isset($_POST['email']) ? $_POST['email'] : '');
$gender = (isset($_POST['gender']) ? $_POST['gender'] : '');
$country = (isset($_POST['country']) ? $_POST['country'] : '');
$state = (isset($_POST['state']) ? $_POST['state'] : '');
$city = (isset($_POST['city']) ? $_POST['city'] : '');
$address = (isset($_POST['address']) ? $_POST['address'] : '');

if (!empty($name) || !empty($mobile) || !empty($email)|| !empty($gender) || !empty($country) || !empty($state) || !empty($city) || !empty($address) ) {
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
$UPDATE="UPDATE customer SET name='$name', mobile='$mobile', email='$email', gender='$gender', country='$country', state='$state', city='$city',  address='$address' WHERE id=1";
$stmt = $conn->prepare($UPDATE);
//$stmt->bind_param("ssis", $_POST['name'] , $_POST['mobile'], $_POST['email'], $_POST['gender'], $_POST['country'], $_POST['state'], $_POST['city'], $_POST['address']);
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




