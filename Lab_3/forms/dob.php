<html>

<head> 
<title>DOB</title>
</head>

<body>

    <form method="POST" action="">
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <table>

                            <tr>
                                <td width="250px">
                                    <input type="Date" name="dateof" value="" />
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



    <?php
if (isset($_POST["dateof"])) {
 	
 
 if($_POST["dateof"] != null) 
 	{ 
 		echo "Your birthday is: ".$_POST["dateof"]; 
 	}
 }
?>
</body>

</html>