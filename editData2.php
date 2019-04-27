<?php
include 'db.php';
if (isset($_POST['newName'])) {
    $name = $_POST['name'];
    $uid = $_POST['uid'];
    $query = "UPDATE users set name='$name' where id='$uid'";
    $result = mysqli_query($conn, $query);
    echo "<script>
alert('Name updated successfully!');
window.location.href='edit.php';
</script>";

} elseif (isset($_POST['newEmail'])) {
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $query = "UPDATE users set email='$email' where id='$uid'";
    $result = mysqli_query($conn, $query);
    $query = "UPDATE auth set email='$email' where id='$uid'";
    $result = mysqli_query($conn, $query);
    echo "<script>
alert('Email updated successfully!');
window.location.href='edit.php';
</script>";

} elseif (isset($_POST['newContact'])) {
    $contact = $_POST['contact'];
    $uid = $_POST['uid'];
    $query = "UPDATE users set contact='$contact' where id='$uid'";
    $result = mysqli_query($conn, $query);
    echo "<script>
alert('Contact number updated successfully!');
window.location.href='edit.php';
</script>";

} elseif (isset($_POST['newAddr'])) {
    $address = $_POST['address'];
    $uid = $_POST['uid'];
    $query = "UPDATE users set addr='$address' where id='$uid'";
    $result = mysqli_query($conn, $query);
    echo "<script>
alert('Address updated successfully!');
window.location.href='edit.php';
</script>";

}
