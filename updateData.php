<?php
session_start();
error_reporting(0);
include 'db.php';

$email = $_POST["email"];
$id = $_POST["ide"];

$query = "UPDATE users set email='$email' where id='$id'";
$result1 = mysqli_query($conn, $query);
$query = "UPDATE auth set email='$email' where id='$id'";
$result2 = mysqli_query($conn, $query);
header("Location: home.php"); /* Redirect browser */
