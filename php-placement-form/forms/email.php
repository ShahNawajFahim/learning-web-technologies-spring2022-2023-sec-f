<html>

<head>
<title>email</title>
</head>

<body>

    <form method="POST" action="">
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend>EMAIL</legend>
                        <table>

                            <tr>
                                <td width="250px">
                                    <input type="email" name="email" value="" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <hr>
                                    <input type="submit" name="" value="Submit">

                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </td>
            </tr>


    </form>

    <hr>
 <?php
 if (isset($_POST["email"])) {
 	
 
 if($_POST["email"] != null) 
 	{ 
 		echo "Your email is: ".$_POST["email"]; 
 	}
 }
 ?>

</body>

</html>