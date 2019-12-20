<?php
session_start();?>
<?php
include"../header_tag.html";
include"../header_log.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>SGS | Techsym </title>

<link href="assets/css/bootstrap.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="assets/css/animate.min.css">

<link rel="stylesheet" href="assets/css/ripple.min.css">

<link rel="stylesheet" href="assets/css/hover.css">

<link rel="stylesheet" href="assets/css/social-buttons.css">

<link href="assets/css/deluxe-admin.css" rel="stylesheet">


<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url("../assets/images/tech.png");
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

</style>



<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="default-header-p" >
	
<article>
<div id="pages-form" class="container animated fadeIn">
<section>
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="panel box-shadow">
<div class="panel-body center-block">
<div class="pages-header text-center">
<div class="pages-box-icon"><i class="zmdi zmdi-account-o"></i></div>
<h4>Login to your account</h4>
</div>
<form class="ui form segment" style="font-size: 18px;" method="post" action="index.php">
<fieldset>
<div class="form-group">
<input class="form-control" placeholder="UserName" name="uname"  required autofocus>
</div>
<div class="form-group">
<input class="form-control" placeholder="Password" name="pass" type="password" value="" required>
</div>
<div class="row pages-padbot">
	<?php if(isset($_SESSION['msg'])) : ?>
<div class="col-sm-6 text-right">
<p style="color: red;"><?=$_SESSION['msg']?></p>
<?php unset($_SESSION['msg']); ?>
</div><br>	
<?php endif; ?>
	
	<a onclick="forgot()"title="Forgot password?" id="for">Forgot password?</a>
	
</div>

<button class="btn btn-success btn-block" name="submit" type="submit" id="log">Login</button>
<div class="ui horizontal divider">or</div>
<p class="text-center pages-padtop"><span>Don't have an account?</span> <span><a href="register.php" id="reg">Register now</a>.</span></p>

</fieldset>
</form>
</div>
</div>
</div>
</div>
</section>
</div>
</article>

<script type="text/javascript">
	function forgot(){ 
	  (async () => {

		const { value: email } = await Swal.fire({
		  title: 'Input email address',
		  input: 'email',
		  inputPlaceholder: 'Enter your email address'
		})

		if (email) {
			document.getElementById("for").innerHTML = "sending mail please wait.....";
			document.getElementById("log").disabled = true;
			document.getElementById("reg").disabled = true;
			$.ajax({
		              url:"hello.php",
		              type:"post",
		              data:{email:email},
		              success:function(data,status)
		              { var res = $.trim(data);
		              	if(res=='1'){
		              		Swal.fire({
		                    position: 'center',
		                    type: 'success',
		                    title: 'Mail sended successflly!!',
		                    text: "User name and password send to your mail",
		                    showConfirmButton: true
		                  });
		              		

		              	}
		              	else{
		              		Swal.fire({
		                    position: 'center',
		                    type: 'error',
		                    title: 'Mail ID not Register',
		                    text: "please try again",
		                    showConfirmButton: true
		                  });

		              	}
		              	document.getElementById("for").innerHTML = "Forgot password?";
						document.getElementById("log").disabled = false;
						document.getElementById("reg").disabled = false;
		              }
		          });
		}

		})()
	  
		
	}
</script>
<script src="assets/js/jquery-2.2.4.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/ripple.min.js"></script>

<script src="http://themeluxury.com/preview/deluxe/assets/js/pages.js"></script>
</body>
</html>
