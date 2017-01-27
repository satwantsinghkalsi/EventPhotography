<?php
$order_id = $_POST['order_id'];
$move_type = $_POST['move_type'];
$cust_id = $_POST['cust_id'];

$move_path = "";
if ($move_type == 'delete') {
	$move_path = "order_wise_photos/".trim($order_id)."/deleted";
}
if ($move_type == 'promote') {
	$move_path = "promoted_photos";
}
if ($move_type == 'cust_favs') {
	$move_path = "customer_fav_photos/".trim($cust_id);
}
if (!is_dir($move_path)) {
	mkdir($move_path, 0777, true);
	//echo $move_path."  ";
}

if(!empty($_POST['checked_list_to_delete'])) {
    foreach($_POST['checked_list_to_delete'] as $check) {
		if ($move_type == 'delete') {
			rename("order_wise_photos/".trim($order_id)."/".$check, $move_path."/".$check);
		}
		if ($move_type == 'promote') {
			copy("order_wise_photos/".trim($order_id)."/".$check, $move_path."/".$check);
		}
		if ($move_type == 'cust_favs') {
			copy("order_wise_photos/".trim($order_id)."/".$check, $move_path."/".$check);
		}
    }
}

session_start();
if ($move_type == 'delete') {
	header("Location: http://localhost/admin/delete_photos.html?o=$order_id");
}
if ($move_type == 'promote') {
	header("Location: http://localhost/admin/promote_photos.html?o=$order_id");
}
if ($move_type == 'cust_favs') {
	header("Location: http://localhost/admin/customer_orders.html");
}
?>
