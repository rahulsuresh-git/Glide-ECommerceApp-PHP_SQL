<?php
include 'db.php';
if (isset($_POST['newName'])) {
    $name = $_POST['name'];
    // $query = "UPDATE users set name='$name'";
    // $result = mysqli_query($conn, $query);
    echo $name;

}
