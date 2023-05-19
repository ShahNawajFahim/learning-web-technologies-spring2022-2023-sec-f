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

    <style>
    body {
        background-color: #b6cfd1;
        padding-top: 30px;
        padding-right:10px;
      }
      a{
        background-color: green;
        padding:5px;
        border-radius:3px;
        color:white;
        text-decoration:none;
      }
      a:hover{
        background-color: black;
      }
      .dbutton{
        float: right;
        padding-top: 50px;
      }
      </style>
</head>
<body>

<section>
    <?php
    require_once "../models/profile_model.php";
    session_start();
    $patient_id = $_SESSION['id'];
    $profile_data = getProfileData($patient_id);
    $patient_profile = mysqli_fetch_assoc ($profile_data);
    $patient_picture = $patient_profile['picture'];
     


    ?>
    <img style ="width: 50 px; height: 50px "src="../pictures/<?php echo $patient_picture ; ?>" alt="">
        <table align="center" width="600px">
            <tr>
                <td>
                    <h2><a href="blog.php">Blogs</a></h2>
                </td>
                <td>
                    <h2><a href="profile_creation.php">Create a profile</a></h2>
                </td>
                
                <td>
                    <h2><a href="../controls/logout.php">Logout</a></h2>
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