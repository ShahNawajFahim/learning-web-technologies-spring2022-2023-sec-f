<?php
if(isset($_REQUEST['submit']))
{
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];
    session_start();
    include_once "../models/blogs_model.php";
    
    $post = ['title' => $title , 'content'=> $content , 'doctor'=>$_SESSION['id']];
    $result = addPost($post);
    if ($result)
    {
        header ('location:../views/blog.php');
    }

    else 
    {
        echo " Not posted !!";
    }


}
?>