
<?php
session_start();
if(isset($_REQUEST['submit'])){
    include_once "../models/user_model.php";
    
    if(isset($_REQUEST['msg']) == "error"){
        echo "<h1>There is already an user using this name or email!</h1>";
    }


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$usertype = $_POST['usertype'];




if ($username=='' || $email == '' || $password=="" || $usertype =='')
{
    echo "Input fields cant be empty ";
}
else 
{
    if($password== '0' ){
        echo "Password is not valid.";
    } else{
        
$client =['username'=> $username , 'email'=>$email , 'password'=> $password , 'type'=> $usertype];
$result = addUser($client);
if ($result)
{
    echo " User Added";
	 header('location:../views/login.php');

}
else 
{
    echo "failed !";
}

 }
}
}

?>
