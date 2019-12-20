<?php
    include"header_tag.html"; 
     include "event_all.php";
      $d=$_POST['id'];
    $var=$_SESSION['log'];
    $query=mysqli_query($connect,"select * from events where id= '$d';");
    while ($row=mysqli_fetch_assoc($query)) {
		$assoc=$row['association_name'];
		$dept=$row['dept_name'];
		$event=$row['event_name'];
    	$img=$row['event_img'];
    	$max=$row['team'];
    	$sd = $row['start_time'];
    	$ed = $row['end_time'];
    	$date=$sd." to ".$ed;
    	$short = $row['short_desc'];
    	$long=$row['long_desc'];
    	$location=$row['location'];
    	$rules=$row['rules'];
    	$incharge=$row['incharge1_name'];
    	$mobile=$row['incharge1_mob'];
		$incharge1=$row['incharge2_name'];
    	$mobile1=$row['incharge2_mob'];
    	$price = $row['price'];
    }
    
function rem_date($date){
    	$date_time = explode (" ", $date);
    	return $date_time[1].''.$date_time[2];
    }
    if(isset($_SESSION['roll'])){
		$roll_no=$_SESSION['roll'];
		$sql="select * from students where studentId = '$roll_no';";
	}
	else $sql="select * from students;";
	$res = mysqli_query($connect,$sql);
	$row=mysqli_fetch_assoc($res);
	$n=mysqli_num_rows($res);
	$event_id=$row['eventId'];
		$arr1=explode(',', $event_id);
		$i = 0;
		$sd1="";
		$ed1="";
		$eve_name="";
		foreach($arr1 as $x) {
			if($x!='')
	{
		  	$query=mysqli_query($connect,"select event_name,start_time as sd, end_time as ed from events where id = $x;");
		  	$row=mysqli_fetch_assoc($query);
		  	if($i==0){
			  	$sd1 =$row['sd']; 
				$ed1= $row['ed'];
				$eve_name= $row['event_name'];
		  	}
			$sd1 =$sd1.",".$row['sd']; 
			$ed1=$ed1.",".$row['ed'];
			$eve_name= $eve_name.",".$row['event_name'];
			$i+=1;
		}}
	$len = sizeof($arr1);
?>
<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
<style type="text/css">
	body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
}
</style>
<style type="text/css">
	.event-title{
		text-align: justify;
		 text-justify: inter-word;
	}
	.event-title p{
		padding-left: 30px;
		text-indent: 50px; 
		font-size: 18px;
	}
	.event-title .tag-item{
		font-size: 20px;
	}
	.event-title ul li b{
		margin-right: 20px; 
	}
</style>
<body style="background-color: black;">

		<div id="thetop" class="thetop"></div>
		<div class='backtotop'>
			<a href="event-details.html#thetop" class='scroll'>
				<i class="fas fa-angle-double-up"></i>
			</a>
		</div>
		<!-- backtotop - end -->
		<div class="preloader"></div>


<!-- to include the common navigation in the all the html page --->
			<?php 
			 include"comman_nav.php";
			?>
