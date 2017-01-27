<?php
$order_id = $_GET['o'];
$old_status = $_GET['old'];
$new_status = $_GET['new'];

$con = mysqli_connect('localhost','root','root','event_photography');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"event_photography");
$sql="UPDATE orders SET Status='$new_status' WHERE Status='$old_status' AND ORDER_ID='$order_id'";

if (!mysqli_query($con,$sql)) {
	echo "Some Error Occured" ;
} else {
	echo "Success";
}
mysqli_close($con);
?>
