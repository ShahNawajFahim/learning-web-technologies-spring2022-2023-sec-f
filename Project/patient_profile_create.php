<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Patient Profile</title>
</head>
<body align="center">
    <h2>Create Patient Profile</h2>
    <form action="create_patient_profile.php" method="post" >
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" min="1" max="120" required><br><br>
        
        <label for="gender">Gender:</label><br>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br><br>
        
        <label for="marital_status">Marital Status:</label><br>
        <select id="marital_status" name="marital_status" required>
            <option value="single">Single</option>
            <option value="married">Married</option>
            <option value="divorced">Divorced</option>
            <option value="widowed">Widowed</option>
        </select><br><br>
        
        <label for="blood_group">Blood Group:</label><br>
        <input type="text" id="blood_group" name="blood_group" required><br><br>
        
        <label for="DOB">Date of Birth:</label><br>
        <input type="date" id="DOB" name="DOB" required><br><br>
        
        <label for="medical_history">Medical History:</label><br>
        <textarea id="medical_history" name="medical_history" rows="5" required></textarea><br><br>
        
        <label for="profile_picture">Profile Picture:</label><br>
        <input type="file" id="profile_picture" name="profile_picture"><br><br>
        
        <input type="submit" name="submit" value="Create Profile">
    </form>
</body>
</html>