<!-- the end -->
		

		<section id="event-details-section" class="event-details-section sec-ptb-100 clearfix">
			<div class="container">
				<div class="row">

					<!-- col - event-details - start -->
					<div class="col-lg-12 col-md-12 col-sm-12" style="background-color: white;padding: 30px;">

						<!-- event-details - start -->
						<div class="event-details mb-80">

							<div class="mb-30">
								<span class="tag-item" style="color: blue;">
									<i class="fas fa-bookmark"></i>
								<?=$assoc?></span>
								<h2> <?=$dept?> <strong>&nbsp; <?=$event?></strong></h2>
							</div>
							<?php if($price!='0'):?>
								<section>
									<center>
										<div class="ui statistic" style="color: #fff; ">
										  <div class="label">
										    <i class="gift icon"></i>Price Amount
										  </div>
										  <div class="value">
										    <i class="rupee sign icon"></i><?=$price?>
										  </div>
										</div>
									</center>
								</section>
							<?php endif;?>
							<div class="event-info-list ul-li clearfix mb-50">
								<ul>
									
									<li>
										<span class="icon">
											<i class="far fa-clock"></i>
										</span>
										<div class="event-content">
											<small class="event-title">Event Time</small>
											<h3 class="event-date"><?=$date?></h3>
										</div>
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-map-marker-alt"></i>
										</span>
										<div class="event-content">
											<small class="event-title">Event Location</small>
											<h3 class="event-date"><?=$location?></h3>
										</div>
									</li>
                                    <li>
										<span class="icon">
											<i class="fas fa-user"></i>
										</span>
										<div class="event-content">
											<small class="event-title">Heads Per Team</small>
											<h3 class="event-date">Max <?=$max?></h3>
										</div>
									</li>
								</ul>
							</div>
							
							<div class="container">
	                            <div class="event-title mb-30">
									<h2 class="tag-item">
										Description:
									</h2>

									<p> <?=$short?></p>
									<?php if($short!=$long):?>
			                            <ul class="black-color m-0" style="font-size: 18px;">
			                              <?=$long?>  
			                            </ul>
			                        <?php endif;?>
								</div>
							</div>
                           
						</div>
						<!-- event-details - end -->
						<?php if($d != 30): ?>
							<center>
								<?php if(($_SESSION['log'])): ?>
				    				<?php if(!in_array($d, $arr)) : ?>
										<?php	echo '<button onclick="regevent('.$d.')" class="custom-btn">
													Register
												</button>';
												?>
									<?php endif; ?>
									<?php if(in_array($d, $arr)) : ?>
												<?php	echo '<button onclick="deleteevent('.$d.')" class="custom-btn">
													remove
												</button>';
												?>								
									<?php endif; ?>
								<?php endif; ?>
								<?php if(!($_SESSION['log'])): ?>				
										<?php	echo '<a href="login/login.php"><button class="custom-btn">
												Login to register
											</button></a>';	?>
								<?php endif; ?>
						  	</center>
						<?php endif; ?>

                        <br>
                        <br>
						<!-- event-schedule - start -->
						<div class="event-schedule mb-80">

							
							<!-- schedule-wrapper - start -->
							<div class="schedule-wrapper">
								
								<div class="tab-content">
									<!-- day 1 - start -->
									<div id="day1" class="tab-pane fade in active show">
										
										<div class="tab-content">
									

											<div id="day1hall2" class="tab-pane fade in active show">
												<div class="hall-item clearfix">
													<?php if($incharge!=""):?>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15"><strong></strong>&nbsp;&nbsp;Incharge1</h3>
														
                                                       
														<div class="event-info-list ul-li clearfix">
															<ul>
															<?php if($incharge!=""):?>
																<li>
																	<span class="icon">
																		<i class="fas fa-user"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Name</small>
																		<h3 class="event-date"> <?=$incharge?> </h3>
																	</div>
																</li>
																<?php endif; ?>
																<?php if($mobile!=""):?>
																<li>
																	<span class="icon">
																		<i class="fas fa-phone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Phone</small><br/>
                                                                        <strong><p class="mb-30 black-color"> <?= $mobile?>   </p></strong>
																	</div>
																</li>
																<?php endif; ?>
																
															</ul>
														</div>
													</div>
													<?php endif; ?>
													<br/>
													<div class="hall-content">
													<?php if($incharge1!=""):?>
														<h3 class="event-title title-large mb-15"><strong></strong>&nbsp;&nbsp;Incharge2</h3>
														
                                                       
														<div class="event-info-list ul-li clearfix">
															<ul>
															<?php if($incharge1!=""):?>
																<li>
																	<span class="icon">
																		<i class="fas fa-user"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Name</small>
																		<h3 class="event-date"> <?=$incharge1?> </h3>
																	</div>
																</li>
																<?php endif; ?>
																<?php if($mobile1!=""):?>
																<li>
																	<span class="icon">
																		<i class="fas fa-phone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Phone</small><br/>
                                                                        <strong><p class="mb-30 black-color"> <?= $mobile1?>   </p></strong>
																	</div>
																</li>
																<?php endif; ?>
																
															</ul>
														</div>
													</div>
													<?php endif;?>
												</div>
												
                                               
                                                
											</div>

											
											<div id="day1hall4" class="tab-pane fade">
												
												
											</div>
										</div>
									</div>
									<!-- day 1 - end -->

									
									
								</div>
							</div>
							<!-- schedule-wrapper - end -->

						</div>
						<!-- event-schedule - end -->

					</div>
					<!-- col - event-details - end -->
				</div>
			</div>
		</section>
		<!-- event-details-section - end
		================================================== -->
