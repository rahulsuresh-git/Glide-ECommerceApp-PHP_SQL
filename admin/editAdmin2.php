<?php
include 'db.php';
if (isset($_POST['newName'])) {
    $name = $_POST['name'];
    $uid = $_POST['uid'];
    $query = "UPDATE users set name='$name' where id='$uid'";
    $result = mysqli_query($conn, $query);
    echo "<script>
alert('Name changed successfully!');
window.location.href='viewData.php';
</script>";

} elseif (isset($_POST['newEmail'])) {
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $query = "UPDATE users set email='$email' where id='$uid'";
    $result = mysqli_query($conn, $query);
    $query = "UPDATE auth set email='$email' where id='$uid'";
    $result = mysqli_query($conn, $query);
    echo "<script>
alert('Email changed successfully! Make sure you use new email while logging in.');
window.location.href='viewData.php';
</script>";

}
