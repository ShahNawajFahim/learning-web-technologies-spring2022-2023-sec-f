<?php
if(isset($_REQUEST['submit']))
{
    $name = $_REQUEST['name'];
    $buyingprice = $_REQUEST['buyingprice'];
    $sellingprice = $_REQUEST['sellingprice'];

    include "models/crud.php";

    if ($name == '' || $buyingprice =='' || $sellingprice == '')
    {
        echo "cant be empty !" ;
    }
    else
     {
        $product = ['name'=>$name ,'buyingprice'=>$buyingprice , 'sellingprice'=> $sellingprice];
        $get = add($product);
        if ($get ==true )
        {
           echo "successful !!";

        }
        else 
        {
                echo "unsucessfull !!";
        }

    }
}


?>