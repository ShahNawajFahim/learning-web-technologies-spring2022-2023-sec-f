
<?php
session_start();
if(isset($_REQUEST['submit'])){
	include_once "../models/user_model.php";
	
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
if ($email== '' || $password == '')
{
echo " cant be empty";
}

else
	 {
	

		$logger =['email'=> $email , 'password'=> $password];
		$result = login($logger);
		$get = type($logger);
		$user = mysqli_fetch_assoc($get);
		$stored_usertype = $user['type'];


		if($result)

		{
			if ($stored_usertype == 'admin') {
				$_SESSION['usertype']= 'admin';
				$_SESSION['id']= $user['id'];
				header("Location: ../views/admin.php");
				exit();
			}
			if ($stored_usertype == 'doctor') {
				$_SESSION['usertype']= 'doctor';
				$_SESSION['id']= $user['id'];
				setcookie('doc-log-flag',true,time()+500,'/');
				header("Location: ../views/doctor.php");
				exit();
			}
			if ($stored_usertype == 'patient') {

				$_SESSION['usertype']= 'patient';
				$_SESSION['id']= $user['id'];
				setcookie('pat-log-flag',true,time()+500,'/');
				header("Location: ../views/patient.php");
				exit();
			}

		}
	}
}
1
?>