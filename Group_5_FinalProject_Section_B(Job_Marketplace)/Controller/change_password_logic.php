<?php
session_start();
require_once('../Model/db.php');

// Assume the user is logged in, and the user ID is stored in the session
$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Fetch the user's current password hash from the database
    $query = "SELECT password_hash FROM users WHERE id = $user_id";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the current password
        if (password_verify($current_password, $user['password_hash'])) {
            // Check if new password and confirmation match
            if ($new_password === $confirm_password) {
                // Hash the new password
                $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                // Update the password in the database
                $update_query = "UPDATE users SET password_hash = '$new_password_hash' WHERE id = $user_id";
                if ($conn->query($update_query)) {
                    echo "<p>Password changed successfully!</p>";
                } else {
                    echo "<p>Error updating password. Please try again.</p>";
                }
            } else {
                echo "<p>New password and confirmation do not match.</p>";
            }
        } else {
            echo "<p>Current password is incorrect.</p>";
        }
    } else {
        echo "<p>User not found.</p>";
    }
}
?>
