<?php
$rm=$_POST['id'];
include "event_all.php";
$arr=array_diff($arr, array($rm));
$new=implode(',', $arr);
$query=mysqli_query($connect,"update students set eventId='$new' where studentId='$roll';");

?>