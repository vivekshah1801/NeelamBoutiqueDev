<?php include('auth.php'); ?>

<?php

	//if authorized user directly accesses this poge
	if(empty($_POST["ProductDesignId"]) || empty($_POST["ProductName"]) || empty($_POST["ProductCategory"]))
	{
		header("Location:addproduct.php?msg=product_empty");
		die();
	}

    $file_name = $_FILES['photo_link']['name'];
    $file_size =$_FILES['photo_link']['size'];

	echo $file_size;

    try{
    $file_tmp =$_FILES['photo_link']['tmp_name'];
    $file_type=$_FILES['photo_link']['type'];

	$temp_1 = explode('.',$file_name);
    $file_ext=strtolower(end($temp_1));

    $extensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions)=== false){
    	header("Location:addproduct.php?msg=error_photo");
		die();
    }


	include('../db_connect.php');
    $product_id = $pdo->query("SELECT MAX(Id) FROM product")->fetchColumn();
    if ($product_id == NULL)
        $product_id = 0;
	$product_id = (int)$product_id + 1;

    echo $product_id;
    
    $photo_link = "images/products/".$product_id.".".$file_ext;

    
	//appending ../ for moving to parent sibiling folder
	move_uploaded_file($file_tmp,"../".$photo_link);
    }
    catch (exception $e) {
    echo $e->getMessage();
}
finally{
    echo "helli";
}

    $ProductDesignId=$_POST["ProductDesignId"];
    $ProductName=$_POST["ProductName"];
    $ProdCategory=$_POST["ProductCategory"];
    $ProductImageLink=$photo_link;
    $ProductAddedOn=$date = date('Y-m-d H:i:s');
    $isTrending=$_POST["isTrending"];
  
    $stmt = $pdo->prepare("INSERT INTO product (ProductDesignId,ProductName,ProductCategory,ProductDescription,ProductImageLink,ProductAddedOn,isTrending) VALUES (:ProductDesignId,:ProductName,:ProductCategory,:ProductDescription,:ProductImageLink,:ProductAddedOn,:isTrending)");

    $stmt->bindParam(':ProductDesignId',$ProductDesignId);
    $stmt->bindParam(':ProductName',$ProductName);
    $stmt->bindParam(':ProductCategory',$ProdCategory);
    $stmt->bindParam(':ProductDescription',$_POST['ProductDescription']);
    $stmt->bindParam(':ProductImageLink',$ProductImageLink);
    $stmt->bindParam(':ProductAddedOn',$ProductAddedOn);
    $stmt->bindParam(':isTrending',$isTrending);
    $stmt->execute();
    echo "Product added";
    header("Location:google.com");

    
    $pdo=null;
	

	header("Location:addproduct.php?msg=success");
	die();

	$pdo = null;

?>
