<?php 
include "event_all.php";
if(!isset($_SESSION))
    	session_start();
 ?>
 <div class="preloader"></div>
	 <?php 
		include"comman_nav.php";
		?>
	
<html>
	<!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
	<body class="default-header-p" style="opacity: 1.0;height:600px;background-size: cover;background-repeat: no-repeat; background-attachment: fixed; background-image: linear-gradient(-90deg, red, yellow);">

		<style type="text/css">
			#dept .row{
				margin: 20px; 
			}
			
			#dept .row .col-lg-6 button{
				align-items: center;
				width: auto;
			}
			.card-title{
				margin-top: 0px; 
				padding-top: 0px; 
				color: white;
			}
			.col-sm-3{
				margin: auto; 
			}
			
			.card-body:hover{
				color: black;
				background-position: center;
				object-fit: contain;
				background-size: cover;
				background-image: url('assets/images/special-offer-bg.png');
				 /*rgb(253, 82, 6,0.8);*/
			}
			.card-body img{
				margin-bottom: 0px;
				padding-bottom: 0px;  
				background-color: white;
				object-fit: contain;
			}
			
		</style>
		
<center>
	<div class="welcome-image-area" data-stellar-background-ratio="0.6">
        <div id="particles-js"></div>
            <div class="display-table">
                <div class="display-table-cell">		
		
					<div class="container">
						<div class="row hint">

						    	<div class="col-sm-3" >
						    		<a href="filter.php?dept=3&cat=1">
									    <div class="card pmd-card pmd-card-dark text-center" style="background-color:transparent;">
									        <div class="card-body">
									            <img src="https://www.ssn-invente.com/static/media/eee_e-vehicles-and-hybrid-vehicles.16ca9573.svg" width="200" height="200"  title="" alt="">
									           <h2 class="card-title">Automobile</h2>
									        </div>
									    </div>
									</a>
								</div>
							
						    
						    
						    	<div class="col-sm-3" >
						    		<a href="filter.php?dept=4&cat=1">
									    <div class="card pmd-card pmd-card-dark text-center" style="background-color:transparent;">
									        <div class="card-body">
									            <img src="https://www.ssn-invente.com/static/media/CIVIL.03c305b7.svg" width="200" height="200"  title="" alt="">
									           <h2 class="card-title">Civil</h2>
									        </div>
									    </div>
									</a>
								</div>
						    
						    	<div class="col-sm-3" >
						    		<a href="filter.php?dept=5&cat=1">
									    <div class="card pmd-card pmd-card-dark text-center" style="background-color:transparent;">
									        <div class="card-body">
									            <img src="https://www.ssn-invente.com/static/media/CSE.264af2a5.svg" width="200" height="200" class="img-fluid" title="" alt="">
									           <h2 class="card-title">CSE</h2>
									        </div>
									    </div>
									</a>
								</div>

						    
						    
						    	<div class="col-sm-3" >
						    		<a href="filter.php?dept=6&cat=1">
									    <div class="card pmd-card pmd-card-dark text-center" style="background-color:transparent;">
									        <div class="card-body">
									            <img src="https://www.ssn-invente.com/static/media/ECE.eed4dff1.svg" width="200" height="200"  title="" alt="">
									           <h2 class="card-title">ECE</h2>
									        </div>
									    </div>
									</a>
								</div>
							
						    
						    	<div class="col-sm-3" >
						    		<a href="filter.php?dept=7&cat=1">
									    <div class="card pmd-card pmd-card-dark text-center" style="background-color:transparent;">
									        <div class="card-body">
									            <img src="https://www.ssn-invente.com/static/media/EEE.d7eea81c.svg" width="200" height="200"  title="" alt="">
									           <h2 class="card-title">EEE</h2>
									        </div>
									    </div>
									</a>
								</div>
							
						    
						    	<div class="col-sm-3" >
						    		<a href="filter.php?dept=8&cat=1">
									    <div class="card pmd-card pmd-card-dark text-center" style="background-color:transparent;">
									        <div class="card-body">
									            <img src="https://www.ssn-invente.com/static/media/BME.477e3253.svg" width="200" height="200"  title="" alt="">
									           <h2 class="card-title">E&I</h2>
									        </div>
									    </div>
									</a>
								</div>

								<div class="col-sm-3" >
						    		<a href="filter.php?dept=10&cat=1">
									    <div class="card pmd-card pmd-card-dark text-center" style="background-color:transparent;">
									        <div class="card-body">
									            <img src="https://www.ssn-invente.com/static/media/IT.bead96fb.svg" width="200" height="200"  title="" alt="">
									           <h2 class="card-title">IT</h2>
									        </div>
									    </div>
									</a>
								</div>
						    
						    	<div class="col-sm-3" >
						    		<a href="filter.php?dept=21&cat=1">
									    <div class="card pmd-card pmd-card-dark text-center" style="background-color:transparent;">
									        <div class="card-body">
									            <img src="https://www.ssn-invente.com/static/media/MECHANICAL.0c718273.svg" width="200" height="200"  title="" alt="">
									           <h2 class="card-title">Mechanical</h2>
									        </div>
									    </div>
									</a>
								</div>
							
						    
						    	<div class="col-sm-3" >
						    		<a href="filter.php?dept=22&cat=1">
									    <div class="card pmd-card pmd-card-dark text-center" style="background-color:transparent;">
									        <div class="card-body">
									            <img src="https://www.ssn-invente.com/static/media/bme_pcb-workshop.6a1ae2fa.svg" width="200" height="200"  title="" alt="">
									           <h2 class="card-title">Mechatronics</h2>
									        </div>
									    </div>
									</a>
								</div>

								<div class="col-sm-3" >
						    		<a href="filter.php?dept=23&cat=1">
									    <div class="card pmd-card pmd-card-dark text-center" style="background-color:transparent;">
									        <div class="card-body">
									            <img src="https://www.ssn-invente.com/static/media/it_data-analytics-workshop.d805a66c.svg" width="200" height="200"  title="" alt="">
									           <h2 class="card-title">Production</h2>
									        </div>
									    </div>
									</a>
								</div>
							
						</div>
					</div>
				</div>
			</div>
	</div>
</center>
		
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
		<!--Parallax-->
		 <script src="assets/js/jquery.stellar.min.js"></script>
	    <script src="assets/js/particles.min.js"></script>
	    <script src="assets/js/app.js"></script>


	</body>
</html>
