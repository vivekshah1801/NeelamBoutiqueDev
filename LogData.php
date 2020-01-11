<?php

include('db_connect.php');

$name = $_POST['CustomerName'];
$number = $_POST['CustomerNumber'];
$productId = $_POST['product_id'];

$sql1 = "INSERT INTO enquiry_wanow (ProductId, CustomerName, CustomerNumber) VALUES ( :ProductId, :CustomerName, :CustomerNumber)";
$sql2 = "INSERT INTO enquiry_walater (ProductId, CustomerName, CustomerNumber, CustomerPrefTime, CustomerMessage) VALUES ( :ProductId, :CustomerName, :CustomerNumber, :CustomerPrefTime, :CustomerMessage)";


if( $_POST['enquiry_type'] == "later")
{
    $time = $_POST['CustomerPrefTime'];
    $query = $_POST['CustomerMessage'];
    
    $stmt = $pdo->prepare($sql2);

    $stmt->bindParam(':ProductId',$productId);
    $stmt->bindParam(':CustomerName',$name);
    $stmt->bindParam(':CustomerNumber',$number);
    $stmt->bindParam(':CustomerPrefTime',$time);
    $stmt->bindParam(':CustomerMessage',$query);
    $stmt->execute();
    $pdo=null;
    header("Location:products.php");

    die();
}
else
{
    $stmt = $pdo->prepare($sql1);

    $stmt->bindParam(':ProductId',$productId);
    $stmt->bindParam(':CustomerName',$name);
    $stmt->bindParam(':CustomerNumber',$number);
    $stmt->execute();
    $pdo=null;
    $wa = "https://api.whatsapp.com/send?phone=+919099742161&text=Hello Neelam Boutique, I am ".$name.". I want to know more about your product Id:".$productId ;
    header("Location:".$wa);
}
die();
?>