</body>




		










		<!-- fraimwork - jquery include -->
		<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- carousel jquery include -->
		<script src="assets/js/slick.min.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>

		<!-- map jquery include -->
		<script src="assets/js/gmap3.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>

		<!-- calendar jquery include -->
		<script src="assets/js/atc.min.js"></script>

		<!-- others jquery include -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<script src="assets/js/jarallax.min.js"></script>
		<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- gallery img loaded - jqury include -->
		<script src="assets/js/imagesloaded.pkgd.min.js"></script>

		<!-- multy count down - jqury include -->
		<script src="assets/js/jquery.countdown.js"></script>

		<!-- color panal - jqury include -->
		<script src="assets/js/style-switcher.js"></script>

		<!-- custom jquery include -->
		<script src="assets/js/custom.js"></script>
<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
		
<script type="text/javascript">
	function rem_date(date){
    	var date_time = date.split(" ");
    	return date_time[1]+''+date_time[2];

    }
	function deleteevent(dataid)
	{ 
		const swalWithBootstrapButtons = Swal.mixin({
		  customClass: {
		    confirmButton: 'btn btn-success',
		    cancelButton: 'btn btn-danger'
		  },
		  buttonsStyling: false
		});

		swalWithBootstrapButtons.fire({
		  title: 'Are you sure?',
		  text: "You want to remove this event",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonText: 'Yes, remove it!',
		  cancelButtonText: 'No, cancel!',
		  reverseButtons: true
		}).then((result) => {
		  if (result.value) {
		  	$.ajax({
				url:"event_remove.php",
				type:"post",
				data:{id:dataid},
				success:function(data,status)
				{ if(status=="success"){
					swalWithBootstrapButtons.fire(
				      'Deleted!',
				      'Your event has been deleted.',
				      'success'
				    ).then((result) => {
		  		if (result.value) {
					window.location="booking.php";}
				});
				}
				}
			});
		    
		  } else if (
		    /* Read more about handling dismissals below */
		    result.dismiss === Swal.DismissReason.cancel
		  ) {
		    swalWithBootstrapButtons.fire(
		      'Cancelled',
		      'Your Registered Event is safe :)',
		      'error'
		    );
		  }
		});
		
	}

	function regevent(dataid)
	{	var flag=0;
		var n = <?php echo $len;?>;
		var arr = "<?php echo $sd1;?>";
		var sd1 =arr.split(",");
		arr = "<?php echo $ed1;?>";
		var ed1 =arr.split(",");
		arr = "<?php echo $eve_name;?>";
		var eve = arr.split(",");
		var sd = ''+"<?php echo $sd;?>";
		var ed = ''+"<?php echo $ed;?>";
		for (var i = 0; i < n; i++) {
			if(Date.parse(sd) < Date.parse(ed1[i])||Date.parse(ed) > Date.parse(sd1[i]))
				{flag=1;
				break;}	
		}
		if(flag==1){
		Swal.fire({
		  title: 'There is another event ('+eve[i]+' at '+rem_date(sd1[i])+' to '+rem_date(ed1[i])+') during this time!',
		  text: "You want to register this event ?",
		  type: 'error',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, Register it!'
			}).then((result) => {
				    if (result.value) {
					    $.ajax({
							url:"event_reg.php",
							type:"post",
							data:{id:dataid},
							success:function(data,status)
							{	Swal.fire({
								  position: 'center',
								  type: 'success',
								  title: 'Event Successfully Registered ',
								  showConfirmButton: true
								}).then((result) => {
								  if (result.value) {
								    window.location="booking.php";								  }
								});
							}
						});
				  	}
				});
			}
		else{	Swal.fire({
				  title: 'Are you sure?',
				  text: "You want to register this event!",
				  type: 'question',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'Yes, Register it!'
				  }).then((result) => {
				    if (result.value) {
					    $.ajax({
							url:"event_reg.php",
							type:"post",
							data:{id:dataid},
							success:function(data,status)
							{	
								Swal.fire({
								  position: 'center',
								  type: 'success',
								  title: 'Event Successfully Registered ',
								  showConfirmButton: true
								}).then((result) => {
								  if (result.value) {
								    window.location="booking.php";								  }
								});
							}
						});
					}
		  		});
	
		}
	}
</script>





	</body>
</html>