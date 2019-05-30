<?php
	if(ISSET($_POST['btnSubmit'])){	
		$id = $_POST['id'];
		$conn = new mysqli("localhost", "root", "", "builders");
		$conn->query("UPDATE `tbl_request` SET seen='Yes' WHERE id='$id'");
		echo "<script language='javascript'>window.location.href='../index.php';</script>";
				exit();
		
 
	}elseif (ISSET($_POST['btnApproved'])){	
		$id = $_POST['id'];
		$conn = new mysqli("localhost", "root", "", "builders");
		$conn->query("UPDATE `tbl_request` SET seen='Yes', status='Approved' WHERE id='$id'");
		echo "<script language='javascript'>alert('Request has benn Approved!')</script>";
		echo "<script language='javascript'>window.location.href='../index.php';</script>";
				exit();

	}
