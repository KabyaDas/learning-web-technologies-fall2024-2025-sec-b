<?php
require_once('../model/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (!empty($name) && !empty($contact) && !empty($username) && !empty($password)) {
        $sql = "INSERT INTO employees (name, contact_no, username, password) VALUES ('$name', '$contact', '$username', '$password')";
        if (mysqli_query($conn, $sql)) {
            echo "Employee added successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "All fields are required!";
    }
}
?>
