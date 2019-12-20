
	<?php 
	include"comman_nav.php";
			?>
			<script src="assets/js/custom.js"></script>
<body class="default-header-p">
    
    <style type="text/css">
			.p-y-2 {
			    padding-top: 28px;
			    padding-bottom: 28px;
			}
			.p-y-3 {
			    padding-top: 45px;
			    padding-bottom: 45px;
			}
			.m-b-1 {
			    margin-bottom: 18px;
			}
			.m-t-1 {
			    margin-top: 18px;
			}


            /*==========================================================
                           counter section style
            ============================================================*/

            .main_counter_area{
                background: url('assets/images/faq-sec-bg.jpg') no-repeat top center;
                background-size: cover;
                overflow: hidden;
            }
            .main_counter_area .main_counter_content .single_counter{
                background: #fa9322;
                    color: #fff;
            }
            .main_counter_area .main_counter_content .single_counter i{
                font-size:36px;
            }
	</style>
	<section id="counter" class="counter">
            <div class="main_counter_area m-b-1">
                <div class="overlay p-y-2 m-b-1">
                    <div class="container">
                        <div class="main_counter_content text-center white-text wow fadeInUp">
                            <div class="row" style="text-transform: uppercase; font-weight: bold;">
                                
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="large red calendar check icon"></i>
                                        <h2 class="statistic-counter">
                                        	<?php 
                                            include"connection.php";
                                        	$query=mysqli_query($connect,"select count(id) as total from students where eventId !='';");
											$row=mysqli_fetch_assoc($query);
											echo $row['total'];?>
                                        </h2>
                                        <p>Total Event Registration</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="large red calendar check icon"></i>
                                        <h2 class="statistic-counter">
                                        	<?php 
                                            include"connection.php";
                                        	$query=mysqli_query($connect,"select count(id) as total from students where studentId in (select roll_no from userinfo where college Not like 'M%' and college Not like 'D%' and college Not like 'P%');");
											$row=mysqli_fetch_assoc($query);
											echo $row['total'];?>
                                        </h2>
                                        <p>Other college students</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="large pink registered icon"></i>
                                        <h2 class="statistic-counter">
                                        	<?php $query=mysqli_query($connect,"select count(id) as total from students where studentId in (select roll_no from userinfo where college like 'M%' or college like 'D%' or college like 'P%')");
											$row=mysqli_fetch_assoc($query);
											echo $row['total'];?>
                                        </h2>
                                        <p>Our college Students</p>
                                    </div>
                                </div>
                               	<div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="large purple gift icon"></i>
                                      	<h2 >
                                      	<i class="large rupee sign icon" style="font-size: 20px;"></i><span  class="statistic-counter">500000</span></h2>
                                        <p>Price ammount</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <script src="assets/js/jquery.countdown.js"></script>
    <script type="text/javascript">
    	jQuery('.statistic-counter').counterUp({
            delay: 10,
            time: 2000
        });
    </script>
    <div class="container">
    	<form action="export.php" method="POST" >
        	<button type="submit" class="ui green button" name="event"> Export as PDF</button>
        </form>
		<?php include "export.php";
			echo fetch_event();
		?>
	</div>
</body>