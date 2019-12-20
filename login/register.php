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
<title>Register | Deluxe</title>

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
height: 100%;
font-family: 'Numans', sans-serif;
}

</style>


</head>
<body>
<article>
<div id="pages-form" class="container animated fadeIn">
<section>
<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="panel box-shadow">
<div class="panel-body center-block">
<div class="pages-header text-center">
<div class="pages-box-icon"><i class="zmdi zmdi-account-o"></i></div>
<h4>Create account</h4>
</div>
<big>
  <form class="ui form segment" style="font-size: 18px;">
  <fieldset>
    <div class="form-group col-lg-12">
      <label>User Name</label>
      <input type="text" class="form-control" name="roll" id="roll" placeholder="Username or Roll no." required autofocus>
    </div>
  <div class="form-group col-lg-6">
    <label>First name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="First name" required>
  </div>
  <div class="form-group col-lg-6">
    <label>Last name</label>
    <input type="text" name="lname" id="lname" class="form-control"  placeholder="Last name" required>
  </div>
  <div class="form-group col-lg-6">
  <label>College name</label>
  <input type="text" class="form-control" name="clg" id="clg" placeholder="College name" required>
  </div>
  <div class="form-group col-lg-6">
  <label>Mobile No.</label>
  <input type="text" name="mobile" id="mobile" class="form-control"  placeholder="Mobile No." required>
  </div>
  <div class="form-group col-lg-6">
  <label>Department</label>
  <input class="form-control" type="text" placeholder="Department" name="dept" id="dept" required >
  </div>
  <div class="form-group col-lg-6">
  <label>Year Of Study</label>
  <select class="form-control" name="year" id="year" required>
        <option value=""> Select Year Of Study</option>
        <option value="1">I</option>
        <option value="2">II</option>
        <option value="3">III</option>
        <option value="4">IV</option>
      </select>
  </div>
  <div class="form-group col-lg-12">
  <label>Email Address</label>
  <input class="form-control" placeholder="E-mail" name="email" id="email" type="email" required>
  </div>
  <div class="form-group col-lg-6">
  <label>Password</label>
  <input type="password" class="form-control" name="pass" id="pass"  placeholder="Password" required>
  </div>
  <div class="form-group col-lg-6">
  <label>Confirm Password</label>
  <input type="password" name="cpass" id="cpass" class="form-control" placeholder="Confirm Password" required>
  </div>
  

  <div class="col-sm-12">
  <div class="checkbox">
  <label>

  </label>
  </div>
  </div>

  <button class="btn btn-success btn-block" type="button" id="btn" onclick="reg()" name="register" >Register</button>
  <div class="ui horizontal divider">or</div>
  <p class="text-center pages-padtop"><span>Already an account?</span> <span><a href="login.php">Login now</a>.</span></p>

  </fieldset>
</form>
</big>



</div>
</div>
</div>
</div>
</section>
</div>
</article>
<script type="text/javascript">
  function reg(){
    
    var arr = ['roll','name','lname','clg','mobile','dept','year','email','pass','cpass'];
    var val=[];
    for (var i = 0; i < arr.length; i++) {
      val.push(document.getElementById(arr[i]).value); 

    }
    if(val[8]==val[9]){
      document.getElementById("btn").disabled = true;
      $.ajax({
              url:"connection.php",
              type:"post",
              data:{roll:val[0],name:val[1],lname:val[2],clg:val[3],mobile:val[4],dept:val[5],year:val[6],email:val[7],pass:val[8]},
              success:function(data,status)
              {  var res = $.trim(data);
                if(res=='1'){
                    Swal.fire({
                    position: 'center',
                    type: 'success',
                    title: 'Registered successfully',
                    text: "Registration ID will be send to your email",
                    showConfirmButton: true
                  }).then((result) => {
                    if (result.value) {
                      window.location="login.php";                 }
                  });
                }
                else if(res=='2'){
                  Swal.fire({
                    position: 'center',
                    type: 'error',
                    title: 'Registration Incomplete',
                    text: "Invalid E-mail ID try again!!",
                    showConfirmButton: true
                  });
                }
                else if(res=='3'){
                  Swal.fire({
                    position: 'center',
                    type: 'error',
                    title: 'Registration Incomplete',
                    text: "Email or Phone No. Already used... try again!!",
                    showConfirmButton: true
                  });}
                else if(res=='-1'){
                  Swal.fire({
                    position: 'center',
                    type: 'error',
                    title: 'Registration Incomplete',
                    text: "Username Already Exist.... try again!!",
                    showConfirmButton: true
                  });
                }
                document.getElementById("btn").disabled = false;
              }
            });

    }
    else{
      Swal.fire({
        position: 'center',
        type: 'error',
        title: 'Registration Incomplete',
        text: "Password missmatching!!",
        showConfirmButton: true
      });
    }
  }
</script>
<script src="assets/js/jquery-2.2.4.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/ripple.min.js"></script>

<script src="http://themeluxury.com/preview/deluxe/assets/js/pages.js"></script>
</body>
</html>
