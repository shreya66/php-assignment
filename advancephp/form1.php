


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






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple HTML Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="validator.js"></script>
</head>
<body>

      
<form name="contactForm" onsubmit="return validateForm()" action="form1.php" method="post">
        <div class="header">
                <img src="images/img5.png" alt="logo" />
                <h1>
                    KYC Form
                </h1>
                
                <div class="topnav">
  
 
  <div class="topnav-right">
  <a class="active" href="admin1.php">LOGIN</a>
  </div>
</div>

              
              </div>

    
    <div class="row">
        <label>Full Name</label>
        <input type="text" name="name">
        <div class="error" id="nameErr"></div>
    </div>
    <div class="row">
        <label>Email Address</label>
        <input type="text" name="email">
        <div class="error" id="emailErr"></div>
    </div>
    <div class="row">
        <label>Mobile Number</label>
        <input type="text" name="mobile" maxlength="10">
        <div class="error" id="mobileErr"></div>
    </div>
  
    <div class="row">
        <label>Gender</label>
        <div class="form-inline">
            <label><input type="radio" name="gender" value="male"> Male</label>
            <label><input type="radio" name="gender" value="female"> Female</label> 
        </div>
        <div class="error" id="genderErr"></div>
    </div>
         
    <div class="row">
        <input  type="submit" value="Submit">
    </div>
</form>
</body>
</html>