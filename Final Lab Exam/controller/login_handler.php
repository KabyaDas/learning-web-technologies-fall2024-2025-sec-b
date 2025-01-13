<?php
require_once('../model/db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $sql = "SELECT * FROM admins WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $admin = mysqli_fetch_assoc($result);

            if (password_verify($password, $admin['password'])) {
                $_SESSION['admin'] = $admin['username']; 
                header("Location: ../view/dashboard.php"); 
                exit();
            } else {
                echo "Incorrect password. <a href='../view/admin_login.php'>Try again</a>";
            }
        } else {
            echo "Admin not found. <a href='../view/admin_register.php'>Register here</a>";
        }
    } else {
        echo "All fields are required!";
    }
}
?>
