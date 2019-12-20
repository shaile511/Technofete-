
<?php

session_start();
include"connection.php";
if($connect)
{
	if(isset($_POST['send'])){
		$sql = "insert into feedback(name,email,subject,message) values(?,?,?,?)";
		$stmt =  $connect->prepare($sql);
		$stmt->bind_param("ssss",$_POST['name'],$_POST['email'],$_POST['sub'],$_POST['msg']);
		$stmt->execute();
		$stmt->close();
		header('Location: index.php');
	}
}
else{
      $_SESSION['valid']="false";
}

?>