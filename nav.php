	<!-- header-section - start
		================================================== -->
	<header id="header-section" class="header-section sticky-header-section not-stuck clearfix" >
			<!-- header-bottom - start -->
			<div class="header-bottom">
				<div class="container">
					<div class="row" >

						<!-- site-logo-wrapper - start -->
						<div class="col-lg-3" >
				
                            <div class="logo" >
        <!--  <a href="index.html"><img src="images/one.png" alt="logo"></a>-->
            <span style="color:#fa932c; font-size:40px;"> S</span><span style="color:#3a6700;font-size:40px;">G</span><span style="color:#fa932c;font-size:40px;">S</span> <span><img style="margin-top: -10px;" src="assets/images/mcet.png" height="100px" width="100px" /></span>
                            </div>

						</div>
						<!-- site-logo-wrapper - end -->

						<!-- mainmenu-wrapper - start -->
						<div class="col-lg-9">
							<div class="mainmenu-wrapper">
								<div class="row">

									<!-- menu-item-list - start -->
									<div class="col-lg-10">
										<div class="menu-item-list ul-li clearfix">
											<ul>
												<li class="menu-item-has-children active">
													<a href="index.php">home</a>
													
												</li>	

												

		                                <?php if($var==1) : ?>
		               <li class="menu-item-has-children"><a href='event-2.php'>event registration </a></li>
		                <li class="menu-item-has-children"><a href='booking.php'> registered events </a></li>
		                           <li class="menu-item-has-children"><a href='login/logout.php'>Logout</a></li>
		                                 <?php endif; ?>
												<?php if($var!=1) : ?>	
													<li class="menu-item-has-children">
														<a href="login/login.php">login</a>
													</li>
													<li class="menu-item-has-children">
														<a href="login/register.php">Register</a>
													</li>
													<li>
														<a href="event-2.php">
															events
														</a>
						                            </li>
												<?php endif; ?>
											
												
                                                
											</ul>
										</div>
									</div>
									<!-- menu-item-list - end -->

									<!-- menu-item-list - start -->
									<div class="col-lg-2">
										<div class="user-search-btn-group ul-li clearfix">
											<ul>
												<li>
													<button  class="toggle-overlay search-btn">
														<i class="fas fa-user"></i>
													</button>
													<!-- search-body - start -->
													
													<!-- search-body - end -->
												</li>
												<li>
													<button  class="toggle-overlay search-btn">
														<i class="fas fa-search"></i>
													</button>
													<!-- search-body - start -->
													
													<!-- search-body - end -->
												</li>
                                                
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
						<div class="logo" >
        <!--  <a href="index.html"><img src="images/one.png" alt="logo"></a>-->
            <span style="color:#fa932c; font-size:30px;"> S</span><span style="color:#3a6700;font-size:30px;">G</span><span style="color:#fa932c;font-size:30px;">S</span>
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

					<div class="sidebar-header">
						<a href="index-1.php">
							<img src="assets/images/logo%20copy.png" alt="logo_not_found">
						</a>
					</div>

					

					<!-- main-pages-links - start -->
					<div class="menu-link-list main-pages-links">
						
						<ul>
							<li class="active">
								<a href="index.php">
									<span class="icon"><i class="fas fa-home"></i></span>
									Home
								</a>
							</li>

				      <?php if(($var)) : ?>  
                            <li>
								<a href="event-2.php">
									<span class="icon"><i class="fas fa-registered"></i></span>
									event registeration
								</a>
                            </li>
                            <li>
								<a href="booking.php">
									<span class="icon"><i class="fas fa-registered"></i></span>
									registered events
								</a>
                            </li>
                         <?php endif; ?>	
                            
                     <?php if(!($var)) : ?>                         
							<li >
								<a href="login/login.php">
									<span class="icon"><i class="fas fa-user"></i></span>
									Login
								</a>
							</li>
							<li>
								<a href="login/register.php">
									<span class="icon"><i class="fas fa-registered"></i></span>
									Register
								</a>
							</li>

				      <?php endif; ?>	
							
							
						</ul>
					</div>
					
					
						<?php if($view) : ?>
                           
							 <?php endif; ?>
					<!-- other-pages-links - end 
							
					<div class="menu-link-list other-pages-links">-->
                            <?php if(($var)) : ?>
                            <li>
								<a href="login/logout.php">
									<span class="icon"><i class="fas fa-sign-out"></i></span>
									&nbsp;&nbsp;Log out
								</a>
							</li>

						     <?php endif; ?>
						</ul>
				</div>
                    

					<!-- social-links - start -->
					<!-- <div class="social-links">
						<h2 class="menu-title">get in touch</h2>
						<div class="mb-15">
							<h3 class="contact-info">
								<i class="fas fa-phone"></i>
								9894013524
							</h3>
							<h3 class="contact-info">
								<i class="fas fa-envelope"></i>
								sgs@drmcet.ac.in
							</h3>
						</div> -->
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
						</ul>
						
					<!-- </div> -->
					<!-- social-links - end -->

					<div class="overlay"></div>
				</div>
			</div>
			<!-- sidebar menu - end -->
		</div>
		<!-- altranative-header - end
		================================================== -->


