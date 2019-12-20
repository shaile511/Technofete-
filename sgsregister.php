

<?php


include"connection.php";


if(isset($_POST['reg']))
{
	$id = $_POST['dept_id'];
	$month = "March";
	$img ="assets/images/event/".$_POST['img'];
		$sql = "select * from dept where id =".$id."";
		$res = mysqli_query($connect,$sql);
		$row = mysqli_fetch_array($res);
		$dept_event = $row['name'].'-'.$_POST['eve_name'];
		$st = '09/'.$_POST['date'].'/2019'.' '.$_POST['st'].' '.$_POST['stime'];
		$et = '09/'.$_POST['date'].'/2019'.' '.$_POST['et'].' '.$_POST['etime'];
  $sql = "insert into events(category,event_name,date,month,event_img,dept_id,short_desc,start_time,end_time,location,team,long_desc,rules,incharge1_name,incharge1_mob,incharge2_name,incharge2_mob,dept_name,association_name,dept_event) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
		$stmt =  $connect->prepare($sql);
		$stmt->bind_param("ssssssssssssssssssss",$_POST['cat'],
			$_POST['eve_name'],
			$_POST['date'],
			$month,
			$img,
			$id,
			$_POST['s_des'],
			$st,
			$et,
			$_POST['loc'],
			$_POST['team'],
			$_POST['l_des'],
			$_POST['rule'],
			$_POST['in1_name'],
			$_POST['in2_name'],
			$_POST['in2_name'],
			$_POST['in2_name'],
			$row['name'],
			$row['association'],
			$dept_event
			);
		$stmt->execute();
		header('Location: reg.php');
}

?>
