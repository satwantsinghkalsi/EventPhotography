<?php
$cust_id = $_GET['custID'];

$con = mysqli_connect('localhost','root','root','event_photography');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"event_photography");
$sql="SELECT * FROM customer WHERE CUST_ID = '$cust_id'";
$result = mysqli_query($con,$sql);

$response = array();
$row = mysqli_fetch_array($result);

$email = $row['email'];
$cust_name = $row['firstname']." ".$row['lastname'];
$gender = $row['gender'];
$phone = $row['phone'];
$address = $row['address'];

echo "<div class='content-box-header panel-heading'>
	<div class='panel-title'><b>My Details</b></div>
	<div class='panel-options'>
	  <a href='#' data-rel='collapse'><i class='glyphicon glyphicon-refresh'></i></a>
	  <a href='#' data-rel='reload'><i class='glyphicon glyphicon-cog'></i></a>
	</div>
</div>
<div class='panel-body'>
<form method='POST' action='save_acc_info.php' onsubmit='return validate_email_phone($email,$phone);' class='form-horizontal'>
  <input type='hidden' name='cust_id' value='$cust_id'>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Name</label>
	<div class='col-sm-10'>
	  <span class='form-control'>$cust_name</span>
    </div>
  </div>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Gender</label>
	<div class='col-sm-10'>
	  <span class='form-control'>$gender</span>
    </div>
  </div>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Email</label>
	<div class='col-sm-10'>
	  <input type='text' name='email' id='email' class='form-control' value='$email' />
    </div>
  </div>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Phone</label>
	<div class='col-sm-10'>
	  <input type='text' name='phone' id='phone' class='form-control' value='$phone' />
    </div>
  </div>
  <div class='form-group'>
	<label class='col-sm-2 control-label'>Address</label>
	<div class='col-sm-10'>
	  <input type='text' name='address' id='address' class='form-control' value='$address' />
    </div>
  </div>
  <div class='form-group'>
    <div class='form-group' align='center'><button type='submit' class='btn btn-primary'>Save Changes (if any)</button></div>
  </div>
</form>
</div>";
mysqli_close($con);
?>
