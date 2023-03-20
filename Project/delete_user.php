<?php


$name = $_GET['name'];
$users = file('users.txt');


foreach ($users as $key => $user) {
  $user = rtrim($user);
  $user_parts = explode(',', $user);
  if ($user_parts[0] == $name) {
    unset($users[$key]);
    break;
  }
}

file_put_contents('users.txt', implode("\n", $users));


header('Location:admin.php');

?>