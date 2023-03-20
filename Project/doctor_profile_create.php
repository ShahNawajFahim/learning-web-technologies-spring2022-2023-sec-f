<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Doctor Profile</title>
</head>
<body align="center">
    <h2>Create Doctor Profile</h2>
    <form action="create_doctor_profile.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="qualification">Qualification:</label><br>
        <input type="text" id="qualification" name="qualification" required><br><br>
        
        <label for="specialization">Specialization:</label><br>
        <input type="text" id="specialization" name="specialization" required><br><br>
        
        <label for="contact">Contact Info:</label><br>
        <textarea id="contact" name="contact" rows="5" required></textarea><br><br>
        
        <label for="profile_picture">Profile Picture:</label><br>
        <input type="file" id="profile_picture" name="profile_picture"><br><br>
        
        <input type="submit" value="Create Profile">
    </form>
    <a href="logout.php">Logout</a>
</body>
</html>
