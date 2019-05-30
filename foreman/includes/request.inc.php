<?php
	if(ISSET($_POST['btnSubmit'])){	
		$foreman = $_POST['foreman']; 
		$project = $_POST['project']; 
		$type = $_POST['type'];
		$description = $_POST['description'];
		$currentDate = date("Y-m-d");
		$status = "Pending";
		$seen = "No";
		$p_name = $_POST['p_name']; 
		$p_address = $_POST['p_address']; 
		$fullname = $_POST['fullname']; 
		
		$notification = $p_name.' Requested'.$type.' '.$description.' for'.$p_name.' at'.$p_address;
		$conn = new mysqli("localhost", "root", "", "builders");
		$conn->query("INSERT INTO `tbl_request` VALUES('', '$foreman', '$project', '$type', '$description', '$currentDate', '$status', '$seen')");
		$conn->query("INSERT INTO `tbl_notify` VALUES('', '$currentDate', '$notification', '$seen','NA', '$foreman', 'Foreman Request')");

				echo "<script language='javascript'>alert('New Request added')</script>";
				echo "<script language='javascript'>window.location.href='../index.php';</script>";
				exit();

 
	}
