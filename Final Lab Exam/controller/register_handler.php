<?php
require_once('../model/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (!empty($username) && !empty($password)) {
        $check_sql = "SELECT * FROM admins WHERE username = '$username'";
        $check_result = mysqli_query($conn, $check_sql);

        if (mysqli_num_rows($check_result) > 0) {
            echo "Username already exists. Please try a different username.";
        } else {
            $sql = "INSERT INTO admins (username, password) VALUES ('$username', '$password')";
            if (mysqli_query($conn, $sql)) {
                echo "Registration successful! <a href='../view/admin_login.php'>Login here</a>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    } else {
        echo "All fields are required!";
    }
}
?>
