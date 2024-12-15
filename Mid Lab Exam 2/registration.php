<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reistration</title>
</head>
<body>
<form action="registration_check.php" method="post">
<fieldset>
<legend>REGISTRATION</legend>
<label for="id">Id:</label><br>
<input type="text" id="id" name="id"><br><br>
<label for="password">Password:</label><br>
<input type="password" id="password" name="password"><br><br>
<label for="confirmPassword">Confirm Password: </label><br>
<input type="Password" name="confirmPassword" id="confirmPassword"><br><br>
<label>Name:</label><br>
<input type="text" id="name" name="name"><br><br>
<label for="userType">User Type</label><br><hr>
<input type="radio" id="User" name="userType">
<label for="user">User</label>
<input type="radio" id="Admin" name="userType">
<label for="admin">Admin</label><br><br><hr>
<input type="submit" value="Sign Up" name="submit">
<a href="login.html">Sign In</a>
</fieldset>
</form>
</body>
</html>



