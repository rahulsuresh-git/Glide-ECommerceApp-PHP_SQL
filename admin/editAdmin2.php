<?php
include 'db.php';
if (isset($_POST['newName'])) {
    $name = $_POST['name'];
    $uid = $_POST['uid'];
    $query = "UPDATE users set name='$name' where id='$uid'";
    $result = mysqli_query($conn, $query);
    echo "<script>
alert('Customer Name updated successfully!');
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
alert('Customer Email updated successfully!');
window.location.href='viewData.php';
</script>";

} elseif (isset($_POST['newContact'])) {
    $contact = $_POST['contact'];
    $uid = $_POST['uid'];
    $query = "UPDATE users set contact='$contact' where id='$uid'";
    $result = mysqli_query($conn, $query);
    echo "<script>
alert('Contact number updated successfully!');
window.location.href='viewData.php';
</script>";

} elseif (isset($_POST['newBalance'])) {
    $balance = $_POST['balance'];
    $uid = $_POST['uid'];
    $query = "UPDATE users set balance='$balance' where id='$uid'";
    $result = mysqli_query($conn, $query);
    echo "<script>
alert('Balance Amount updated successfully!');
window.location.href='viewData.php';
</script>";

} elseif (isset($_POST['newRewards'])) {
    $rewards = $_POST['rewards'];
    $uid = $_POST['uid'];
    $query = "UPDATE users set rewards='$rewards' where id='$uid'";
    $result = mysqli_query($conn, $query);
    echo "<script>
alert('Reward Points updated successfully!');
window.location.href='viewData.php';
</script>";

} elseif (isset($_POST['newLitres'])) {
    $litres = $_POST['litres'];
    $uid = $_POST['uid'];
    $query = "UPDATE users set litres='$litres' where id='$uid'";
    $result = mysqli_query($conn, $query);
    echo "<script>
alert('Customer Total Litres updated successfully!');
window.location.href='viewData.php';
</script>";

} elseif (isset($_POST['newCategory'])) {
    $category = $_POST['category'];
    $uid = $_POST['uid'];
    $query = "UPDATE users set category='$category' where id='$uid'";
    $result = mysqli_query($conn, $query);
    echo "<script>
alert('Customer category updated successfully!');
window.location.href='viewData.php';
</script>";

} elseif (isset($_POST['newAddr'])) {
    $address = $_POST['address'];
    $uid = $_POST['uid'];
    $query = "UPDATE users set addr='$address' where id='$uid'";
    $result = mysqli_query($conn, $query);
    echo "<script>
alert('Address updated successfully!');
window.location.href='viewData.php';
</script>";

}
