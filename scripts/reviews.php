<?php

$con = mysqli_connect("localhost", "root", "root", "event_photography");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query='select r.description,c.firstname,c.lastname from review r,customer c where r.cust_id=c.cust_id and r
.status="approved";';
$result = mysqli_query($con, $query);
$reviews=array();
while($row = mysqli_fetch_array($result))
{
   $reviews[]=array("name"=>$row['firstname'].' '.$row['lastname'],"review"=>$row['description']);
}
echo json_encode($reviews);
$con->close();