<?php
$o = $_GET['o'];

$con = mysqli_connect('localhost','root','root','event_photography');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"event_photography");
$sql="SELECT * FROM orders WHERE status = 'approved' and ORDER_ID='$o'";
$result = mysqli_query($con,$sql);

$response = array();
$row = mysqli_fetch_array($result);

$cust_id = $row['CUST_ID'];
$event_id = $row['Event_ID'];
$result1 = mysqli_query($con,"SELECT firstname,lastname FROM customer WHERE CUST_ID='$cust_id'");
$row1 = mysqli_fetch_array($result1);
$result2 = mysqli_query($con,"SELECT Event_Name FROM event WHERE EVENT_ID='$event_id'");
$row2 = mysqli_fetch_array($result2);

$order_id = $row['ORDER_ID'];
$cust_name = $row1['firstname']." ".$row1['lastname'];
$start_time = $row['Start_Time'];
$end_time = $row['End_Time'];
$num_photographers = $row['Num_Photographers'];
$num_photos = $row['Num_Photos'];
$event_name = $row2['Event_Name'];
$cost = $row['Cost'];
$headline = $row['Headline'];
$shipping_address = $row['Shipping_Address'];
$billing_address = $row['Billing_Address'];
$photo_size = $row['Size'];
$delivery_type = $row['Delivery_Type'];

echo "<div class='content-box-header panel-heading'>
	<div class='panel-title'><b>Details for Order ID $o</b></div>
	<div class='panel-options'>
	  <a href='#' data-rel='collapse'><i class='glyphicon glyphicon-refresh'></i></a>
	  <a href='#' data-rel='reload'><i class='glyphicon glyphicon-cog'></i></a>
	</div>
</div>
<div class='panel-body'>
<form class='form-horizontal' role='form'>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Event Headline</label>
	<div class='col-sm-10'>
	  <span class='form-control'>$headline</span>
    </div>
  </div>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Customer Name</label>
	<div class='col-sm-10'>
	  <span class='form-control'>$cust_name</span>
    </div>
  </div>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Event Name</label>
	<div class='col-sm-10'>
	  <span class='form-control'>$event_name</span>
    </div>
  </div>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Event Start Time</label>
	<div class='col-sm-10'>
	  <span class='form-control'>$start_time</span>
    </div>
  </div>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Event End Time</label>
	<div class='col-sm-10'>
	  <span class='form-control'>$end_time</span>
    </div>
  </div>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Total Estimated Cost</label>
	<div class='col-sm-10'>
	  <span class='form-control'>$cost</span>
    </div>
  </div>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Number of Photographers</label>
	<div class='col-sm-10'>
	  <span class='form-control'>$num_photographers</span>
    </div>
  </div>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Number of Photos Ordered</label>
	<div class='col-sm-10'>
	  <span class='form-control'>$num_photos</span>
    </div>
  </div>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Photo Size Requested</label>
	<div class='col-sm-10'>
	  <span class='form-control'>$photo_size</span>
    </div>
  </div>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Billing Address</label>
	<div class='col-sm-10'>
	  <span class='form-control'>$billing_address</span>
    </div>
  </div>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Shipping Address</label>
	<div class='col-sm-10'>
	  <span class='form-control'>$shipping_address</span>
    </div>
  </div>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Delivery Type</label>
	<div class='col-sm-10'>
	  <span class='form-control'>$delivery_type</span>
    </div>
  </div>
  <div class='form-group'>
	<div class='col-sm-offset-2 col-sm-10'>
	  <button type='Button' class='btn btn-success' onclick='processing_to_approved_rejected($order_id,\"completed\")'>Send Order to Completed List</button>
	  <a class='btn btn-primary' href='http://localhost/admin/orders_approved.html' role='button'>Go back to the approved order list</a>
	</div>
  </div>
</form>
</div>";
mysqli_close($con);
?>
