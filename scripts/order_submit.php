<?php
session_start();
$username=$_SESSION["email"];
$name=$_SESSION["name"];
session_write_close();
$customer=$_GET["customer"];
$event=$_GET["event"];
$people=$_GET["people"];
$amount=$_GET["amount"];
$date=date("Y-m-d",strtotime($_GET["date"]));
$time=$_GET["time"];
$duration=$_GET["duration"];
$photographers=$_GET["photographers"];
$photos=$_GET["photos"];
$size=explode(' ',$_GET["size"])[0].' in';//8X10 2400X3000
$type=$_GET["type"];//Digital
$cost=$photos*5 + $photographers*$duration;//no of photos*photo_size_multiplier<based on a base size> + no_of_photographers*no_of_hours
$start_time=$date.' '.$time.':00';
$tm=strtotime($start_time);

$end_time= date("Y-m-d H:i:s", strtotime('+'.$duration.' hours', $tm));
$con = mysqli_connect("localhost", "root", "root", "event_photography");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="select cust_id,address from customer where email='$customer'";
//echo $sql;
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$custid=$row["cust_id"];
$addr=$row["address"];
echo $custid;
$query="INSERT INTO orders( CUST_ID, PAYMENT_ID, Event_Name, Order_Creation_Date, Photo_ID, Cost, Status, Headline, Shipping_Address, Billing_Address, Start_Time, End_Time, Num_Photographers, Num_Photos, Size, Delivery_Type) VALUES (".$custid.",0,'".$event."','".date('Y-m-d H:i:s')."',1,".$cost.",'unsubmitted','".$event."','".$addr."','".$addr."','".$start_time."','".$end_time."',".$photographers.",".$photos.",'".$size."','".$type."')";
echo $query;
if ($con->query($query) === TRUE) {
    session_regenerate_id(true);
    $_SESSION["email"]=$username;
    $_SESSION["name"]=$name;
    session_write_close();
    header('Location: ../Admin/customer_home.html');
} else {
   // echo $query;
    header('Location: ../index.php');

}
$con->close();