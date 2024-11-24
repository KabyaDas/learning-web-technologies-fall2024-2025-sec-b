<?php
    session_start();
    $_SESSION['abc']= array(username->$username, email->$email, dob->$dob, password->$password, gender->$gender, confirm_password->$confirm_password);
    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if($username == null || empty($password)){
        }else if($password == $confirm_password){
            $_SESSION['pqr'] = true;
            header('location: home.php');
        }else{
            echo "Invalid user!";
        }
    }else{
        header('location: login.html');
    }
?>