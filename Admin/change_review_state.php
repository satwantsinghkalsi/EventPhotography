<?php
$review_id = $_GET['r'];
$new_status = $_GET['new_status'];

$con = mysqli_connect('localhost','root','root','event_photography');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"event_photography");
$sql="UPDATE review SET Status='$new_status' WHERE REVIEW_ID='$review_id'";

if (!mysqli_query($con,$sql)) {
	echo "Some Error Occured" ;
} else {
	echo "Success";
}
mysqli_close($con);
?>
