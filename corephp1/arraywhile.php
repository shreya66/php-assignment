<?php
  $user = array(

                array(1 , 'Shreya' , 'shreya.desai@webdunia.net', 'Female', 'Indian'),

                array(2 , 'Radhika' , 'radhika@gmail.com', 'Female','Indian'),

                array(3 , 'Devesh' , 'raam@gmail.com', 'male', 'Indian'),
              );
             echo '<table border="2">';
             echo '<tr><th>S.No</th><th>Name</th><th>Email</th><th>Gender</th><th>Nationality</th></tr>';
            $res = 0;
    while($res<3) {
            echo '<tr>';
            $col = 0; 
    while($col<5) {
            echo '<td>'.$user[$res][$col].'</td>';
            $col++;
     }
         $res++;
          echo '</tr>';

    }
?>