<?php


function star (){
    for($i=1; $i<4 ;$i++){
        for ($j=1; $j<=$i ;$j++){
            echo "*";
        }
        echo "\r\n";
    }
    
}
print(star());

function digit(){
    for($i=1; $i<4 ;$i++){
        $s=1;
        for ($j=4; $j>$i ;$j--){
            echo $s.' ';
            $s=$s+1;
        }
        echo "\r\n";
    }
    
}
print(digit());


function letters (){
    $s='A';
    for($i=1; $i<4 ;$i++){
        for ($j=1; $j<=$i ;$j++){
            echo $s.' ';
            $s++;
        }
        echo "\r\n";
    }
    
}
print(letters());


?>