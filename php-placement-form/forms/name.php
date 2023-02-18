<html>

<head> 
    <title>name</title>
</head>

<body>

    <form method="POST" action="">
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend>NAME</legend>
                        <table>

                            <tr>
                                <td width="250px">
                                    <input type="text" name="name" value="" />
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

<hr/>
    <?php
    if (isset($_POST["name"])) {
        
    
    if($_POST["name"] != null) 
        { 
            echo "Your name is: ".$_POST["name"]; 
        }
    }
    ?>
</body>

</html>