<?php

session_start();

if (!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'admin') {
	
	header("Location: login.php");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
</head>
<body align="center">
	<h1>Welcome Admin</h1>
	<p>This is the admin dashboard.</p>

<section align="right">

<h3><a href="admin_change.php">Change your Password</a><h3>

	<p><a href="logout.php">Logout</a></p>
</section>
</body>
</html>










<?php

$delimiter = ',';


$users = file('users.txt');

echo'<h3>All users :</h3>';
function display_users($users, $delimiter) {
    echo '<table width="600px" align="center">';
    echo '<tr><td>Name</td><td>Email</td><td>Role</td><td>Action</td></tr>';
    foreach($users as $user) {
        $user_data = explode($delimiter, $user);
        $name = isset($user_data[0]);
        $role = isset($user_data[2]);
		$email = isset($user_data[3]);

        if($role == 'admin') {
            continue;
        }

        // echo '<tr>';
        // echo '<td>' . $name . '</td>';
        // echo '<td>' . $email . '</td>';
        // echo '<td>' . $role . '</td>';
        // echo '<td><a href="edit_user.php?name=' . $name . '">Edit</a> | <a href="delete_user.php?name=' . $name . '">Delete</a></td>';
        // echo '</tr>';
    }
    echo '</table>';
}

display_users($users, $delimiter);
?>