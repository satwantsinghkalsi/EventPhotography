<?php
	session_start();
	//$email = "johnsmith@gmail.com";
	$email = $_SESSION['email'];
	//$custID=5;
	//$firstname = "john";
	
	// define variables and set to empty values
	$username = $password = "";
	//echo $_SESSION['cust_id'];
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{				
		// Get the user's inputs
		$shipAdd = test_input($_POST["shipAdd"]);
		$billAdd = test_input($_POST["billAdd"]);
		$cardSel = $_POST["cards"];
		$cardName = test_input($_POST["cardName"]);
		$creditCard = test_input($_POST["creditCardNum"]);
		$cvv = test_input($_POST["cvv"]);
		$expDate = test_input($_POST["expDate"]);
		
		// Check if any field is empty
		if($shipAdd == "" || $billAdd == "") //|| $cardName == "" || $creditCard == "" || $cvv == "" || $expDate == "")
		{
			// Return to login page
			header('Location: cart.php ');
			exit();
		}
		else
		{
			$payId;
			// Connect to database
			$con = mysqli_connect('localhost', 'root', 'root', 'event_photography');
			if(mysqli_connect_errno()){
				echo "Failed to connect to retreive information from database";
			}
			else{
				
				$result1 = mysqli_query($con, "SELECT * FROM customer WHERE email='$email'");
				$row1 = mysqli_fetch_array($result1);
				$firstname = $row1['firstname'];
				$custID = $row1['CUST_ID'];
			
				if($cardSel == "newCard"){
					
					echo "INSERT INTO Payment_details (payment_id, cust_id, card_number, card_name, cvc_number, card_expiry) VALUES ('', "
					.$_SESSION['cust_id'].", ".$creditCard.", '".$cardName."', ".$cvv.",".$expDate.");";
					// Add new card to database
					$query = "INSERT INTO Payment_details (payment_id, cust_id, card_number, card_name, cvc_number, card_expiry) VALUES ('', "
					.$_SESSION['cust_id'].", ".$creditCard.", '".$cardName."', ".$cvv.", STR_TO_DATE('".$expDate."', '%Y-%m-%d'));";
					
					//Execute query
					mysqli_query($con, $query);
					
					// Create query
					$query = sprintf("SELECT * FROM Payment_details WHERE card_name='%s'"
					, $cardName);
					
					//Execute query
					$result = mysqli_query($con, $query);
					
					$row = mysqli_fetch_array($result);
					$payId = $row['PAYMENT_ID'];
					
				}
				else {
					// Create query
					$query = sprintf("SELECT * FROM Payment_details WHERE card_name='%s'"
					, $_POST["cards"]);
					
					//Execute query
					$result = mysqli_query($con, $query);
					
					$row = mysqli_fetch_array($result);
					
					$payId = $row['PAYMENT_ID'];
				}
				// Create query
				$query = sprintf("UPDATE Orders SET status = '%s', shipping_address = '%s', billing_address = '%s', payment_id = '%s' WHERE cust_id='%s' AND status ='%s'"
				, "processing", $shipAdd, $billAdd, $payId, $_SESSION['cust_id'], "unsubmitted");
								
				//Execute query
				$result = mysqli_query($con, $query);
				mysqli_close($con);
			}
		}
		
	}

	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Order Submitted</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/tables.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script> 
	<script src="vendors/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables/dataTables.bootstrap.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"></script>
	<script type="text/javascript">
		function get_admin_profile(cust_id)
		{
			//alert( "Handler for "+ cust_id +" called." );
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			  } else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			  xmlhttp.onreadystatechange=function() {
				if (this.readyState==4 && this.status==200) {
				  document.getElementById("main_box").innerHTML=this.responseText;
				}
			  }
			  xmlhttp.open("GET","admin_details.php?cid="+cust_id,true);
			  xmlhttp.send();
		}
	</script>
  </head>
  <body>
  	<div class="header">
		 <img class="logo_strip" src="images/lines.png" />
		 <img class="logo_image" src="images/panodo_logo_final.jpg" />
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5 col-md-offset-3">
	              <!-- Logo -->
	              <div class="logo">
					<h1><a href="orders.html">Panodo Cart</a></h1>
	              </div>
	           </div>
	           <div class="col-md-4">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><br><?php echo $firstname;?>'s Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="javascript:get_admin_profile(<?php echo $custID;?>)">Profile</a></li>
	                          <li><a href="user_logout.php">Logout</a></li>
	                        </ul>
	                      </li>
						  <a href="customer_cart.html"><img class="cart-logo" src="images/shopping-cart.png" /></a>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
					<li class="current"><img src="images/cust_logo.jpg"></li>
                    <li class="current"><a href="customer_home.html"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li class="current"><a href="customer_account.html"><i class="glyphicon glyphicon-briefcase"></i> My Account</a></li>
                    <li class="current"><a href="customer_orders.html"><i class="glyphicon glyphicon-list"></i> My Orders</a></li>
                    <li class="current"><a href="customer_gallery.html"><i class="glyphicon glyphicon-heart"></i> My Gallery</a></li>
                </ul>
             </div>
		  </div>
		  		  
		  <div class="col-md-10">
			<div class="content-box-large" id="main_box">
  				<h2 class="center">Thank you for your order!</h2>
  			</div>
		  </div>
		</div>
    </div>	
	<footer>
		<div class="container">
			<div class="copy text-center">
			   Copyright 2016 <a href='www.utdallas.edu'>UT Dallas</a>
			</div>
		</div>
	</footer>
  </body>
</html>