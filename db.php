<?php
$host="localhost";
$user="root";
$pass="";
$db="school_management";

$conn=new mysqli("localhost","root","","school_managment");

if($conn->connect_error){
    die("connection failed");
}
?>