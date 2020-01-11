<?php include('auth.php'); ?>

<?php

	//if authorized user directly accesses this poge
	if(empty($_POST["product_id"]))
	{
		header("Location:manageproducts.php?msg=product_empty");
		die();
	}


	$product = $_POST['product_id'];
	
	include('../db_connect.php');

   
    $stmt=$pdo->prepare("DELETE FROM product WHERE Id = ?");
    
    if($stmt->execute([$product])){
		$pdo = null;
		header("Location:manageproducts.php?msg=del");
		die();
	}

	header("Location:manageproducts.php?msg=error");

	$pdo = null;

?>