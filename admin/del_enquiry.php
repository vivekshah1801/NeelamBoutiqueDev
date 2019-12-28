<?php include('auth.php'); ?>

<?php

	//if authorized user directly accesses this poge
	if(empty($_POST["enquiry_id"]))
	{
		header("Location:dashboard.php?msg=event_empty");
		die();
	}


	$enquiry_id = $_POST['enquiry_id'];
	$enquiry_type = $_POST['enquiry_type'];

	include('db_connect.php');

    if($enquiry_type=="now")
        $stmt=$pdo->prepare("DELETE FROM enquiry_wanow WHERE EnquiryId = ?");
    else   
        $stmt=$pdo->prepare("DELETE FROM enquiry_walater WHERE EnquiryId = ?");
    
    if($stmt->execute([$enquiry_id])){
		$pdo = null;
		header("Location:dashboard.php?msg=del&del_event=".$enquiry_id);
		die();
	}

	header("Location:dashboard.php?msg=error");

	$pdo = null;

?>