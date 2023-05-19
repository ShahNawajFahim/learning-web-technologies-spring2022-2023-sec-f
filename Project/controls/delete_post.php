<?php
session_start();
include_once "../models/blogs_model.php";

if (isset($_REQUEST['submit']))
{
    $blog_id = $_REQUEST['blog_id'];
    
    $result = deletepost($blog_id);
    if ($result)
    {
        header('Location: ../views/blog.php'); 
    }
    else 
    {
        echo "failed";
    }
    header('Location: ../views/blog.php'); 
    exit; 
}
?>
