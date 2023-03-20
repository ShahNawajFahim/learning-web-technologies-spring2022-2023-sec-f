
<!DOCTYPE html>
<html>

<head>
	<title>Sign Up</title>
</head>

<body align="center">
	<h1>Sign Up</h1>
	<form action="signup.php" method="POST">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username"><br><br>

		<label for="username">Email:</label>
		<input type="email" id="email" name="email"><br><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>
        <p><small>'Your password must be at least 8 characters including<br> a lowercase letter, an uppercase letter, and a number<br>
        and one special character, but does not allow a comma(,)
    </small></p>
		<label for="usertype">User Type:</label>
		<select id="usertype" name="usertype">
			<!-- <option value="admin">Admin</option> -->
			<option value="doctor">Doctor</option>
			<option value="patient">Patient</option>
		</select><br><br>

		<input type="submit" name="submit" value="Sign Up">
	</form>

</body>
<p>Already have an account! <a href="login.php">Log In</a></p>










<?php
session_start();
if(isset($_REQUEST['submit'])){
    
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
    if(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#\$%\^&\*])(?!.*,)[a-zA-Z0-9!@#\$%\^&\*]{8,}$/',$password)){
        echo "Password is not valid.";
    } else{
        

    $users_file=fopen("users.txt", "r");
    while(!feof($users_file))
    {
    $line=fgets($users_file);
    $line_broken=explode(',' , $line);
    
    if(trim($line_broken[0])==trim($username) || trim($line_broken[3])==trim($email))
    {
        // header('location:signup.php?msg=error');
        echo'There is already an user using this name or email!';
          exit();
    }
   }
 fclose($users_file);
   

 $hashed_password = password_hash($password, PASSWORD_DEFAULT);

 $users_file = fopen("users.txt", "a");
 fwrite($users_file,"$username,$hashed_password,$usertype,$email \n");
 fclose($users_file);


 echo "User created successfully";
 header('location: login.php');
 }
}
}

?>




</html>