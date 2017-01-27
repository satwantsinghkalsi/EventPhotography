<?php

$host_address  = $_SERVER['PHP_SELF'];
$host_address = rtrim($host_address,"/");
#echo $host_address;
#echo "<br>";
$book_id = basename($host_address);
#echo $book_id;
#echo "<br>";

$con = mysqli_connect('localhost','root','root','HW4');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"HW4");

$jsonBooks = array();
$jsonAuthors = array();

if(strtolower($book_id) == 'books') {
	$sql="SELECT * FROM Book";
	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result)) 
	{	
		$jsonBooks['Book_id_'.$row['Book_id']]['title'] =$row['title']; 
	}
} else {
	$sql="SELECT * FROM Book WHERE Book_id='$book_id'";
	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result)) 
	{
		$jsonBooks['Book_id_'.$row['Book_id']]['title'] =$row['title']; 
		$jsonBooks['Book_id_'.$row['Book_id']]['year'] =$row['year'];
		$jsonBooks['Book_id_'.$row['Book_id']]['price'] =$row['price'];
		$jsonBooks['Book_id_'.$row['Book_id']]['category'] =$row['category'];
		
		$sql1="SELECT Author_id FROM Book_Authors WHERE Book_id='$book_id'";
		$result1 = mysqli_query($con,$sql1);
		while($row1 = mysqli_fetch_array($result1)) 
		{
			$author_id = $row1['Author_id'];
			$sql2="SELECT Author_Name FROM Authors WHERE Author_id='$author_id'";
			$result2 = mysqli_query($con,$sql2);
			$row2 = mysqli_fetch_array($result2);
			$author_name = $row2['Author_Name'];
			$jsonAuthors['Author_id_'.$author_id]['Author_Name'] = $author_name;
		}
		$jsonBooks['Book_id_'.$row['Book_id']]['authors'] = $jsonAuthors;
	}
}
echo json_encode($jsonBooks);

mysqli_close($con);
?>
