<html>

<head> 
<title>gender</title>
</head>

<body>
    <form method="POST" action="">
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend>Gender</legend>
                        <table>

                            <tr>
                                <td width="250px">
                                    <input type="radio" name="gender" value="male" /> Male
                                    <input type="radio" name="gender" value="female" /> Female
                                    <input type="radio" name="gender" value="other" /> Other
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
        </table>
    </form>



<hr>

    <?php
 if (isset($_POST["gender"])) {
 	
 
 if($_POST["gender"] != null) 
 	{ 
 		echo "Your gender is: ".$_POST["gender"]; 
 	}
 
 }

 ?>
</body>

</html>