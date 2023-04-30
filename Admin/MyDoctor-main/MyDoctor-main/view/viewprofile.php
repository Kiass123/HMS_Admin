<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Profile</title>
</head>
<body>
    <h1>View Profile</h1>
    <form>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" readonly><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" readonly><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" readonly><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" readonly><br>

        <label for="dob">Date of Birth:</label>
        <input type="text" id="dob" name="dob" readonly><br>

        <input type="button" value="Edit" onclick="location.href='edit_profile.html'">
    </form>
</body>
</html>
