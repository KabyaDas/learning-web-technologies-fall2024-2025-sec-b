<?php
session_start();
require_once('../Model/db.php');

$user_id = $_SESSION['user_id']; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    $query = "SELECT password_hash FROM users WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();

 
        if (password_verify($current_password, $user['password_hash'])) {
            
            if ($new_password === $confirm_password) {
          
                $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                
                $update_query = "UPDATE users SET password_hash = ? WHERE id = ?";
                $update_stmt = $conn->prepare($update_query);
                $update_stmt->bind_param("si", $new_password_hash, $user_id);

                if ($update_stmt->execute()) {
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
