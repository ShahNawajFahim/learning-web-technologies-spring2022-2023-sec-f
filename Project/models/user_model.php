<?php
include_once "db.php";

function addUser($user)
{
    $con = getconnection();
    $sql = "insert into user values ('' , '{$user['username']}' ,'{$user['email']}' , '{$user['password']}' , '{$user['type']}' )";
    $rslt = mysqli_query($con, $sql);
    return $rslt;
}

function login($logger)
{
    $con = getconnection();
    $sql = "select * from user where email = '{$logger['email']}' and password = '{$logger['password']}'";
    $rslt = mysqli_query($con , $sql);
    $row = mysqli_num_rows($rslt);
    if($row ==1)
    {
        return true;
    }
    return false ;
    

}
function type($logger)
{
    $con = getconnection();
    $sql = "select * from user where email = '{$logger['email']}' and password = '{$logger['password']}'";
    $rslt = mysqli_query($con , $sql);
    //$type = mysqli_assoc_result($rslt);
    return $rslt;
}



//user control for admin

function showusers ()
{
    $con = getconnection();
    $sql = "select * from user where type != 'admin' ";
    $rslt = mysqli_query($con, $sql);
    return $rslt;
}

function deleteuser($users)
{
    $con = getconnection();
    $sql = "DELETE FROM user where id = '{$users['id']}' ";
    $rslt = mysqli_query($con, $sql);
    return $rslt;
   
    
}
function doctor_name($id)
{
    $con =getconnection();
    $sql = "select * from user where id = {$id}";
    $rslt = mysqli_query($con, $sql);
    $name = mysqli_fetch_assoc($rslt);
    return $name['username'];
}
function show_data_byId($id)
{
    $con =getconnection();
    $sql = "select * from user where id = {$id}";
    $rslt = mysqli_query($con, $sql);
    return $rslt;
}
function updateData ($data, $id)
{
    $con =getconnection();
    $sql = "Update user set email = '{$data['email']}' , password = '{$data['password']}' where id = $id ";
    $rslt = mysqli_query($con, $sql);
    return $rslt;
}



?>