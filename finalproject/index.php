<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple HTML Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="validator.js"></script>
</head>
<body>

      
<form name="contactForm" onsubmit="return validateForm()" action="connection.php" method="post">
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