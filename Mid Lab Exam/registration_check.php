<?php
session_start();

if(isset($_POST['submit'])){
    
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $dob = $_POST['dob'];
    $password = trim($_POST['password']);
    $gender = $_POST['gender'];
    $confirm_password = trim($_POST['confirm_password']);
 
   
    if($username == null || empty($password) || empty($confirm_password)|| empty($email)||empty($gender)||empty($dob)){
        header('location: registration.php');
    }else if($password == $confirm_password){
       
        $_SESSION['xyz'] = true;
        header('location: home.php');
    }else{
        echo "Invalid user!";
    }
}
    else{
    header('location: registration.php');
}
$_SESSION['abc'] = array(username->$username, email->$email, dob->$dob, password->$password, gender->$gender, confirm_password->$confirm_password);

?>
