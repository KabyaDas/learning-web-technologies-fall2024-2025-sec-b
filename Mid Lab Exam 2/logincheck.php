<?php
    session_start();

    if(($_POST['submit'])){
       
        $id = $_POST['id'];
        $password = $_POST['password'];
        if($id == null || empty($password)){
            echo "Null username/password";
        }else if($id == $password){
            $_SESSION['xyz'] = true;
            header('location: home.php');
        }else{
            echo "Invalid user!";
        }
    }else{
        header('location: login.html');
    }
?>