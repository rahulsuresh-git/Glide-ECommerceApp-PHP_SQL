<?php
include 'db.php';
$orderID = $_POST["orderID"];
if (isset($_POST['complete'])) {
    $query = "UPDATE orders set status='COMPLETED' where oid='$orderID'";
    $result = mysqli_query($conn, $query);
    header("Location: home.php");

} elseif (isset($_POST['cancel'])) {
    $query = "DELETE from orders where oid='$orderID'";
    $result = mysqli_query($conn, $query);
    header("Location: home.php");
}
