<?php $employee = array("Employee1"=>60000,"Employee2"=>10000,"Employee3"=>30000,"Employee4"=>20000,"Employee5"=>50000,"Employee6"=>10000,"Employee7"=>31000,"Employee8"=>25000);


foreach ($employee as $key=>$val) {
if ($val >=30000) {
echo $val ."<br>";
}
}
?>