<?php
include('auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Customer Enquiries</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->	
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>

<body>
<main>
    <?php include("admin_header.php"); ?>

    <h3 class="display-4 m-2 text-center mt-4">Current Enquiries </h3>
    <hr class="text-left w-75">

    <div class="container col-md-11 justify-content-center">
        <table id="enquiries" class="table table-hover table-responsive dt-responsive" style="width:100%;">
            <thead>
                <tr>
                    <th scope="col">Sr. No.</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Time of Enquiry</th>
                    <th scope="col">Design No</th>
                    <th scope="col">Delete Enquiry</th>
                </tr>
            </thead>


            <tbody>

                <?php

                include("../db_connect.php");
                $sql = "SELECT * from enquiry_wanow ORDER BY EnquiryTimeStamp DESC";
                $enquiry_list = $pdo->query($sql)->fetchAll();
                // now $enquiry variable has list of enquirys
                $i=1;
                foreach($enquiry_list as $enquiry){
                ?>

                <tr>
                    <td><?php echo $i; ?></td>
                    <?php $i++; ?>
                    <td><?php echo $enquiry['CustomerName']; ?></td>
                    <td><?php echo $enquiry['CustomerNumber']; ?></td>
                    <td><?php echo date('g:ia \o\n l jS F Y', strtotime($enquiry['EnquiryTimeStamp'])); ?></td>
                    <td><a href="../gallery.php#<?php echo $enquiry['ProductId']; ?>"><?php echo $enquiry['ProductId']; ?></a></td>
                    <td>
                        <?php echo
                        '<form method="post" action="del_enquiry.php">
                            <input type="hidden" name="enquiry_id" value="'.$enquiry['EnquiryId'].'">
                            <input type="hidden" name="enquiry_type" value="now">
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
</body>
</html>