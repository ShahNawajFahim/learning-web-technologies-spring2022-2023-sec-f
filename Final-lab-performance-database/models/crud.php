<?php
require_once "db.php";
//include "db.php";
function add($product)

{
    $con = get_connection();
    $sql = "insert into products values ('','{$product['name']}' ,'{$product['buyingprice']}' , '{$product['sellingprice']}' )";
    $get = mysqli_query($con , $sql);
    return $get;
}

function display ($product)
{
    $con = get_connection();
    $sql = "select * from products"; 
    $get = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($gets);
    return $rows;

}




?>
