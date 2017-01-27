<?php
$order_status = $_GET['status'];

$con = mysqli_connect('localhost','root','root','event_photography');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"event_photography");
$sql="SELECT * FROM orders WHERE status = '$order_status' ORDER BY Start_Time";
$result = mysqli_query($con,$sql);

$response = array();
$i=0;
while($row = mysqli_fetch_array($result)) {
	
	$cust_id = $row['CUST_ID'];
	$result1 = mysqli_query($con,"SELECT firstname,lastname FROM customer WHERE CUST_ID='$cust_id'");
	$row1 = mysqli_fetch_array($result1);
	
	$json_row = array();
	$order_id = $row['ORDER_ID'];
	$json_row[] = $order_id;
	$json_row[] = $row1['firstname']." ".$row1['lastname'];
	$json_row[] = $row['Start_Time'];
	$json_row[] = $row['End_Time'];
	$json_row[] = $row['Num_Photographers'];
	//$json_row[] = "<input type='Button' class='btn btn-sm' style='background-color:#FF8000;border:0' name='button'.(string)$order_id id='button'.(string)$order_id value='View More Details' onclick='get_details($order_id)'>";
	$json_row[] = "<button class='btn btn-sm' style='background-color:#F5D0A9;border:0' name='button'.(string)$order_id id='button'.(string)$order_id onclick='get_details($order_id)'><i class='glyphicon glyphicon-eye-open'></i> View Order Details</button>";
	$response[] = $json_row;
	$i++;
}

$output = array(
        "draw" => intval(1),
        "recordsTotal" => intval($i),
        "recordsFiltered" => intval($i),
        "data" => $response
    );
echo json_encode( $output );

mysqli_close($con);
?>
