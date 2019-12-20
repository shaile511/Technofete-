<?php

include "event_all.php";
include "header_log.php";
include"header_tag.html"; 
	if(!isset($_SESSION))
    	session_start();
if(isset($_GET['name']))
	$name_event = "".$_GET['name'];
else $name_event = "Events";
if(isset($_GET['dept']))
	$id= $_GET['dept'];
else $id = 0;
	$cat = $_GET['cat']; ?>
	<div class="preloader"></div>
	<?php 
			include"comman_nav.php";
			?>


			
<body class="default-header-p" style="background-color: black;">
	<section id="event-search-section" class="event-search-section clearfix" style="background-image: url('assets/images/special-offer-bg.png');">
            <center> <h2 style="color: aliceblue;font-size:40px"><strong><?=$name_event?></strong></h2></center>
	</section>
		<!-- event-section - start
		================================================== -->
		<section id="event-section" class="event-section sec-ptb-100 clearfix">
			<div class="container">
				<div class="row">
					<?php 

							if($id==0)
								$query=mysqli_query($connect,"select * from events where category='$cat';");
							else
								$query=mysqli_query($connect,"select * from events where category='$cat' and dept_id='$id';");
							$rows=mysqli_num_rows($query);

							if($rows>0)
							{

								while($event=mysqli_fetch_assoc($query))
								{
							

					?>

					<!-- - start -->
					<div class="col-lg-12 col-md-12 col-sm-12">

						

						<div class="tab-content">
							<div id="list-style" class="tab-pane fade in active show">

								<!-- event-item - start -->
								<div class="event-list-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date"><?=$event['date']?></span>
											<small class="month"><?=$event['month']?></small>
										</div>
										<img src="<?=$event['event_img']?>" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
											<strong><?=$event['event_name']?></strong>
											</h3>
											<span class="ticket-price yellow-color"><?=$event['dept_event']?></span>
										</div>
										<p class="discription-text mb-30">
											<?=$event['short_desc']?>

										</p>
										<div class="event-info-list ul-li clearfix">
											<ul>
												<li>
													<form method="post" action="event_desc.php">
														<button type="submit" name ="id" class="tickets-details-btn" value="<?=$event['id']?>">more</button>
													</form>
												</li>
												<?php if(($_SESSION['log'])): ?>
														<?php if(!in_array($event['id'], $arr)) : ?>
													<li>
														<form method="post" action="event_desc.php">
														<button type="submit" name ="id" class="tickets-details-btn" value="<?=$event['id']?>">Register</button>
													</form>
													</li>	
													<?php endif; ?>

													<?php if(in_array($event['id'], $arr)) : ?>
													
													<li>
														<form method="post" action="event_desc.php">
														<button type="submit" name ="id" class="tickets-details-btn" value="<?=$event['id']?>">Remove</button>
													</form>
														</li>
													<?php endif; ?>

												<?php endif; ?>

											</ul>
										</div>
									</div>
									<!-- event-content - end -->

								</div>
								<!-- event-item - end -->

							</div>

							
                            
                            
						</div>

					</div>
					<!-- - end -->

					<?php

				}

			}

			?>
					
				</div>
			</div>
		</section>
		<!-- event-section - end
		================================================== -->




		

		




<!-- default-footer-section - start
		================================================== -->
		<footer id="footer-section" class="footer-section  default-footer-section clearfix">

			<!-- footer-top - start -->
			<div class="footer-top sec-ptb-100 clearfix" >
				<div class="container">
					<div class="row">

						<!-- basic-info - start -->
						<div class="col-lg-12 col-md-12 col-md-12">
							<div class="basic-info mb-50 clearfix">
								<div class="row">

									<!-- basic-info-item - start -->
										<div class="col-lg-4 col-md-6 col-sm-12" >
										<div class="basic-info-item" >
											<span class="icon" style="height:110px">
												<i class="fas fa-phone "></i>
											</span>
												<div class="info-content">
                                                	<h3>President-SGS</h3>
												<p>Thiruchelvan.D</p>
                                                	<p>+919655046444</p>
											</div>
										</div>
									</div>
									<!-- basic-info-item - end -->
								</div>
                  
							</div>
						</div>
        
						<!-- basic-info - end -->

					</div>
                    <!--second row-->
                    				
				</div>
			</div>
			<!-- footer-top - end -->

			
		</footer>
		<!-- default-footer-section - end
		================================================== -->









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


</body>	


?>