
<?php
$conn=mysqli_connect("localhost","root","","php");
//$echo = ""; 
 if(isset($_POST['submit']))
 {
   $image = $_FILES['image']['name'];
  // image file directory
$target = "upload/".basename($image);
    

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
	  echo "File is valid, and was successfully uploaded.\n";
    } 
  else
    {

	   echo "Upload failed";
    }

 $name=$_POST['name'];
 $mobile=$_POST['mobile'];
 $email=$_POST['email'];
 $gender=$_POST['gender'];
 $country=$_POST['country'];
 $state=$_POST['state'];
 $city=$_POST['city'];
// $target = $_POST['image'];
 $address=$_POST['address'];
  // $pincode=$_POST['pincode'];

 $query="UPDATE customer SET name='$name', mobile='$mobile', email='$email', gender='$gender', country='$country', state='$state', city='$city', address='$address',image='$target' WHERE id=7";
	
// execute query
$run=mysqli_query($conn,$query);
   if($run)
   {
     echo "Data updated Sucessfully";
   }
  else
  {
   echo "Error".mysqli_error($conn);
  }
   
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple HTML Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="validator1.js"></script>
</head>
<body>
<form name="contactForm" onsubmit="return validateForm()" action="form2.php" method="POST">
    <h2>Application Form</h2>
    <input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
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
        <label>Country</label>
        <select name="country">
            <option>Select</option>
            <option>Australia</option>
            <option>India</option>
            <option>United States</option>
            <option>United Kingdom</option>
        </select> 
        <div class="error" id="countryErr"></div>
    </div>
    <div class="row">
        <label>State</label>
        <select name="state">
            <option>Select</option>
            <option>MP</option>
            <option>Gujarat</option>
            <option>Maharashtra</option>
            <option>J&K</option>
        </select> 
        <div class="error" id="stateErr"></div>
    </div>
    <div class="row">
        <label>City</label>
        <select name="city">
            <option>Select</option>
            <option>ujjain</option>
            <option>Indore</option>
            <option>Mumbai</option>
            <option>Ahmedabad</option>
        </select> 
        <div class="error" id="cityErr"></div>
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
        <label>Address</label>
        <input type="textarea" name="address" maxlength="50">
        <div class="error" id="addressErr"></div>
    </div>
            
    <div class="row">
        <input type="submit" value="submit" name="submit">
    </div>
</form>
</body>
</html>
