<?php
$cust_id = $_GET['cid'];

$con = mysqli_connect('localhost','root','root','event_photography');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"event_photography");
$result = mysqli_query($con,"SELECT * from customer WHERE CUST_ID='$cust_id'");

$response = array();
$row = mysqli_fetch_array($result);

$email_id = $row['email'];
$user_name = $row['firstname']." ".$row['lastname'];
$phone = $row['phone'];
$address = $row['address'];
$gender = $row['gender'];

echo "<div class='content-box-header panel-heading'>
	<div class='panel-title'><b>User Details</b></div>
	<div class='panel-options'>
	  <a href='#' data-rel='collapse'><i class='glyphicon glyphicon-refresh'></i></a>
	  <a href='#' data-rel='reload'><i class='glyphicon glyphicon-cog'></i></a>
	</div>
</div>
<div class='panel-body'>
<form class='form-horizontal' role='form'>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Full Name</label>
	<div class='col-sm-10'>
	  <span class='form-control'>$user_name</span>
    </div>
  </div>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Email</label>
	<div class='col-sm-10'>
	  <span class='form-control'>$email_id</span>
    </div>
  </div>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Phone</label>
	<div class='col-sm-10'>
	  <span class='form-control'>$phone</span>
    </div>
  </div>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Address</label>
	<div class='col-sm-10'>
	  <span class='form-control'>$address</span>
    </div>
  </div>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Gender</label>
	<div class='col-sm-10'>
	  <span class='form-control'>$gender</span>
    </div>
  </div>
  <div class='form-group'>
	<div class='col-sm-offset-2 col-sm-10'>
	  <a class='btn btn-primary' href='http://localhost/admin/orders.html' role='button'>Go back to the new orders list</a>
	</div>
  </div>
</form>
</div>";
mysqli_close($con);
?>
