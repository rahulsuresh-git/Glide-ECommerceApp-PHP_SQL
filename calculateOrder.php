<?php
session_start();
error_reporting(0);
include 'db.php';

if (empty($_POST["qty"]) && empty($_POST["group1"])) {
    echo 'wrong';
} else {

    $qty = $_POST["qty"];
    $group = $_POST["group1"];
    $uid = $_POST["uid"];
    $type = $_POST["type"];
    $type2 = $type . "-" . $group . "L";
    $cat = $_POST["cat"];
    $lit = $_POST["lit"];
    $digits = 6;
    $price = 0;
    $oid = "#" . rand(pow(10, $digits - 1), pow(10, $digits) - 1);
    $status = "PLACED";
    if ($lit % 26 === 25 && $lit != 0) {
        $price = 15;
    } else {
        $query = "SELECT price FROM oils WHERE category = '$cat' and name='$type' and qty='$group'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        $price = $row['price'];
    }

    $qtyint = (int) filter_var($qty, FILTER_SANITIZE_NUMBER_INT);
    $groupint = (int) filter_var($group, FILTER_SANITIZE_NUMBER_INT);
    $priceint = (int) filter_var($price, FILTER_SANITIZE_NUMBER_INT);

    $total = $qtyint * $priceint;

    $query = "INSERT INTO orders values ('$uid','$type2','$qty','$total','$status','$oid')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo 'done';
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
}
