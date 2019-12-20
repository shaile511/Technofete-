<?php
include "connection.php";
$event=$_POST['id'];
echo $event;
$roll_no=$_SESSION['roll'];
$sql="select * from students where studentId = '$roll_no';";
$res = mysqli_query($connect,$sql);
$n=mysqli_num_rows($res);
echo $n;
if($n==0){
	$sql = "insert into students(studentId,eventId) values(?,?)";
	$stmt =  $connect->prepare($sql);
	$stmt->bind_param("si",$roll_no,$event);
	$stmt->execute();
}
else
{	
	$row=mysqli_fetch_assoc($res);
	$query1=$row['eventId'].",".$event;
	echo $query1;
	$query=mysqli_query($connect,"update students set eventId ='$query1' where studentId='$roll_no';");
}
?>