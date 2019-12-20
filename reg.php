
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Event</h4>
	<p class="text-center">Get started with your registration</p>
	
	
	<form action="sgsregister.php" method="post">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> Category</span>
		 </div>
        <select name="cat" class="form-control">
        	<option selected="1">Events</option>
		    <option value="2">workshop</option>
		    <option value="3">Hackathon</option>
		</select>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i>Event Name </span>
		 </div>
        <input name="eve_name" class="form-control" placeholder="Event Name" type="text">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i>Date </span>
		 </div>
        <select name="date" class="form-control">
        	<option selected="25">25</option>
		    <option value="26">26</option>
		</select>
    </div>  
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i>Select Image</span>
		 </div>
        <input name="img" class="form-control" placeholder="Event Name" type="file">
    </div><!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> Department</span>
		 </div>
        <select name="dept_id" class="form-control">
        	<option value ="1">Automobile</option>
        	<option value ="2">Civil</option>
        	<option value ="3">CSE</option>
        	<option value ="6">E&I</option>
        	<option value ="7">ELECTRONICS AND COMMUNICATION ENGINEERING</option>
        	<option value ="5">EEE</option>
        	<option value ="10">IT</option>
			<option value ="13">MECHANICAL ENGINEERING</option>
			<option value ="14">MECHATRONICS ENGINEERING</option>
		</select>
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i>Short Description </span>
		 </div>
        <textarea name="s_des" class="form-control" placeholder="Short Description" row="6" type="textArea"></textarea>
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i>Long Description </span>
		 </div>
        <textarea name="l_des" class="form-control" placeholder="Long Description" row="10" type="textArea"></textarea>
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i>Rules </span>
		 </div>
        <textarea name="rule" class="form-control" placeholder="Long Description" row="10" type="textArea"></textarea>
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i>starting time</span>
		 </div>
        <input name="st" class="form-control" placeholder="ex : h:m" type="text">
        <select name="stime" class="form-control">
        	<option value ="am">AM</option>
        	<option value ="pm">PM</option>
        </select>
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i>ending time</span>
		 </div>
        <input name="et" class="form-control" placeholder="ex : h:m" type="text">
        <select name="etime" class="form-control">
        	<option value ="am">AM</option>
        	<option value ="pm">PM</option>
        </select>
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i>location</span>
		 </div>
        <input name="loc" class="form-control" placeholder="venue" type="text">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i>Max Team Members</span>
		 </div>
        <input name="team" class="form-control" placeholder="Team Members" type="number">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i>Incharge1 Name </span>
		 </div>
        <input name="in1_name" class="form-control" placeholder="Incharge Name" type="text">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i>Incharge1 mobile </span>
		 </div>
        <input name="in2_name" class="form-control" placeholder="Mobile" type="text">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i>Incharge2 Name </span>
		 </div>
        <input name="in2_name" class="form-control" placeholder="Incharge Name" type="text">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i>Incharge1 mobile </span>
		 </div>
        <input name="in2_name" class="form-control" placeholder="Mobile" type="text">
    </div> 
     <div class="form-group input-group">
    	
        <button name="reg" value="Submit" type="submit">Submit</button>
    </div>                                                              
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>

<script type="text/javascript">	
   function addRecord(){
			//var email= $('#email').val();
			var pass= $('#pass').val();

			$.ajax({
				url:"sgsregister.php",
				type:"post",
				data:{
 					pass:pass
				},

				success:function(data,status)
				{
					//var conf=confirm("Event Successfully Registered ");
					
				}
			});

	     }
	
</script>

</body>