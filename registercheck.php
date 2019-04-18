<?php
session_start();
error_reporting(0);
include 'db.php';

$name = mysqli_real_escape_string($conn, $_POST["name"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$address = mysqli_real_escape_string($conn, $_POST["address"]);
$contact = mysqli_real_escape_string($conn, $_POST["contact"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);
$refc = mysqli_real_escape_string($conn, $_POST["ref"]);

$password = $password;
$digits = 4;
$ref = "REF" . rand(pow(10, $digits - 1), pow(10, $digits) - 1);

$query = "select * from users where ref='$refc'";
$result = mysqli_query($conn, $query);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $userid = $row['id'];

}

$query = "INSERT INTO users values (DEFAULT,'$name','$email','$address','$contact',0,0,'A','$ref')";
$result = mysqli_query($conn, $query);
if ($result) {
    $query = "INSERT INTO auth values (DEFAULT,'$email','$password')";
    $result = mysqli_query($conn, $query);
    echo 'done';
} else {
    echo 'wrong';
}
