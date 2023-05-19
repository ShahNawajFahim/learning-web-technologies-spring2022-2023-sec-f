<?php
include_once "db.php";

function addPost($blog)
{
    $con = getconnection();
    $sql = "insert into blogs values ('', '{$blog['title']}' ,'{$blog['content']}' , '{$blog['doctor']}')";
    $rslt = mysqli_query($con, $sql);
    return $rslt;

}

function show ($doctor_id)
{
    $con = getconnection();
    $sql = "select * from blogs where doctor = {$doctor_id}";
    $rslt = mysqli_query($con, $sql);
    return $rslt;
}

function deletePost($blog_id)
{
    $con = getconnection();
    $sql= "delete from blogs where id = $blog_id";
    $rslt = mysqli_query($con, $sql);
    return $rslt;
}
function show_all_blogs()
{
    $con = getconnection();
    $sql= "select * from blogs";
    $rslt = mysqli_query($con, $sql);
    return $rslt;
}

?>