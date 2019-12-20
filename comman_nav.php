	<?php 
	if(!isset($_SESSION))
		session_start();
	include"header_log.php";
	include "header_tag.html";
	?>
	
	
	<header id="header-section" class="header-section default-header-section auto-hide-header clearfix" >
		

			<!-- header-bottom - start -->
			<div class="header-bottom">
				<div style="margin: 0 40px;">
					<div class="row">

						<!-- site-logo-wrapper - start -->
						<div class="col-lg-3">
				
	                        <div class="logo" >
	      						<!-- <a href="index.html"><img src="images/one.png" alt="logo"></a> -->
	        					<img style="margin-top: -10px; max-height: 50px;" src="assets/images/mcet1.png" /></span>
	                        </div>
						</div>
						<!-- site-logo-wrapper - end -->

						<!-- mainmenu-wrapper - start -->
						<div class="col-lg-9">
								<div class="mainmenu-wrapper">
									<div class="row">

										<!-- menu-item-list - start -->
										<div class="col-lg-12">
											<div class="menu-item-list ul-li clearfix">
												<ul>
													<?php if($var<=1) : ?>
													<li onclick="active(0)" name="home" class="menu-item-has-children">
														<a href="index.php">
														<i class="home icon"></i>home</a>
													</li>
													<?php endif; ?>							
													<?php if($var==2) : ?>
														<li onclick="active(0)" name="home" class="menu-item-has-children ">
							                            	<a href='studentdata.php'>
							                            	<i class="home icon"></i>Home</a>
							                            </li>
														<li onclick="active(1)" name="eve_reg" class="menu-item-has-children">
							                            	<a href='registry.php'>
							                            	<i class="folder open icon"></i>events registry</a>
							                            </li>
							                            <li onclick="active(2)" name="feed" class="menu-item-has-children">
							                            	<a href='feedback.php'>
							                            	<i class="comment alternate icon"></i>feedback </a>
							                            </li>
					                                <?php endif; ?>	
					                                <?php if($var<=1) : ?>
													<li onclick="active(3)" name="eve" class="menu-item-has-children">
															<a href="event-1.php" >
															<i class="clone outline icon"></i>Events</a>
														</li>
														<li onclick="active(4)" name="work" class="menu-item-has-children">
															<a href="filter.php?name=Workshop&cat=2">
															<i class="sign-in icon"></i>Workshop</a>
														</li>
														<li onclick="active(5)" name="hack" class="menu-item-has-children">
															<a href="filter.php?name=Hackathons&cat=3">
															<i class="sign-in icon"></i>Hackathons</a>
														</li>
													<?php endif?>
													<?php if($var==1) : ?>
							                            <li onclick="active(6)" name="reg_eve" class="menu-item-has-children">
							                            	<a href='booking.php'>
							                            	<i class="calendar check outline icon"></i>
							                            	registered events </a>
							                            </li>
													<?php endif; ?>	
					                                <?php if($var>=1) : ?>
														<li onclick="active(7)" name="logout" class="menu-item-has-children">
															<a  onclick="logout()">
															<i class="sign-out icon"></i>Log Out</a>
														</li>
														<li onclick="active(8)"  class="menu-item-has-children">
															<a href="#">
																<i class="fas fa-user" style="display: inline-block;"></i>
																<?=$name;?>
															</a>
														</li>
													<?php endif; ?>	

													<?php if($var<1) : ?>	
														<li onclick="active(9)" name="login" class="menu-item-has-children">
															<a href="login/login.php">
															<i class="sign-in icon"></i>login</a>
														</li>
														<li onclick="active(10)" name="register" class="menu-item-has-children>">
															<a href="login/register.php">
															<i class="calendar check outline icon"></i>Register</a>
														</li>
														
													<?php endif; ?>
														
												</ul>
											</div>
										</div>
										
		                                
										<!-- menu-item-list - end -->

									</div>
								</div>
						</div>
						<!-- mainmenu-wrapper - end -->
					</div>
				</div>
			</div>
			<!-- header-bottom - end -->
		</header>

		<!-- header-section - end
		================================================== -->
