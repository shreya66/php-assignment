<?php
function hcf($number1,$number2)
{
    while($number1!=$number2)
    {
        if($number1>$number2)
        $number1=$number1-$number2;
        else
        $number2=$number2-$number1;
    }
    return $number1;
}
$number1=70; $number2=36;
echo hcf($number1,$number2),"\n";
?>