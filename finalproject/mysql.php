<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "php");

// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
<table id="custtabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">

     <th> Id </th>
     <th> Name </th>
     <th> Phone </th>
     <th> Email </th>
     <th> Gender </th>
     <th> Activate Customer</th>
     <th> Delete </th>

  </tr >

  <?php

      //SQL Query for fetching the data
     $q = "select id, name, mobile, email, gender from customer WHERE status = 0";

      $query = mysqli_query($link,$q);

      while($res = mysqli_fetch_array($query)){
 ?>

 <tr class="text-center">

     <td> <?php echo $res['id'];  ?> </td>
     <td> <?php echo $res['name'];  ?> </td>
     <td> <?php echo $res['mobile'];  ?> </td>
     <td> <?php echo $res['email'];  ?> </td>
     <td> <?php echo $res['gender'];  ?> </td>
     <td> <button class="btn-danger btn"><a href="active.php?id=<?php echo $res['id']; ?>" class="text-white"> Activate </a></button></td>
     <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>

  </tr>

  <!-- Fetches the total number of customers in table -->
  <?php 
     }

     $numberOfRows = mysqli_num_rows($query);
    echo "<h4 style='text-align: center;'>Total Number Of Customers = ".$numberOfRows."</h4>";
            
  ?>

</table>
