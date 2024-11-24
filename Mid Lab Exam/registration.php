<html>
<head>
    <title>Signup Page</title>
</head>
<body>
        <form method="post" action="registration_check.php" enctype="">
            Username: <input type="text" required name="username" value="" /><br>
            Email: <input type="email" required name = "email" value=""/><br>
            Date of birth: <input type="date" required name = "dob" value=""/><br>
            Gender:  <input type="radio" required name="gender" value="">Male
                    <input type="radio" required name="gender" value="">Female
                    <input type="radio" required name="gender" value="">Other<br>
            Password: <input type="password" name="password" value="" /> <br>
            Confirm Password: <input type="password" name="confirm_password" value="" /><br>
            <input type="submit" name="submit" value="Submit" />
        </form>
</body>
</html>