<?php
if(isset($_POST['submit'])){
$con=mysqli_connect("localhost", "root", "", "php");
if (mysqli_connect_errno($con))
{
echo "MySql Error: " . mysqli_connect_error();
}
//echo "SELECT * FROM admin WHERE username='$_POST[username]' && password='$_POST[password]'";

$query=mysqli_query($con,"SELECT * FROM admin WHERE user_name='$_POST[username]' && password='$_POST[password]'");


$count=mysqli_num_rows($query);
$row=mysqli_fetch_array($query);

if ($count==1)
{
session_start();
$_SESSION['user_name'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
header("location: panel.php");
}
else
{
echo "Invalid username or password";
} 

mysqli_close($con);
}

?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
	
		<table border="0" cellpadding="10" cellspacing="1" width="500" align="center" class="tblLogin">
			<tr class="tableheader">
			<td align="center" colspan="2">Enter Login Details</td>
			</tr>
			<tr class="tablerow">
			<td>
			<input type="text" name="username" placeholder="User Name" class="login-input"></td>
			</tr>
			<tr class="tablerow">
			<td>
			<input type="password" name="password" placeholder="Password" class="login-input"></td>
			</tr>
			<tr class="tableheader">
			<td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
			
			</tr>
		</table>
</form>
</body></html>