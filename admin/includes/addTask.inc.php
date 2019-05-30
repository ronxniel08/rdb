<?php
	if(ISSET($_POST['btnSubmit'])){	
		$p_id = $_POST['p_id'];
		$t_name = $_POST['t_name']; 
		$status = "Not Completed";
		
		$currentDate = date("Y-m-d");

		
		
			$conn = new mysqli("localhost", "root", "", "builders");
			$conn->query("INSERT INTO `tbl_tasks` VALUES('', '$p_id', '$t_name', '$currentDate', '$status')");

				echo "<script language='javascript'>alert('Task added')</script>";
				echo "<script language='javascript'>window.location.href='../showProject.php?id=$p_id';</script>";
				exit();
		
 
	}
