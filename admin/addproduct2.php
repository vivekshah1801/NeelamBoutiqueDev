<?php 
    include 'db_connect.php';
  
    $ProductDesignId=$_POST["ProductDesignId"];
    $ProductName=$_POST["ProductName"];
    $ProdCategory=$_POST["ProductCategory"];
    $ProductImageLink=$_POST["imglink"];
    $ProductAddedOn=$date = date('Y-m-d H:i:s');
    $isTrending=$_POST["isTrending"];
    $sql="INSERT into product values('$ProductDesignId','$ProductName','$ProdCategory','$ProductImageLink','$ProductAddedOn','$isTrending')";
   try{

    $stmt = $pdo->prepare("INSERT INTO product (ProductDesignId,ProductName,ProductCategory,ProductImageLink,ProductAddedOn,isTrending) VALUES (:ProductDesignId,:ProductName,:ProductCategory,:ProductImageLink,:ProductAddedOn,:isTrending)");

    $stmt->bindParam(':ProductDesignId',$ProductDesignId);
    $stmt->bindParam(':ProductName',$ProductName);
    $stmt->bindParam(':ProductCategory',$ProdCategory);
    $stmt->bindParam(':ProductImageLink',$ProductImageLink);
    $stmt->bindParam(':ProductAddedOn',$ProductAddedOn);
    $stmt->bindParam(':isTrending',$isTrending);
    $stmt->execute();
    echo "Product added";
   }
   catch(PDOException $e)
   {
       echo $sql."<br>".$e->getMessage();
   }
   $pdo=null;
