<?php
$custID = $_GET['custID'];

$con = mysqli_connect('localhost','root','root','event_photography');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"event_photography");
$sql="SELECT * FROM orders WHERE CUST_ID = '$custID' ORDER BY Order_Creation_Date";
$result = mysqli_query($con,$sql);

$response = array();
$i=0;
while($row = mysqli_fetch_array($result)) 
{	
	$json_row = array();
	$order_id = $row['ORDER_ID'];
	$json_row[] = $row['Event_Name'];
	$json_row[] = $row['Order_Creation_Date'];
	$json_row[] = $row['Start_Time'];
	$json_row[] = "<button class='btn btn-sm' style='background-color:#F5D0A9;border:0' name='button'.(string)$order_id id='button'.(string)$order_id onclick='get_details($order_id)'><i class='glyphicon glyphicon-list-alt'></i> View Order Details</button>";
	$json_row[] = "<button class='btn btn-sm' style='background-color:#F78181;border:0' name='button'.(string)$order_id id='button'.(string)$order_id onclick='get_photos($order_id)'><i class='glyphicon glyphicon-eye-open'></i> View Order Photos</button>";
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
