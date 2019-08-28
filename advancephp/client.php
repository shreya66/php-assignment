<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "php");

// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
<!-- Table to Display Client Data -->
<table id="clienttabledata" class="table table-striped table-hover table-bordered">
				
                <tr class="bg-dark text-white text-center">
        
                    <th> Id </th>
                    <th> Name </th>
                    <th> Phone </th>
                    <th> Email </th>
                    <th> Gender </th>
                   
                    <th> Edit Client Details</th>
                    <th> Delete Client Details </th>
                   
        
                </tr>
        
                <?php
        
                    //SQL Query for fetching the data
                    $q = "select id, name, mobile, email, gender FROM customer WHERE status = 1";
                    $query = mysqli_query($link,$q);
        
                    while($res = mysqli_fetch_array($query)) {
        
                ?>
        
                <tr class="text-center">
        
                    <td> <?php echo $res['id']; ?></td>
                    <td> <?php echo $res['name']; ?></td>
                    <td> <?php echo $res['mobile']; ?></td>
                    <td> <?php echo $res['email']; ?></td>
                    <td> <?php echo $res['gender']; ?></td>
                   
                    <td> <button class="btn-danger btn"> <a href="form2.php?id=<?php echo $res['id']; ?>" class="text-white"> Edit </a>  </button> </td>
                    <td> <button class="btn-danger btn"> <a href="deleteclient.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
                   
        
                </tr>
        
                <!-- Fetches the total number of clients in table -->
                <?php
                    }
        
                    $numberOfRows = mysqli_num_rows($query);
                    echo "<h4 style='text-align: center;'>Total Number Of Clients = ".$numberOfRows."</h4>";
                            
                ?>
                        
            </table>  