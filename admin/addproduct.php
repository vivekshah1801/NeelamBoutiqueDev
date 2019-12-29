<?php
include('auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->	
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>

<body>
<main>
    <?php include("admin_header.php"); ?>

    <h3 class="display-4 m-2 text-center mt-4">Add Product</h3>
    <hr class="text-left w-75">

    <div id="notification">
        <?php
            if(isset($_GET['msg']))
            {
                if($_GET['msg']=="success")
                {
                    echo '<div class="alert alert-success text-center">
                    <strong>Success!</strong> Event added successfully.
                    </div>';
                }
                else if($_GET['msg']=="updated")
                {
                    echo '<div class="alert alert-success text-center">
                    <strong>Success!</strong> Event updated successfully.
                    </div>';
                }
                else if($_GET['msg']=="error")
                {
                    echo '<div class="alert alert-danger text-center">
                    <strong>Oops!</strong> An error occured while adding event to database. Contact admin.
                    </div>';
                }
                else if($_GET['msg']=="event_empty")
                {
                    echo '<div class="alert alert-warning text-center">
                    <strong>Hello,</strong> Please fill the event form first.
                    </div>';
                }
                else if($_GET['msg']=="error_photo")
                {
                    echo '<div class="alert alert-danger text-center">
                    <strong>Oops!</strong> Error uploading photo for the event. Contact admin or try uploading again.
                    </div>';
                }
            }
        ?>
    </div>

    <div class="container col-md-11 justify-content-center">
        <form class="container site-section mt-4 mb-5" method="post" action="addproduct_db.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="ProductDesignId">Product Design Id</label>
                <input type="number" class="form-control" id="ProductDesignId" placeholder="Product Design No" name="ProductDesignId" required>
            </div>
            
            <div class="form-group">
                <label for="ProductName	">Product Name</label>
                <input type="text" class="form-control" id="ProductName" placeholder="Product Name" name="ProductName" required>
            </div>

            <div class="form-group">
                <label for="ProductCategory">Product Category</label>
                <select class="form-control" id="ProductCategory" placeholder="Product Category" name="ProductCategory" required>
                    <option value="Kurti">Kurtis</option>
                    <option value="choli">Choli</option>
                    <option value="bridal">Bridal</option>
                    <option value="indo-western">Indo-Western</option>
                </select>
            </div>

            <label for="event_photo">Product Photo Upload</label>
            <div class="upload-options">
                <label>
                    <input type="file" class="image-upload" accept="image/*" name="ProductImage " required/>
                </label>
            </div>            

            <button type="submit" class="btn btn-primary btn-block mt-2">Add The Product</button>
        </form>
    </div>
</main>
</body>
</html>