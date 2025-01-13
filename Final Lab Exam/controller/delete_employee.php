<?php
require_once('../model/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    if (!empty($id)) {
        $sql = "DELETE FROM employees WHERE id = '$id'";
        if (mysqli_query($conn, $sql)) {
            echo "Employee deleted successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "ID is required!";
    }
}
?>
