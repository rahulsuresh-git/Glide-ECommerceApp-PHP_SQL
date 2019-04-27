<?php
include 'db.php';
$id = $_POST['id'];
$query1 = "select *
    from users where id='$id'";

$json = [];

$result = mysqli_query($conn, $query1);
if (mysqli_num_rows($result) <= 0) {
    echo "wrong";
} else {
    while ($row = mysqli_fetch_array($result)) {
        $tmp = array(
            'uid' => $row['id'],
            'name' => $row['name'],
            'email' => $row['email'],
            'addr' => $row['addr'],
            'contact' => $row['contact'],
            'balance' => $row['balance'],
            'rewards' => $row['rewards'],
            'litres' => $row['litres'],
            'category' => $row['category'],
            'ref' => $row['ref'],
            'lflag' => $row['lflag'],

        );
        array_push($json, $tmp);
    }
    $jsonString = json_encode($json);
    echo $jsonString;
}
