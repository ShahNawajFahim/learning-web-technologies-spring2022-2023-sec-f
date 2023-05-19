<!DOCTYPE html>
<html>

<head>
	<title>User Login</title>

	<style>
    body {
        background-color: #b6cfd1;
        padding-top: 30px;
        padding-right:10px;
      }
      input[type="email"] {
        padding:3px;
        border-radius:3px;
		margin-left:23px;
      }
      input[type="password"]{
        padding:3px;
        border-radius:3px;
      }
	  input[type="submit"] {
        background-color: green;
        padding:5px;
        border-radius:3px;
        color:white;
      }
	  input[type="submit"]:hover{
        background-color: black;
      }

    </style>


</head>

<body align="center">
	<h1>User Login</h1>
	<form action="../controls/logincheck.php" method="post" onsubmit = "return checkBlank()" >
		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>

		<!-- <input type="submit" value="Log in"> -->
		<input type="submit" name="submit" value="Log in" id="">
	</form>
</body>
<p>Don't have an account! <a href="signup.php">Sign Up</a></p>

<script>
  function checkBlank(){
   let email = document.getElementById('email').value;
   let password = document.getElementById('password').value;
   if (email == '' || password ==''  )
    {
        alert('Fill up this fields !');
        return false ;
    }
    return true ; 
  }

</script>
</html>






