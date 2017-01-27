<?php
$cust_id = $_POST['cust_id'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$con = mysqli_connect('localhost','root','root','event_photography');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"event_photography");
$sql="UPDATE customer SET email='$email',address='$address',phone='$phone' WHERE CUST_ID='$cust_id'";
$result = mysqli_query($con,$sql);
mysqli_close($con);

session_start();
header("Location: http://localhost/admin/customer_account.html");
?>
