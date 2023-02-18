<html>

<head> 
<title>blood-group</title>
</head>

<body>

    <form method="POST" action="">
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend>BLOOD GROUP</legend>
                        <table>

                            <tr>
                                <td>
                                    <select name="blood">
                                        <option value="A+">A+</option>
                                        <option value="B+">B+</option>
                                        <option value="A-">A-</option>
                                        <option value="B-">B-</option>
                                        <option value="O-">O-</option>

                                        <option value="O+">O+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="AB+">AB+</option>


                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <hr width="200px">
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
 if (isset($_POST["blood"])) {
 	
 
 if($_POST["blood"] != null) 
 	{ 
 		echo "Your blood group is: ".$_POST["blood"]; 
 	}
 }
 ?>
</body>

</html>