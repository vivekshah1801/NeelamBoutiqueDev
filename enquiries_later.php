<!DOCTYPE html>
<html lang="en">
<head>
	<title>About</title>
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
	<?php include("header.php"); ?>


    <?php

include 'db_connect.php';
$stmt = $pdo->prepare("SELECT ProductDesignId,isTrending,ProductName,ProductImageLink,ProductCategory,ProductDescription from product where Id=:id1");
$stmt->bindParam(':id1', $_GET["productId"]);
$stmt->execute();
$product = $stmt->fetchAll();
$i = 0;
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

foreach ($product as $prod) {
    $str = $prod["ProductImageLink"];
    ?>
    




	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
                <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="<?php echo $str;?>" alt="IMG">
						</div>
					</div>
				</div>
				<div class="col-md-7 col-lg-8 mt-sm-5 mt-md-0">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
                        <?php echo $prod["ProductName"]; ?> &middot; <span class="text-muted"><?php echo $prod["ProductCategory"]; ?></span>
						</h3>

						<p class="stext-113 cl6 ">
                        <?php echo $prod["ProductDescription"]; ?>
						</p>
					</div>
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md row">
                        <div class="col-md-6">

                            <label for="exampleInputEmail1" class="mt-4">Name:</label>
                            <input type="text" class="form-control" id="EnquirerName" name="CustomerName" placeholder="Ex: David Jordan">

                            <label for="exampleInputEmail1" class="mt-4">Prefered Time:</label>
                            <input type="text" class="form-control" id="EnquirerMobile" name="CustomerPrefTime"  placeholder="Ex: Tomorrow Morning, 26th Jan, etc.,">

                            <label for="exampleInputEmail1" class="mt-4">Query:</label>
                            <input type="text" class="form-control" id="EnquirerMobile" name="CustomerMessage"  placeholder="Ex: I want to know about new products">

                            <label for="exampleInputEmail1" class="mt-4">Mobile Number:</label>
                            <input type="text" class="form-control" id="EnquirerMobile" name="CustomerNumber"  placeholder="Ex: +919867511518">
                            
                            <button class='mt-4 btn w-100 btn-outline-success btn-lg' ><i class='fa fa-whatsapp fa-5px' ></i>&nbsp;&nbsp;Send Enquiries</button> 
                            
                        </div>
                        
					</div>
				</div>
			</div>
		</div>
	</section>	
	<?php
}
    ?>
		

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
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
	<script src="js/main.js"></script>
</body>
</html>