<?php
session_start();
include_once "../models/user_model.php";

if (isset($_REQUEST['submit']))
{
    $id = $_REQUEST['id'];
    $user = ['id'=> $id];
    $result = deleteuser($user);
    if ($result)
    {
        //  header("location:admin.php");
    }
    else 
    {
        echo "failed";
    }
    header('Location: ../views/admin.php'); // Move the header here to redirect after processing form data
    exit; // Add exit to terminate script execution
}
?>
