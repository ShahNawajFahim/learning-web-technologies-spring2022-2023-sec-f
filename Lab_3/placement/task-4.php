<?php

function largest ( $number1,$number2,$number3 ){
    if ($number1 >$number2){
        if($number1>$number3){
            echo "${number1} is the largest number";
        }
    }
        else if ($number2>$number3){
            echo "${number2} is the largest number";
        }
        else {
            echo "${number3} is the largest number";
        }
    }

$a= readline(); 
$b= readline(); 
$c= readline(); 
print(largest($a,$b,$c));

?>