<?php
$order_id = $_POST['order_id_input'];

$con = mysqli_connect('localhost','root','root','event_photography');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"event_photography");
$result = mysqli_query($con,"SELECT * from orders WHERE ORDER_ID='$order_id'");
$rowcount = mysqli_num_rows($result);
mysqli_close($con);

$date = new DateTime();
$date_str = $date->getTimestamp();
if ($rowcount > 0)
{
	$uploads_dir = "order_wise_photos/".$order_id."/";
	mkdir($uploads_dir, 0777, true);

	foreach ($_FILES["new_photo_files"]["error"] as $key => $error) {
		if ($error == UPLOAD_ERR_OK) {
			$tmp_name = $_FILES["new_photo_files"]["tmp_name"][$key];
			// basename() may prevent filesystem traversal attacks;
			// further validation/sanitation of the filename may be appropriate
			$name = basename($_FILES["new_photo_files"]["name"][$key]);
			move_uploaded_file($tmp_name, $uploads_dir.$date_str."_".$name);
		}
	}
	session_start();
	echo "<script type=\"text/javascript\"> 
		alert(\"Files successfully uploaded\");
		window.open(\"http://localhost/admin/upload_photos.html\",\"_self\");
	</script>";
	//header("Location: http://localhost/admin/upload_photos.html");
}
else
{
	session_start();
	echo "<script type=\"text/javascript\"> 
		alert(\"Order ID not in Database\");
		window.open(\"http://localhost/admin/upload_photos.html\",\"_self\");
	</script>";
}
?>
