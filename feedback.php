<body class="default-header-p">
	<?php 
			include"comman_nav.php";
			include "total_count.php"
			?>
	  <script src="assets/js/custom.js"></script>
    <div class="container">
    	<form action="export.php" method="POST" >
        	<button type="submit" class="ui green button" name="feedback"> Export as PDF</button>
        </form>
		<?php include "export.php";
			echo fetch_feedback();
		?>
	</div>
</body>