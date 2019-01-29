<?php
session_start();
error_reporting(0);
include 'db.php';
date_default_timezone_set('Asia/Calcutta');

$timesp = date("d-m-Y H:i:s");
$digits = 6;
$price = 0;
$oid = "#" . rand(pow(10, $digits - 1), pow(10, $digits) - 1);
$status = "PLACED";
$id = $_POST['origid'];
$query = "SELECT sum(total) as sumf FROM cart WHERE uid = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$grand = $row['sumf'];
$query = "SELECT * FROM cart WHERE uid = '$id'";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $type2 = $row['type'];
    $qty = $row['qty'];
    $total = $row['total'];

    $query = "INSERT INTO orders values ('$id','$type2','$qty','$total','$grand','$status','$oid','$timesp')";
    $z = mysqli_query($conn, $query);
    echo "1";
}
echo "2";

if ($result) {
    $query = "DELETE from cart where uid='$id'";
    $result = mysqli_query($conn, $query);
    header("Location: placed.php"); /* Redirect browser */
}
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
