<?php
	if(ISSET($_POST['btnSubmit'])){	
		$t_id = $_POST['t_id']; 
		$t_pid = $_POST['t_pid']; 
		$t_name = $_POST['t_name']; 
		$p_name = $_POST['p_name']; 
		$p_address = $_POST['p_address']; 
		$p_foreman = $_POST['p_foreman'];
		$currentDate = date("Y-m-d");
		$seen = "No";
		$notification = $t_name.' on'. $p_name.' at '.$p_address.' is Completed as of '.$currentDate;

		$file=$_FILES['photo']['tmp_name'];
 		move_uploaded_file($_FILES['photo']['tmp_name'],"../../photo/".$_FILES  ['photo']['name']);
 		$location=("../photo/".$_FILES['photo']['name']);
		
			$conn = new mysqli("localhost", "root", "", "builders");
			$conn->query("INSERT INTO `tbl_photo_task` VALUES('', '$t_pid', '$t_id', '$p_foreman', '$location', '$currentDate')");
			$conn->query("UPDATE `tbl_tasks` SET t_status='Completed' WHERE t_id='$t_id'");
			$conn->query("INSERT INTO `tbl_notify` VALUES('', '$currentDate', '$notification', '$seen','NA', '$p_foreman', 'Task')");

				echo "<script language='javascript'>alert('Task Completed')</script>";
				echo "<script language='javascript'>window.location.href='../index.php';</script>";
				exit();
		
 
	}
