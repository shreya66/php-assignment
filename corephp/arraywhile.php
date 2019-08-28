<?php



    /*Multi-Dimensional array for details of users*/

    $users = array(

                array(1 , 'Shreya' , 'shreya.desai@webdunia.net', 'Female', 'Indian'),

                array(2 , 'Radhika' , 'radhika@gmail.com', 'Female','Indian'),

                array(3 , 'Devesh' , 'raam@gmail.com', 'male', 'Indian'),

                

            );





   



    echo '<table border="1">';

    echo '<tr><th>S.No</th><th>Name</th><th>Email</th><th>Gender</th><th>Nationality</th></tr>';



    $res = 0;





    while($res<3) {



        echo '<tr>';

        $col = 0; 



        while($col<5) {

            echo '<td>'.$users[$res][$col].'</td>';

            $col++;

        }



        $res++;

        echo '</tr>';

    }



?>