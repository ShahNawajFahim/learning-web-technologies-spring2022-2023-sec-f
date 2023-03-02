<?php


function search($number)
{
    $numbers= [10,22,3,5,565,45];
    foreach($numbers as $s){
        if ($number==$s){
            $found= true;
            break;
        }

        $found= false;
    }

    if ($found==true){
        echo "Found on the list ";

    }
    else {
        echo "Not Found on the list ";
    }

}
echo "Please enter your number to search on the array list: ";
$a= readline();

search($a);
    ?>