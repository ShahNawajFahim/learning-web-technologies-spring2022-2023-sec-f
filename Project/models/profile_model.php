<?php
require_once "db.php";

function createProfile($profile)
{
    $con = getconnection ();
    $sql = "insert into profile values ('' ,'{$profile['fullname']}', '{$profile['gender']}','{$profile['age']}', '{$profile['mobile']}','{$profile['picture']}',
    '{$profile['user_id']}')";
    $result = mysqli_query($con , $sql );
    return $result ;
}

function getProfileData ($user_id)
{
    $con = getconnection ();
    $sql = "select * from profile where user_id = $user_id ";
    $result = mysqli_query($con , $sql );
    return $result ;
}