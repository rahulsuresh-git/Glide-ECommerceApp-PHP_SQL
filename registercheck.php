<?php
session_start();
error_reporting(0);
include 'db.php';

$name = mysqli_real_escape_string($conn, $_POST["name"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$address = mysqli_real_escape_string($conn, $_POST["address"]);
$contact = mysqli_real_escape_string($conn, $_POST["contact"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

$password = sha1($password);

$query = "INSERT INTO users values (DEFAULT,'$name','$email','$address','$contact',0,0,'A')";
$result = mysqli_query($conn, $query);
if ($result) {
    $query = "INSERT INTO auth values (DEFAULT,'$email','$password')";
    $result = mysqli_query($conn, $query);
    echo 'done';
} else {
    echo 'wrong';
}
