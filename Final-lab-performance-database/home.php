<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="check.php">
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend>ADD PRODUCT</legend>
                        <table>
                                Name <br>
                                <input type="text" name="name" id="">
                                <br>
                                Buying Price <br>
                                <input type="number" name="buyingprice" id=""> <br>
                                selling Price  <br>
                                <input type="number" name="sellingprice" id="">
                                <br>
                                
                                </form>

                             <hr/>
                            <tr>
                                <td>
                                    <input type="checkbox" name="option[]" value="" /> Display
                                    <hr width="200px"/>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                <input type="submit" name="submit" value="save" /> 
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </td>
            </tr>
        </table>


    </form>
</body>
</html>