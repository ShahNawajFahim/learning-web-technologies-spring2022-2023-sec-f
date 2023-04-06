<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body aign="center">
<form method="POST" action="" enctype="" > 
    <fieldset style="width:100px">
     <legend> 
        Display 
     </legend>
      <table border='1'> 
        <tr> 
            <td> 
                Name 
            </td> 
            <td>
                 Profit 
                </td> 
            </tr> 
            <tr rowspan="4">
                 <td> product nae </td>
                  <td>  </td>
                   <td> <a href="edit">edit</a> </td>
                    <td> <a href="delete">delete</a> </td>
                 </tr>
                 </table> 
                </fieldset>
             </form>
</body>
</html>



<?php
session_start();

include "models/crud.php";
    $product_id=$_SESSION['product_id'];
    $product=display($product_id);
    $name = $product['name'];
    $buyingprice = $product['buyingprice'];
    $sellingprice = $product['sellingprice'];
    $profit=$sellingprice-$buyingprice;

   

?>