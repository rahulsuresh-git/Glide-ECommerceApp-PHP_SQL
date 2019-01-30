<?php
session_start();
error_reporting(0);
include 'db.php';

$email = $_POST["email"];
echo $email;
$id = $_POST["ide"];
echo $id;
$query = "UPDATE users set email='$email' where id='$id'";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "email";
}
