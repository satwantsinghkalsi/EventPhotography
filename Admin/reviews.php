<?php
$con = mysqli_connect('localhost','root','root','event_photography');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"event_photography");
$sql="SELECT * FROM review WHERE Status='submitted'";
$result = mysqli_query($con,$sql);

$response = array();
$i=0;
while($row = mysqli_fetch_array($result)) {
	
	$cust_id = $row['CUST_ID'];
	$result1 = mysqli_query($con,"SELECT firstname,lastname FROM customer WHERE CUST_ID='$cust_id'");
	$row1 = mysqli_fetch_array($result1);
	
	$json_row = array();
	$review_id = $row['REVIEW_ID'];
	$json_row[] = $review_id;
	$json_row[] = $row1['firstname']." ".$row1['lastname'];
	$j=0;
	$stars="";
	$rating_count = intval($row['Rating']);
	if($rating_count<=0) {
		$stars = "<i><b>ZERO STARS</b></i>";
	} else {
		while ($j < $rating_count) {
			$stars .= "<i class='glyphicon glyphicon-star'></i>";
			$j += 1;
		}
	}
	$json_row[] = $stars;
	$json_row[] = htmlspecialchars($row['Description']);
	if(intval($row['Anonymous']) == 1){
		$json_row[] = "Yes";
	} else {
		$json_row[] = "No";
	}
	$json_row[] = "<input type='Button' class='btn btn-info' style='background-color:#04B4AE;border:0' name=\"'approve_button'.(string)$review_id\" id=\"'approve_button'.(string)$review_id\" value='Accept' onclick='approve_review($review_id,1)'>";
	$json_row[] = "<input type='Button' class='btn btn-info' style='background-color:#FF8000;border:0' name=\"'reject_button'.(string)$review_id\" id=\"'reject_button'.(string)$review_id\" value='Reject' onclick='approve_review($review_id,0)'>";
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
