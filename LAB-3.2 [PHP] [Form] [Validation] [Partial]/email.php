<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    if (empty($email)) {
        echo "Error: Email can't be empty.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Error: Invalid structure.";
    } else {
        echo "Email: " . htmlspecialchars($email);
    }
}
?>