<?php
require_once('../model/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);

    if (!empty($id) && !empty($name) && !empty($contact)) {
        $sql = "UPDATE employees SET name = '$name', contact_no = '$contact' WHERE id = '$id'";
        if (mysqli_query($conn, $sql)) {
            echo "Employee updated successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "All fields are required!";
    }
}
?>
