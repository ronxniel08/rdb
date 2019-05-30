<?php
	if(ISSET($_POST['btnSubmit'])){	
		$e_id = $_POST['e_id'];
		$project = $_POST['project'];
		$dep = "b";
		
		$conn = new mysqli("localhost", "root", "", "builders");
		$conn->query("UPDATE `tbl_equipment` SET eq_location='$project', eq_deployment='$dep' WHERE eq_id='$e_id'");
		
		echo "<script language='javascript'>alert('Equipment Transfered')</script>";
		echo "<script language='javascript'>window.location.href='../myequipments.php';</script>";
		exit();
		
 
	}
