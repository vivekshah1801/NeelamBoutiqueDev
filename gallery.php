<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gallery</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<?php include("header.php"); 
	$layout = 2;
	?>

	

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Gallery
		</h2>
	</section>	

		
			<!-- Page Content -->
		<div class="container py-4 <?php if($layout!=1) echo "d-none";?>">

		  <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Baby Shower</h1>

		  <hr class="mt-2 mb-4">

		  <div class="row text-center text-lg-left">
			<?php for($i=1;$i<=8;$i++){?>
			<div class="col-lg-3 col-md-4 col-6">
			  <a href="#" class="d-block text-center  mb-3 h-100">
					<img class="img-fluid img-thumbnail img-fluid" style="height:300px;" src="images/events/babyshower/<?php echo "b".$i.".jpg";?>" alt="">
				  </a>
			</div>
			<?php } ?>
			
		  </div>
		  
		  <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Marriage Specials</h1>

		  <hr class="mt-2 mb-4">

		  <div class="row text-center text-lg-left">
			<?php for($i=1;$i<=8;$i++){?>
			<div class="col-lg-3 col-md-4 col-6">
			  <a href="#" class="d-block text-center  mb-3 h-100">
					<img class="img-fluid img-thumbnail img-fluid" style="height:300px;" src="images/events/marriage/<?php echo "m".$i.".jpg";?>" alt="">
				  </a>
			</div>
			<?php } ?>
			
		  </div>

		</div>
		
		
		
		
		
		<div class="container my-4 <?php if($layout!=2) echo "d-none";?>">

			<h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Marriage Specials</h1>

			<hr class="mt-2 mb-4">
			<div class="row text-center text-lg-left">
				<?php for($i=1;$i<=6;$i++){?>
				<div class="col-lg-4 col-md-6 col-6">
					<a href="#" class="d-block text-center  mb-3 h-100">
						<img class="img-fluid img-thumbnail img-fluid" style="height:300px;" src="images/events/babyshower/<?php echo "b".$i.".jpg";?>" alt="">
					</a>
				</div>
				<?php } ?>
			</div>
			
			<h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Marriage Specials</h1>

			<hr class="mt-2 mb-4">
			<div class="row text-center text-lg-left">
				<?php for($i=1;$i<=6;$i++){?>
				<div class="col-lg-4 col-md-6 col-6">
					<a href="#" class="d-block text-center  mb-3 h-100">
						<img class="img-fluid img-thumbnail img-fluid" style="height:300px;" src="images/events/marriage/<?php echo "m".$i.".jpg";?>" alt="">
					</a>
				</div>
				<?php } ?>
			</div>
		</div>
		<!-- /.container -->
	
	
		

	<!-- Footer -->
	<?php include("footer.php"); ?>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	
	<script src="js/main.js"></script>
</body>
</html>