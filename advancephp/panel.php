<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Panel</title>
</head>

<style>
.menu {
  width: 200px;
}
.vr {
    width:2px;
    background-color:#000;
    position:absolute;
    top:0;
    bottom:0;
    left:200px;
}
.middle{
    top:50%;
    bottom:0;
    left:200px;
    padding:30px 500px;
}
</style>
<body>
    <h1>Admin Panel</h1><hr>

<div class="menu">
    <h3><a href="mysql.php" style="text-decoration: none;color:black">Customer</a></h3>
    <h3><a href="client.php" style="text-decoration: none;color:black">Client</a></h3>
    <div class="vr">&nbsp;</div>
   
</div>

 <!-- <div class="middle"> 
        <table>
                <tr>
                  <td colspan=2 >
                    <br/>
                  </td>
                </tr>
                <tr>
                  
                  <td>
                    Total Client
                  </td>
                </tr>
              </table>
 </div> -->
</body>
</html>