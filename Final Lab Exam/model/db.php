<?php


function getConnection(){
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'shop_management');
    return $conn;
}

function login($username, $password){
    $conn = getConnection();
    $sql = "select * from employees where username='{$username}' and password='{$password}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count ==1){
        return true;
    }else{
        return false;
    }
} 

function addUser($name, $contact_no, $username, $password){
    $conn = getConnection();
    $sql = "insert into employees VALUES('', {$name}, {$contact_no}, '{$username}', '{$password}')";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

function updateUser($name, $contact_no, $username) {
    $conn = getConnection();
    $sql = "UPDATE employees SET emp_name='{$name}', contact_no='{$contact_no}', username='{$username}',  WHERE id='{$id}'";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteUser($id) {
    $conn = getConnection();
    $sql = "DELETE FROM employees WHERE id='{$id}'";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function searchUser($keyword) {
    $conn = getConnection();
    $sql = "SELECT * FROM employees WHERE username LIKE '%{$keyword}%' OR emp_name LIKE '%{$keyword}%'";
    $result = mysqli_query($conn, $sql);
    $users = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }

    return $users;
}

?>