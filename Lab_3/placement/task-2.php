<?php

function vat ( $amount ){
    $cal_vat = ($amount* 15 )/100;
    return $cal_vat;
}
print(vat(200));
?>