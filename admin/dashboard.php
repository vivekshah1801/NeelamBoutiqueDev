<?php
include('auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Dashboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->	
</head>
<body>
<main>
    <div class="container mx-auto">
        <h1 class="display-4 mt-2 text-center mb-4"> Admin Login </h1>
        <div class="container col-md-10">
            <div class="card">
                <div class="card-group">
                    <div class="card"><img class="card-img-top w-100 d-block">
                        <div class="card-body">
                            <h5 class="card-title">Manage Products</h5>
                            <p class="card-text">Manage custom products Here</p><a href="manageproducts.php"><button class="btn btn-primary" type="button">Manage Your Products</button></a>
                        </div>
                    </div>
                    <div class="card"><img class="card-img-top w-100 d-block">
                        <div class="card-body">
                            <h5 class="card-title">Customer Enquiries</h5>
                            <p class="card-text">Customer Enquiries Here</p><a href="enquiries.php"><button class="btn btn-primary" type="button">Manage Customer Enquiries</button></a>
                        </div>
                    </div>
                    <div class="card"><img class="card-img-top w-100 d-block">
                        <div class="card-body">
                            <h5 class="card-title">Scheduled Requests</h5>
                            <p class="card-text">Scheduled Requests Here</p><a href="scheduled_enquiries.php"><button class="btn btn-primary" type="button">Scheduled Requests</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
</body>
</html>