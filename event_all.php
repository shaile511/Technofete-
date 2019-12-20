<?php
include "connection.php";
$arr= array('');
if(isset($_SESSION['roll'])){
	$roll=$_SESSION['roll'];
	$event = '';
	$query=mysqli_query($connect,"select eventId from students where studentId = '$roll';");
	while($row=mysqli_fetch_assoc($query))
	{
		$event=$row['eventId'];
	}
	$arr=explode(',', $event);
}

?>

