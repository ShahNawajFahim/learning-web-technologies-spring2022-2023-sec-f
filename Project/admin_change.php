<!DOCTYPE html>
<html>
<head>
	<title>Admin Email and Password Change</title>
</head>
<body align="center">

<section>
        <table align="center" width="600px">
            <tr>
                <td>
                    <h2><a href="admin.php">Back to Dashboard</a></h2>
                </td>
                <td>
                    <h2><a href="logout.php">Logout</a></h2>
                </td>
                
            </tr>
        </table>

    </section>




	<h1>Change Admin Email and Password</h1>
	<form method="post" action="admin_change.php">
		<label>Old Email:</label>
		<input type="email" name="old_email"><br><br>
		<label>New Email:</label>
		<input type="email" name="new_email"><br><br>
		<label>Old Password:</label>
		<input type="password" name="old_password"><br><br>
		<label>New Password:</label>
		<input type="password" name="new_password"><br><br>
		<label>Confirm New Password:</label>
		<input type="password" name="confirm_password"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>



</body>
</html>




<?php
session_start();
if(isset($_POST['submit'])){
	
	$old_email = $_POST['old_email'];
	$new_email = $_POST['new_email'];
	$old_password = $_POST['old_password'];
	$new_password = $_POST['new_password'];
	$confirm_password = $_POST['confirm_password'];

	

		$file_contents = file('users.txt');

			

			foreach ($file_contents as $key => $line){
			$parts = explode(",", $line);
			$stored_username = trim($parts[0]);
			$stored_password = trim($parts[1]);
			$stored_usertype = trim($parts[2]);
			$stored_useremail = trim($parts[3]);


	
	if ($old_email == $stored_useremail && password_verify($old_password, $stored_password)){
		
		if($new_password == $confirm_password){
			
						$hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
						
						$file_contents[$key] = "$stored_username,$hashed_password,$stored_usertype,$new_email\n";
						file_put_contents('users.txt', implode("", $file_contents));
						echo "Admin email and password updated successfully!";
						
                    } 
					else {
						echo "New password do not match confirm password.";
					}
					break;
			
		} 

	}
		if (!isset($hashed_password)){
			echo "Incorrect email or password for admin account.";
		}


	}
?>








