<?php
include "../connection.php";
$_SESSION['log']=0;
$pass=$_POST['pass'];
$uname=$_POST['uname'];
if(isset($_POST['submit']))
   {
       if($connect)
       {
       // echo "success";
        $insert=mysqli_query($connect,"select * from users where username='$uname' and password='$pass'");
        $fun=mysqli_num_rows($insert);
          if($fun>0)
          {
            while($row=mysqli_fetch_array($insert))
            {
              $_SESSION['view']=$row['id'];
              $h=$_SESSION['view'];
             // $_SESSION['hello']=$row[''];
            }
            

        if($_SESSION['view']==1){
          $_SESSION['log'] = 2;
          $_SESSION['name']="Admin";
          header('Location:../studentdata.php');
        }
        else
          header('Location:../index.php');
        // $insert=mysqli_query($connect,"select * from userinfo where id='$h'");
        // $row=mysqli_fetch_assoc($insert);
        //     $_SESSION['name']=$row['name'];
        //     $_SESSION['roll'] = $row['roll_no'];
        //     $_SESSION['log'] = 1;
        //     $_SESSION['msg']='';
        //     header('Location:../index.php');
        //   } 
          }          
           else
           {
            $_SESSION['log'] = 0;
            $_SESSION['msg']="invalid login *";
            header('Location:login.php');
           }
       }
   }
   //for reference...
else
{
    echo "connection error...";
}

    
?>
