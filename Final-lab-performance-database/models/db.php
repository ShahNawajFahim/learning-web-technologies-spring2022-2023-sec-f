<?php
$localhost = "127.0.0.1";
$dbuser = 'root';
$dbpassword = '';
$dbname = 'product_db';

function get_connection ()

{   
    global $localhost;
    global $dbuser;
    global $dbpassword;
    global $dbname;
    return mysqli_connect($localhost,$dbuser,$dbpassword,$dbname);
}


?>