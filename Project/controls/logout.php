<?php
// Start the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();
setcookie('doc-log-flag',true,time()-1,'/');
setcookie('pat-log-flag',true,time()-1,'/');

// Redirect to the login page
header("Location: ../views/home.php");
exit();
?>
