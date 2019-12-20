<?php  
if(!isset($_SESSION))
		session_start();
	?>

<?php
include"comman_nav.php";
			?>
<html>
<div class="preloader"></div>
<link rel="stylesheet" href="assets/css/responsive.css">
	<body class="default-header-p" style="  background-color: black;background-size: auto; background-repeat: no-repeat;">
		
		

		<style type="text/css">
			.countdownContainer{
				text-align: center;
				background: #ddd;
				border: 1px solid #999;
				box-shadow:  0 0 5px 3px #ccc;
			}
			table {
				width: 800px;
				height: 300px;
			}
			.info{
				font-size: 36px;
			}
		</style>
		<style type="text/css">
			
			#countdown{
				max-width: 600px;
				width: auto; 	
				height: 150px;
				text-align: center;
				background: #222;
				background-image: -webkit-linear-gradient(top, #222, #333, #333, #222); 
				background-image:    -moz-linear-gradient(top, #222, #333, #333, #222);
				background-image:     -ms-linear-gradient(top, #222, #333, #333, #222);
				background-image:      -o-linear-gradient(top, #222, #333, #333, #222);
				border: 1px solid #111;
				border-radius: 5px;
				box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.6);
				padding: 24px 0;
				position: relative;
			}

			#countdown:before{
				content:"";
				width: 8px;
				height: 65px;
				background: #444;
				background-image: -webkit-linear-gradient(top, #555, #444, #444, #555); 
				background-image:    -moz-linear-gradient(top, #555, #444, #444, #555);
				background-image:     -ms-linear-gradient(top, #555, #444, #444, #555);
				background-image:      -o-linear-gradient(top, #555, #444, #444, #555);
				border: 1px solid #111;
				border-top-left-radius: 6px;
				border-bottom-left-radius: 6px;
				display: block;
				position: absolute;
				top: 48px; left: -10px;
			}

			#countdown:after{
				content:"";
				width: 8px;
				height: 65px;
				background: #444;
				background-image: -webkit-linear-gradient(top, #555, #444, #444, #555); 
				background-image:    -moz-linear-gradient(top, #555, #444, #444, #555);
				background-image:     -ms-linear-gradient(top, #555, #444, #444, #555);
				background-image:      -o-linear-gradient(top, #555, #444, #444, #555);
				border: 1px solid #111;
				border-top-right-radius: 6px;
				border-bottom-right-radius: 6px;
				display: block;
				position: absolute;
				top: 48px; right: -10px;
			}

			#countdown #tiles{
				position: relative;
				z-index: 1;
			}

			#countdown #tiles > span{
				width: 16%;
				max-width: 92px;
				font: bold 48px 'Droid Sans', Arial, sans-serif;
				text-align: center;
				color: #111;
				background-color: #ddd;
				background-image: -webkit-linear-gradient(top, #bbb, #eee); 
				background-image:    -moz-linear-gradient(top, #bbb, #eee);
				background-image:     -ms-linear-gradient(top, #bbb, #eee);
				background-image:      -o-linear-gradient(top, #bbb, #eee);
				border-top: 1px solid #fff;
				border-radius: 3px;
				box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.7);
				margin: 0 7px;
				padding: 18px 0;
				display: inline-block;
				position: relative;
			}

			#countdown #tiles > span:before{
				content:"";
				width: 100%;
				height: 13px;
				background: #111;
				display: block;
				padding: 0 3px;
				position: absolute;
				top: 50%; left: -3px;
				z-index: -1;
			}

			#countdown #tiles > span:after{
				content:"";
				width: 100%;
				height: 1px;
				background: #eee;
				border-top: 1px solid #333;
				display: block;
				position: absolute;
				top: 48%; left: 0;
			}

			#countdown .labels{
				width: 100%;
				height: 25px;
				text-align: center;
				position: absolute;
				bottom: 4px;
			}

			#countdown .labels li{
				width: 17%;
				font: bold 15px 'Droid Sans', Arial, sans-serif;
				color: #f47321;
				text-shadow: 1px 1px 0px #000;
				text-align: center;
				text-transform: uppercase;
				display: inline-block;
			}
			.carousel-item img{
				object-fit: contain;
				max-height: 600px;
			}
		</style>
		
		<div id="thetop" class="thetop"></div>
		<div class='backtotop'>
			<a href="index.php#thetop" class='scroll'>
				<i class="fas fa-angle-double-up icon"></i>
			</a>
		</div>


		<!-- carousel -->
		<section style="margin:30px;">
			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="assets/images/tech.png" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="assets/images/spons.jpg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="assets/images/core.jpg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="assets/images/circ.jpeg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="assets/images/it.jpg" class="d-block w-100" alt="...">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</section>
		
		<!-- <section>
			<div  style="height:600px;background-size: contain;background-repeat: no-repeat; background-position: center; background-attachment: fixed; background-image: url('assets/images/tech.png');" >
		</section> -->


		<!-- timer -->
		<section id="special-offer-section" class="section  scroll-next special-offer-section clearfix" style="background-image: url('assets/images/special-offer-bg.png');">
			<div class="container">
				<div class="row">

					<div class="col-lg-9 col-md-12 col-sm-12">
						<div class="special-offer-content">
							<h2><strong>Register soon!!</strong></h2>
							<div>
								<section>
									<div id="countdown">
									  <div id='tiles'></div>
									  <div class="labels">
									    <li>Days</li>
									    <li>Hours</li>
									    <li>Mins</li>
									    <li>Secs</li>
									  </div>
									</div>	
								</section>
							</div>
					        <script type="text/javascript">
								var eventdate = new Date(2019,8,25,9, 0, 0, 0);
								var target_date= eventdate.getTime(); // set the countdown date
								var days, hours, minutes, seconds; // variables for time units

								var countdown = document.getElementById("tiles"); // get tag element

								getCountdown();

								setInterval(function () { getCountdown(); }, 1000);

								function getCountdown(){

									// find the amount of "seconds" between now and target
									var current_date = new Date().getTime();
									var seconds_left = (target_date - current_date) / 1000;

									days = pad( parseInt(seconds_left / 86400) );
									seconds_left = seconds_left % 86400;
										 
									hours = pad( parseInt(seconds_left / 3600) );
									seconds_left = seconds_left % 3600;
										  
									minutes = pad( parseInt(seconds_left / 60) );
									seconds = pad( parseInt( seconds_left % 60 ) );

									// format countdown string + set tag value
									countdown.innerHTML = "<span>" + days + "</span><span>" + hours + "</span><span>" + minutes + "</span><span>" + seconds + "</span>"; 
								}

								function pad(n) {
									return (n < 10 ? '0' : '') + n;
								}
							</script>
						</div>
					</div> 

					<div class="col-lg-3 col-md-12 col-sm-12">
						<center>
							<div class="event-makeing-btn" style="margin-top: 30%;">
							<a href="event-1.php">View Events</a>
							</div>
						</center>
					</div>
				</div>
			</div>
		</section>


		<!-- total count -->
		<section id="total" class="section scroll-next">
			<?php 
			include "total_count.php";	?>
		</section>


		<!-- guest -->
		<section style="padding-bottom: 20px;" >
			<div class="card pmd-card text-center" style="max-width: 400px;margin: auto;" >
			    <div class="card-body" style="background-color: transparent;">
			        <img src="assets/images/guest.jpeg" style="max-height: 250px; max-width: 250px;" class="rounded-circle img-fluid mb-3" title="" alt="">
			        <h2 class="card-title"  style="text-transform: uppercase;">Chief Guest</h2>
			        <p class="card-subtitle mb-3" style="text-transform: uppercase;">Sujith Kumar J</p>
			        <p >Founder & Managing Trustee – Maatram Foundation, Associate Vice President HR – Infosys</p>
			        
			    </div>
			</div>
		</section>
 		
 		<style type="text/css">
 			.spons .carousel-item img{
 				margin: auto;
 				object-fit: contain;
 				min-height: 200px;
 				max-height: 200px;
 				max-width: 500px;
 			}
 			.dimmer p{
 				text-transform: uppercase;
 				font-weight: bolder;
 				font-size: 28px;
 				color: black;
 			}
 			.dimmer h4{
 				text-transform: uppercase;
 				font-weight: bolder;
 				font-size: 18px;
 				color: black;
 			}
 			
 		</style>
		<!-- sponser -->
		<section >
			<div class="container" style="background-color: white;
		padding: 20px;">
				<div id="carouselExampleIndicators" class="carousel  slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner spons">
				    <div class="carousel-item active">
					  <img src="assets/images/sponsers/vvdn.png" class="d-block w-100" alt="...">
					  <div class="d-md-block">
					  	<center class="dimmer">
					    <p>Title Sponsor</p>
					    <h4>VVDN TECHNOLOGIE</h4>
					  </div>
					</center>
					</div>
				    <div class="carousel-item">
				      <img src="assets/images/sponsers/trains.png" class="d-block w-100" alt="...">
					  <div class="d-md-block">
					  	<center class="dimmer">
					    <p>Co-Sponsor</p>
					    <h4>TRAINING TRAINS</h4>
					  </div>
					</center>
				    </div>
				    <div class="carousel-item">
				      <img src="assets/images/sponsers/altair.png" class="d-block w-100" alt="ALTAIR">
					  <div class="d-md-block">
					  	<center class="dimmer">
					    <p>Co-Sponsor</p>
					    <h4>ALTAIR</h4>
					  </div>
					</center>
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</section>
		<!-- get in touch -->
		<section id="contact" class="section scroll-next paddsection">
		    <div class="container">
			      <div class="contact-block1" style="background-color: white; padding: 30px;">
				        <div class="row">

				          <div class="col-lg-6">
					            <div class="contact-contact">

					              <h2 class="mb-30">GET IN TOUCH</h2>
					              <address>
					              	<ul class="contact-details">
						                <li><span>NPTC - MCET Campus</span></li>
						                <li><span>Udumalai Road,Pollachi</span></li>
						                <li><span>pin : 642 003</span></li>
						                <li><span>+919655046444 </span></li>
						                <li><span><a href="mailto:sgs@drmcet.ac.in">sgs@drmcet.ac.in</a></span></li>
						              </ul>
					              </address>
					            </div>
				          </div>

				          <div class="col-lg-6">
					            <form  action="get_in_touch.php" method="POST" >
					              <div class="row">

					                <div id="sendmessage">Your message has been sent. Thank you!</div>
					                <div id="errormessage"></div>

					                <div class="col-lg-6">
					                  <div class="form-group contact-block1">
					                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
					                    <div class="validation"></div>
					                  </div>
					                </div>

					                <div class="col-lg-6">
					                  <div class="form-group">
					                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required />
					                    <div class="validation"></div>
					                  </div>
					                </div>

					                <div class="col-lg-12">
					                  <div class="form-group">
					                    <input type="text" class="form-control" name="sub" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
					                    <div class="validation"></div>
					                  </div>
					                </div>

					                <div class="col-lg-12">
					                  <div class="form-group">
					                    <textarea class="form-control" name="msg" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
					                    <div class="validation"></div>
					                  </div>
					                </div>

					                <div class="col-lg-12">
					                  <button type="submit"  name="send" class="btn" value="Send message">
					                  	Send message
					                  </button>
					                </div>

					              </div>
					            </form>
				          </div>
				        </div>
			      </div>
		    </div>
		</section>
		
		<!-- footer -->
		<div id="footer" class="text-center">
		    <div class="container">
		      <p>&copy; Copyrights SGS. All rights reserved.</p>
		      <p>For website Registration and login issues</p>
		      <P><i class="ion-social-whatsapp"></i> 9442038181</P>
		      <div class="credits">
		        
		        Designed by <a>Artist United</a>
		      </div>
			</div>
		</div>



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