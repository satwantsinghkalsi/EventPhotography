<?php
$order_id = $_GET['o'];
$act = $_GET['act'];

$con = mysqli_connect('localhost','root','root','event_photography');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"event_photography");
$result = mysqli_query($con,"SELECT * from orders WHERE ORDER_ID='$order_id'");
$rowcount = mysqli_num_rows($result);
if ($rowcount > 0) {
	$row = mysqli_fetch_array($result);
	$creation_time = $row['Order_Creation_Date'];
	$cust_id = $row['CUST_ID'];
}
mysqli_close($con);

if ($rowcount > 0)
{
	$i=0;
	$j=0;
	$images_per_row = 5;
	$images_dir = "order_wise_photos\\".trim($order_id)."\\";
	/** generate photo gallery **/
	$image_files = get_files($images_dir);
	//echo count($image_files);
	if(count($image_files)) {
		if($act == 'delete') {
			echo "<form method='POST' action='move_photos.php' onsubmit='return confirm(\"sure to delete?\")'>";
			echo "<div class='form-group' align='center'><button type='submit' class='btn btn-primary'>Delete Selected Photos</button></div>";
			echo "<input type='hidden' name='move_type' value='delete'>";
		} else if($act == 'promote') {
			echo "<form method='POST' action='move_photos.php' onsubmit='return confirm(\"sure to promote these photos?\")'>";
			echo "<div class='form-group' align='center'><button type='submit' class='btn btn-primary'>Promote Selected Photos</button></div>";
			echo "<input type='hidden' name='move_type' value='promote'>";
		} else { //cust_favs
			echo "<form method='POST' action='move_photos.php' onsubmit='return confirm(\"sure to add these photos to your fav list?\")'>";
			echo "<div class='form-group' align='center'><button type='submit' class='btn btn-primary'>Select Photos to add to your Fav List</button>&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "<a class='btn btn-warning' href='http://localhost/admin/customer_orders.html' role='button'>Go back to the order list</a></div>";
			echo "<input type='hidden' name='move_type' value='cust_favs'>";
		}
		echo "<input type='hidden' name='order_id' value='$order_id'>";
		echo "<input type='hidden' name='cust_id' value='$cust_id'>";
		echo "<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered table-hover' id='example'>";

		$index = 0;
		foreach($image_files as $index=>$file) {
			$thumbnail_image = $images_dir.$file;
			if(($index>0)&&($index % $images_per_row == 0)) { echo "\n</tr>"; }
			if($index % $images_per_row == 0) { echo "\n<tr>"; }
			if($index % $images_per_row == ($images_per_row-1)) {
				echo "\n<td align='center'>
					<img class='thumbnail thumbnail_right' src='$thumbnail_image' alt='$file' />
					<input type='checkbox' id='$file' name='checked_list_to_delete[]' value='$file' />
				</td>";
			} else {
					echo "\n<td align='center'>
					<img class='thumbnail thumbnail_other' src='$thumbnail_image' alt='$file' />
					<input type='checkbox' id='$file' name='checked_list_to_delete[]' value='$file' />
				</td>";
			}
			$index++;
		}
		echo "\n</tr>";
		echo "</table>";
		if($act == 'delete') {
			echo "<div class='form-group' align='center'><button type='submit' class='btn btn-primary'>Delete Selected Photos</button></div>";
		} else if($act == 'promote') {
			echo "<div class='form-group' align='center'><button type='submit' class='btn btn-primary'>Promote Selected Photos</button></div>";
		} else { //cust_favs
			echo "<div class='form-group' align='center'><button type='submit' class='btn btn-primary'>Select Photos to add to your Fav List</button>&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "<a class='btn btn-warning' href='http://localhost/admin/customer_orders.html' role='button'>Go back to the order list</a></div>";
		}
		echo "</form>";
	}
	else {
		if($act == 'cust_favs') {
			echo "<p><b>There are no images available for the Order ID created on $creation_time</b></p>";
		} else {
			echo "<p><b>There are no images available for the Order ID $order_id</b></p>";
		}
	}
}
else
{
	echo "<p><b>Order ID $order_id not in Database</b></p>";
}

/* function:  returns files from dir */
function get_files($images_dir) 
{
	$exts = array('jpg','jpeg','bmp','png','gif');
	$files = array();
	//echo $images_dir;
	if($handle = opendir($images_dir)) {
		while(false !== ($file = readdir($handle))) {
			$extension = strtolower(get_file_extension($file));
			if($extension && in_array($extension,$exts)) {
				$files[] = $file;
			}
		}
		closedir($handle);
	}
	return $files;
}
/* function:  returns a file's extension */
function get_file_extension($file_name)
{
	return substr(strrchr($file_name,'.'),1);
}
?>