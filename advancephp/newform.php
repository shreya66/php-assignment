<html>
<head>
<meta charset="utf-8">
<title>Creating Fixed Header and Footer with CSS</title>

</head>



<?php
$conn=mysqli_connect("localhost","root","","php");
//$echo = ""; 
 if(isset($_POST['submit']))
 {
  
 	// Get image name
// echo "<pre>";
// print_r($_FILES);
// die('sdf');

  $image = $_FILES['image']['name'];

  	// image file directory
  	$target = "upload/".basename($image);
    //echo '$target';
	//die('sdf');
	//$uploadOk = 1;
   
   // echo $target;
   // die('ss');

   if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
	  echo "File is valid, and was successfully uploaded.\n";
	} else {
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

   $query="UPDATE customer SET name='name', mobile='$mobile', email='$email', gender='$gender', country='$country', state='$state', city='$city', address='$address',image='$target' WHERE id=1";
	
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
 ?><h2>User Registration</h2>
<img src="https://www.knowyourcustomer.com/wp-content/uploads/2018/06/Identify-logo-homepage-01-300x200.png" alt="LOGO"">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">

<form action="newform.php" method="POST" id="first_form" onSubmit="return validate();" enctype="multipart/form-data">
  <div class="container">
    
   <body>    






   <div class="fixed-header">
        <div class="container">
            <nav>
                <a href="">Register here</a>
                
            </nav>
        </div>
    </div>
    <div class="container">
     
    </div>     

   <input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>

  <div>
    <label for="name">User Name:</label>
    <input type="text" id="name" name="name" required></input>
  </div>
  <div>
    <label for="mobile">phone:</label>
    <input type="text" maxlength="10" id="mobile" name="mobile" required></input>
  </div>
 <div>
  <div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required></input>
  </div>
  <div>
  	<label>Gender</label><br>
  	 <input type="radio" name="gender" value="male" required> Male<br>
  <input type="radio" name="gender" value="female" required> Female<br>
  <input type="radio" name="gender" value="other" required> Other
 </div>
  <div>
    <label for="country" required>Country:</label>
    
  <div class="row">

<select name="country">
<option>Select</option>
<option> India</option>
</select> 
<div class="error" id="countryErr"></div>
</div>
 
</select>
  </div>
  <div>
    <label for="state" required>State:</label>
   <select name="state">  
  <option value="delhi">delhi</option>
  <option value="mp">MP</option>
  <option value=up">UP</option>

</select>
  </div>
   <div>
    <label for="city" required>City</label>
    <select name="city">   
  <option value="delhi">delhi</option>
  <option value="indore">INDORE</option>
  <option value="luckhnow">LUCKHNOW</option>

</select>
  </div>
 
  <div>
  <label><b>Address:</b></label><br> 
       <textarea name="address" rows="10" cols="30">Please enter address</textarea>
       <br>
     </div>
  
  
  <div>
    <input name="submit" type="submit" value="Submit" />
  </div>
  <div class="fixed-footer">
        <div class="container">Copyright &copy; 2010 Webdunia</div>        
    </div>
</body>
<script type="text/javascript">
  $(document).ready(function() {

  // $('#first_form').submit(function(e) {
  //   e.preventDefault();
  //   var username = $('#first_name').val();
  //   var phone = $('#phone').val();
  //   var email = $('#email').val();
  //   var gender = $('#gender').val();

  //   $(".error").remove();

  //   if (username.length < 1) {
  //     $('#username').after('<span class="error">This field is required</span>');
  //   }
    
  //   if (email.length < 1) {
  //     $('#email').after('<span class="error">This field is required</span>');
  //   } else {
  //     var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
  //     var validEmail = regEx.test(email);
  //     if (!validEmail) {
  //       $('#email').after('<span class="error">Enter a valid email</span>');
  //     }
  //   }
    
  // });

  $("#first_form").validate({
    submitHandler: function(form) {
      // do other things for a valid form
      form.submit();
    }
  });


});

</script>