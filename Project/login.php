<!DOCTYPE html>
<html>

<head>
	<title>User Login</title>
</head>

<body align="center">
	<h1>User Login</h1>
	<form action="login.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username"><br><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>

		<!-- <input type="submit" value="Log in"> -->
		<input type="submit" name="submit" value="Log in" id="">
	</form>
</body>
<p>Don't have an account! <a href="signup.php">Sign Up</a></p>

</html>





<?php
if(isset($_REQUEST['submit'])){
	echo " user type";
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
if ($username=="" || $password == '')
{
echo " cant be empty";
}
else {
	

$users_file = fopen("users.txt", "r");


while (!feof($users_file)) {
	$line = fgets($users_file);
	if (!empty($line)) {
		
		$parts = explode(",", $line);
		$stored_username = trim($parts[0]);
		$stored_password = trim($parts[1]);
		$stored_usertype = trim($parts[2]);

		
		if ($username == $stored_username && password_verify($password, $stored_password)) {
			
			session_start();
			$_SESSION['usertype'] = $stored_usertype;


			
			
			if ($stored_usertype == 'admin') {
				header("Location: admin.php");
				exit();
			}
			if ($stored_usertype == 'doctor') {
				setcookie('doc-log-flag',true,time()+500,'/');
				header("Location: doctor.php");
				exit();
			}
			if ($stored_usertype == 'patient') {
				
				setcookie('pat-log-flag',true,time()+500,'/');
				header("Location: patient.php");
				exit();
			}

			echo "Unknown user type";
			exit();
		}
	}
}


fclose($users_file);

echo "Invalid username or password.";




}
}

?>

