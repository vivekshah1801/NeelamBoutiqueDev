<?php
include('auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Products</title>
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

    <h3 class="display-4 m-2 text-center mt-4">Manage Products</h3>
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
                else if($_GET['msg']=="del")
                {
                    echo '<div class="alert alert-danger text-center">
                    <strong>Done!</strong> Deleted Successfully.
                    </div>';
                }
                else if($_GET['msg']=="product_empty")
                {
                    echo '<div class="alert alert-warning text-center">
                    <strong>Hello,</strong> Event is empty.
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
        <a href="addproduct.php">
            <button class="btn btn-success btn-block mb-4 mt-4">+ Add Product</button>
        </a>
    </div>

    <div class="container col-md-11 justify-content-center">
        <table id="products" class="table table-hover table-responsive dt-responsive" style="width:100%;">
            <thead>
                <tr>
                    <th scope="col">Sr. No.</th>
                    <th scope="col">Design No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Added On</th>
                    <th scope="col">Is Trending?</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>


            <tbody>

                <?php

                include("../db_connect.php");
                $sql = "SELECT * from product ORDER BY ProductAddedOn DESC";
                $enquiry_list = $pdo->query($sql)->fetchAll();
                // now $enquiry variable has list of enquirys
                $i=1;
                foreach($enquiry_list as $enquiry){
                ?>

                <tr>
                    <td><?php echo $i; ?></td>
                    <?php $i++; ?>
                    <td><?php echo $enquiry['ProductDesignId']; ?></td>
                    <td><?php echo $enquiry['ProductName']; ?></td>
                    <td><a href="../<?php echo $enquiry['ProductImageLink']; ?>"><img src="../<?php echo $enquiry['ProductImageLink']; ?>" class="img img-responsive" style="height:100px;width:100px;"></a></td>
                    <td><?php echo date('g:ia \o\n l jS F Y', strtotime($enquiry['ProductAddedOn'])); ?></td>
                    <td><?php echo $enquiry['IsTrending']; ?></td>
                    <td>
                        <?php echo
                        '<form method="post" action="del_product.php">
                            <input type="hidden" name="product_id" value="'.$enquiry['Id'].'">
                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                        </form>';
                        ?>
                    </td>
                </tr>
                <?php
                }
                $pdo = null;
                ?>
            </tbody>
        </table>
    </div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
    $('#products').DataTable();
} );
</script>
</body>
</html>