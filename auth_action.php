<?php
session_start();
include 'db.php';

$action =$_POST['action'];

if($action == 'login'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows == 1){
        $user = $result->fetch_assoc();

        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['role'] = $user['role'];

        echo "success";
    }
    else{
        echo "error";
    }
  }elseif($action == "logout"){
    session_destroy();
    echo "logout";
  }
?>