<!-- altranative-header - start
		================================================== -->
		<div class="header-altranative">
			<div class="container">
					<div class="logo-area float-left">
						<div class="logo" style="background-color: white;">
				          	<a href="index.php"><img style=" max-height: 50px;" src="assets/images/mcet1.png" alt="logo"  width="100px"></a> 
				            <!-- <span style="color:#fa932c; font-size:30px;"> S</span><span style="color:#3a6700;font-size:30px;">G</span><span style="color:#fa932c;font-size:30px;">S</span> -->
                        </div>
					</div>

					<button type="button" id="sidebarCollapse" class="alt-menu-btn float-right">
						<i class="fas fa-bars"></i>
					</button>
				</div>

			<!-- sidebar menu - start -->
			<div class="sidebar-menu-wrapper">
				<div id="sidebar" class="sidebar">
					<span id="sidebar-dismiss" class="sidebar-dismiss">
						<i class="fas fa-arrow-left"></i>
					</span>

					<!-- <div class="sidebar-header">
						<a href="#" style="background-color: white;">
							<img  src="assets/images/mcet1.png"  alt="logo_not_found">
						</a>
					</div> --> 

					

					
					<div class="menu-link-list main-pages-links">
						<ul>
							<?php if($var<=1) : ?>
							<li onclick="active(0)" name="home">
								<a href="index.php">
								<i class="home icon"></i>home</a>
							</li>
							<?php endif; ?>							
							<?php if($var==2) : ?>
								<li onclick="active(0)" name="home">
	                            	<a href='studentdata.php'>
	                            	<i class="home icon"></i>Home</a>
	                            </li>
								<li onclick="active(1)" name="eve_reg">
	                            	<a href='registry.php'>
	                            	<i class="folder open icon"></i>events registry</a>
	                            </li>
	                            <li onclick="active(2)" name="feed">
	                            	<a href='feedback.php'>
	                            	<i class="comment alternate icon"></i>feedback </a>
	                            </li>
                            <?php endif; ?>	
                            <?php if($var<=1) : ?>
                            <li onclick="active(3)" name="eve">
								<a href="event-1.php">
								<i class="clone outline icon"></i>Events</a>
							</li>
							<li onclick="active(4)" name="work">
								<a href="filter.php?name=Workshop&cat=2">
								<i class="sign-in icon"></i>Workshop</a>
							</li>
							<li onclick="active(5)" name="hack">
								<a href="filter.php?name=Hackathons&cat=3">
								<i class="sign-in icon"></i>Hackathons</a>
							</li>
							<?php endif; ?>	
							<?php if($var==1) : ?>
	                           <li onclick="active(6)" name="reg_eve">
	                            	<a href='booking.php'>
	                            	<i class="calendar check outline icon"></i>registered events</a>
	                            </li>
                            <?php endif; ?>	
                            <?php if($var>=1) : ?>
								<li onclick="active(7)" name="logout">
									<a onclick="logout()">
									<i class="sign-out icon"></i>Log Out</a>
								</li>
								<li onclick="active(8)"  >
									<a href="#">
									<i class="fas fa-user icon" style="display: inline-block;"></i>	
										<?=$name;?>
									</a>
								</li>
							<?php endif; ?>	
							<?php if($var<1) : ?>	
								<li onclick="active(9)" name="login">
									<a href="login/login.php" onclick="login()">
									<i class="sign-out icon"></i>login</a>
								</li>
								<li onclick="active(10)" name="register">
									<a href="login/register.php">
									<i class="calendar check outline icon"></i>Register</a>
								</li>
							<?php endif; ?>
								
						</ul>
					</div>
					
                    

					<!-- 
						<ul>
							<li>
								<a ><i class="fab fa-facebook-f"></i></a>
							</li>
							<li>
								<a ><i class="fab fa-twitter"></i></a>
							</li>
							
							<li>
								<a ><i class="fab fa-google-plus-g"></i></a>
							</li>
							<li>
								<a ><i class="fab fa-instagram"></i></a>
							</li>
						</ul> -->
						
					</div>
					<!-- social-links - end -->

					<div class="overlay"></div>
				</div>
			</div>
			<!-- sidebar menu - end -->
		</div>
		
		<script type="text/javascript">
			
			function logout(){
				Swal.fire({
				  title: 'Are you sure?',
				  text: "You want to logout?",
				  type: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'Yes, logout !'
				}).then((result) => {
				  if (result.value) {
				    Swal.fire(
				      'Logged out successfully!! !',
				      '',
				      'success'
					    ).then((result) => {
					  if (result.value) {
					    window.location="login/logout.php";
					  }
					});
				  }
				});
			}
			
			function category(n){
				$.ajax({
				url:"assign.php",
				type:"post",
				data:{dept:n},
				success:function(data,status)
				{window.location = "filter.php";}
			});
				
			}
			
		</script>
		<!-- altranative-header - end
		================================================== -->


