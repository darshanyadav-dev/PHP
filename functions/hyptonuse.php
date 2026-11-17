<?php
//finding hyptonuse of a right triangle

function hyptonuse(float $s1side,float $s2side){
    $lside=0;
    $lside=sqrt(pow($s1side, 2)+ pow($s2side, 2));
    echo $lside;
}
hyptonuse(100, 400);

?>