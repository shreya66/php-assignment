<?php
	//Start the Session
	session_start();
    //Include the Database Configuration File
	include "config.php";
  	if(isset($_POST['done'])) {
        $image = $_FILES['image']['name'];
        $target = "images/".basename($image);
    	$id = isset($_GET['id']) ? $_GET['id'] : '';
    	$name = $_POST['name'];
    	$mobile = $_POST['mobile'];
    	$email = $_POST['email'];
    	$gender = $_POST['gender'];
    	$country = $_POST['country'];
    	$state = $_POST['state'];
        $city = $_POST['city'];
        $address = $_POST['address'];
     
    	if($id && $name && $mobile && $email && $gender && $country && $state && $city && $address && $target) {
    	
    		$q = "UPDATE customer SET id=$id, name='$name', mobile='$mobile', email='$email', gender='$gender', country='$country', state='$state', city='$city', address='$address',  image='$target' WHERE id=$id";
    		$query=mysqli_query($con,$q);
    		echo "<br><br><br><h3 style='text-align: center; color: green;'>Client Details Updated Successfully</h3><hr>";
    	} else {
    		echo "<br><br><br><h3 style='text-align: center; color: red;'>Please fill all the fields</h3>";
    	}
  	}
?>
<!DOCTYPE html>
<html>
<head>

	<title>Edit Client Details</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  
  	<link rel="stylesheet" type="text/css" href="style.css">
  	<script type="text/javascript" src="validator1.js"></script>
</head>
<body>
  <h2 style="text-align: center"2>Update Client's Data</h2>

   <div class="row">

            <div class="col-lg-6">

                <!-- Update Details Form -->
                <form method="post" enctype="multipart/form-data">
                    
                    <!-- Name field -->
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" autocomplete="off">
                        <p><span class="emsg1 hidden1">Please Enter a Valid Name</span></p>
                    </div>

        			<!-- Phone field -->
        			<div class="form-group">
        				<label for="phone">Phone:</label>
        				<input type="mobile" class="form-control" id="mobile" placeholder="Enter Contact Number" name="mobile">
        				<p><span class="emsg2 hidden2">Please Enter a Valid Contact Number</span></p>
        			</div>

        			<!-- Email field -->
            		<div class="form-group">
              			<label for="email">Email:</label>
              			<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
              			<p><span class="emsg3 hidden3">Please Enter a Valid Email</span></p>
            		</div>

            		<!-- Gender field -->
            		<div class="form-group">
            			<label for="gender">Gender:</label>
            			<input type="radio" name="gender" value="male">Male
            			<input type="radio" name="gender" value="female">Female<br>
            		</div>
                    <!-- COUNTRY,STATE,CITY -->
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
        			<!-- Address field -->
        			<div class="form-group">
            			<label for="address">Address: </label>
            			<input type="text" id="address" class="form-control" name="address" placeholder="Enter Address">
            		</div>
                        <input type="hidden" name="size" value="1000000">

                    <div>
                        <input type="file" name="image" onchange="preview_image(event)"><br>
                    </div>

            		<!-- Update button -->
            		<div class="form-group" style="text-align: center;">
            			<button type="submit" class="btn btn-danger" name="done" id="submit" style="display: inline-block;">Update</button>
            		</div>

            		<br>

  		        </form>

            </div>

            <div class="col-lg-6">

                <h3>Preview Image: </h3>

                <img id="output_image">

            </div>

        </div>

	</div>
    <script type='text/javascript'>
        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>
</html>