<html>

<head> 
<title>degree</title>
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
                                <td width="270px">
                                    <input type="checkbox" name="option[]" value="SSC" /> SSC
                                    <input type="checkbox" name="option[]" value="HSC" /> HSC
                                    <input type="checkbox" name="option[]" value="Bsc" /> BSc
                                    <input type="checkbox" name="option[]" value="Msc" /> MSc
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
 if (isset($_POST['option'])) {
 	
 
 
 		$Value = join(", ", $_POST['option']);
        echo "Your Degrees are   ".$Value;

 	}

 ?>
</body>

</html>