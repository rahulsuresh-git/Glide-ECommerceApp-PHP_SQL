<?php
session_start();
error_reporting(0);
include 'db.php';

$oid = $_POST["cancel"];
$query = "DELETE from orders where oid='$oid'";
$result = mysqli_query($conn, $query);
header("Location: placed.php"); /* Redirect browser */

//    $query = "SELECT * FROM auth WHERE email = '$username' AND password = '$password'";
//    $result = mysqli_query($conn, $query);
//    if(mysqli_num_rows($result) > 0)
//    {
//         $_SESSION['username'] = $username;

//         echo 'done';
//    }
//    else
//    {
//         echo 'wrong';
//    }
