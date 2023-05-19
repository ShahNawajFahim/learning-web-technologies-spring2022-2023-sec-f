<?php
if (isset($_REQUEST['submit']))
{
    require_once "../models/profile_model.php";
    session_start();
    $fullname= $_REQUEST['fullname'];
    $gender= $_REQUEST['gender'];
    $age= $_REQUEST['age'];
    $mobile= $_REQUEST['mobile'];
    $user_id = $_REQUEST['user_id'];
    $profile_pic = $_FILES['profile_picture'];
    print_r ($profile_pic);
    print_r($_FILES);
    $picture_name = time();
                move_uploaded_file($_FILES["profile_picture"]["tmp_name"], "../pictures/".$picture_name);

    $profile = ['fullname'=> $fullname , 'gender' =>$gender, 'age'=> $age ,'mobile' =>$mobile, 'picture'=> $picture_name, 'user_id'=> $user_id ];
    $result = createProfile($profile);

    
    if($result)
    {
        echo $_SESSION['usertype'];
       
       if($_SESSION['usertype']== 'patient')
       {
        header('location:../views/patient.php');
       }
       if($_SESSION['usertype']== 'doctor')
       {
        header('location:../views/doctor.php');
       }
    }
}