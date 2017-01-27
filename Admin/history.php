
<!-- Add your stylesheets here-->
<link rel="stylesheet" type="text/css" href="customer.css"/>

<!-- Add code for your body section-->

<?php
	session_start();
	$_SESSION['email'] = "john123@gmail.com";
	$email = $_SESSION['email'];
	
	
	// Connect to database
	$con = mysqli_connect('127.0.0.1', 'root', 'root', 'event_photography');
	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL database";
	}
	else{
		// Create query
		$query = sprintf("SELECT * FROM Customer WHERE email='%s'"
		, $email);
		
		//Execute query
		$result = mysqli_query($con, $query);
		
		// Get associative array for username
		$row = mysqli_fetch_array($result);
		$name = $row['firstname']." ".$row['lastname'];
		$_SESSION['name'] = $name;
		$custID = $row['CUST_ID'];
		$_SESSION['cust_id'] = $custID;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Homepage</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="customer.js"></script>
</head>
<body>
	<header>
		<img src="images/panodo_logo_final.jpg"/>
		<a href="cart.php">
			<img src="images/shopping-cart.png"/>
		</a>
			<select class="specialColor" id="userDropDown">
				<option class="specialColor">My Account</option>
				<option class="specialColor">Log Out</option>
			</select>
	</header>

	<div id="mainPage">
		
		<div class="col-sm-2 sidebar">
			<ul class="nav navbar-nav">
				<li><a href="customerHome.php">Home</a></li>
				<li><a href="account.php">My Account</a></li>
				<li><a href="history.php">My Orders</a></li>
				<li><a href="gallery.php">My Gallery</a></li>				
			</ul>
		</div>
		<div class = "center col-sm-8">	
		<h2 class="center">Welcome, <?php echo $name?>!</h2>
			<button type="button" class="btn btn-sm customButtons"><strong>Create a New Order</strong></button>
		</div>
		<div class="col-sm-8">
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-hover" id="example">
				<thead>
					<tr>
						<th style="width: 20%">Event Name</th>
						<th style="width: 20%">Event Start DateTime</th>
						<th style="width: 20%">Order Submitted DateTime</th>
						<th style="width: 20%">More Order Details</th>
						<th style="width: 20%">View Order Photos</th>
					</tr>
				</thead>
			</table>
		</div>
		
	</div>
</body>

</html>
<?php require 'inc/template_footer_start.php';?>
