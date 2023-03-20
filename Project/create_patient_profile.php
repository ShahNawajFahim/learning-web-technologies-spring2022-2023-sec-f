<?php
if(isset($_REQUEST['submit']))
{
    $username= $_REQUEST['name'];
    $email= $_REQUEST['email'];
    $age= $_REQUEST['age'];
    $gender= $_REQUEST['gender'];
    $marital_status= $_REQUEST['marital_status'];
    $blood_group= $_REQUEST['blood_group'];
    $DOB= $_REQUEST['DOB'];
    $medical_history= $_REQUEST['medical_history'];
    $profile_picture= $_REQUEST['profile_picture'];

    echo $username.$email.$age.$gender.$marital_status.$blood_group.$DOB.$medical_history.$profile_picture;
}
else{
    echo "Invalid User Request";
}
?>