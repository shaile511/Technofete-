<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<?php
include "connection.php";

$query=mysqli_query($connect,"select * from userinfo");
$event=2;
$hai="";
$id="";
$name="";
$roll="";
$hello="<table style='width:100%'>
  <tr><th>Firstname</th>
    <th>Lastname</th> </tr>";
while($result=mysqli_fetch_assoc($query))
	{
		$row=$result['event'];
		$arr=explode(',', $row);		
		if(in_array($event, $arr)) 
		{
             // echo "----true";
              $id=$result['roll_no'];
              if($hai=="")
				{
					$hai=$id;
				$user=mysqli_query($connect,"select * from userinfo where roll_no='$id'");
					while($row=mysqli_fetch_assoc($user))
					{
							$roll=$row['roll_no'];
							$name=$row['pass'];
					}
					$hello=$hello."<tr><td>".$roll."</td><td>".$name."</td></tr>";

				}
				else
				{
					$hai=$hai.",".$id;
					$user=mysqli_query($connect,"select * from userinfo where roll_no='$id'");
					while($row1=mysqli_fetch_assoc($user))
					{
							$roll=$row1['roll_no'];
							$name=$row1['pass'];
					}
					$hello=$hello."<tr><td>".$roll."</td><td>".$name."</td></tr>";
				}
		}
		
		
	}
	$hello=$hello."</table>";
	//$hello=$hello."</"

	//echo "the final answer is....".$hello;
	echo $hello;


?>