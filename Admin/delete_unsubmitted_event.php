<?php
$o = $_GET['o'];

$con = mysqli_connect('localhost','root','root','event_photography');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
} else {
	mysqli_select_db($con,"event_photography");
	$sql="DELETE FROM orders WHERE status = 'unsubmitted' and ORDER_ID='$o'";
	$result = mysqli_query($con,$sql);
	mysqli_close($con);
}
session_start();
header("Location: http://localhost/admin/customer_cart.html");
?>
