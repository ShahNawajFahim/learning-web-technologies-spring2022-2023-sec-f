<?php
if(isset($_COOKIE['pat-log-flag']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient page</title>
</head>
<body>

<section>
        <table align="center" width="600px">
            <tr>
                <td>
                    <h2><a href="blog.php">Blogs</a></h2>
                </td>
                <td>
                    <h2><a href="patient_profile_create.php">Create a profile</a></h2>
                </td>
                <td>
                    <h2><a href="logout.php">Logout</a></h2>
                </td>
                
            </tr>
        </table>

    </section>

</body>
</html>
<?php
}
else {
    echo "invalid request";
}
?>