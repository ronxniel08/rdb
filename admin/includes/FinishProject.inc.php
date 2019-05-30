<?php
	if(ISSET($_POST['btnSubmit'])){	
		$p_id = $_POST['p_id'];
		$p_type = $_POST['p_type'];
		$p_name = $_POST['p_name'];
		$p_address = $_POST['p_address']; 
		$p_start = $_POST['p_start'];
		$currentDate = date("Y-m-d");
		$p_budget = $_POST['p_budget'];
		$p_expense = $_POST['p_expense'];
		$p_foreman = $_POST['p_foreman'];
		$p_target = $_POST['p_target'];
		$p_end = $_POST['p_end'];
				
		$remaining = $p_budget - $p_expense;
		$target = new DateTime($p_target);
		$end = new DateTime($p_end);
		$x = $target->diff($end);
		
			$conn = new mysqli("localhost", "root", "", "builders");
			if ($target<$end) {
				//With Penalty
				$penalty = "With Penalty";
				$penalty_days = $x->d;
			
			}else{
				//Without Penalty
				$penalty = "No Penalty";
				$penalty_days = "0";
			}

			if ($remaining <= 0) {
					//LOSS
						$profit = "0.00";
						$loss = $remaining;
					}else{
						$profit = $remaining;
						$loss = "0.00";
					}
			$month = date("m");
			$year = date("Y");
			$desc = $p_name.' at '.$p_address.' is finished last '.$currentDate.' '.$penalty;
			
			$conn->query("INSERT INTO `tbl_recent_project` VALUES('', '$p_name', '$p_type', '$p_address', '$p_start', '$currentDate', '$p_budget', '$p_expense', '$penalty', '$penalty_days', '$profit', '$loss')");
			$conn->query("INSERT INTO `tbl_profit_loss` VALUES('', '$remaining', '$month', '$year', '$desc', '$currentDate')");
			$conn->query("UPDATE `tbl_users` SET u_site='0' WHERE u_id='$p_foreman'");
			$conn->query("UPDATE `tbl_equipment` SET eq_location = ' 0' WHERE eq_location = $p_id");
			$conn->query("UPDATE `tbl_materials` SET m_pid='0' WHERE m_pid='$p_id'");
			$conn->query("DELETE FROM tbl_projects WHERE p_id = '$p_id'");
			$conn->query("DELETE FROM tbl_request WHERE id = '$p_foreman'");
			echo "<script language='javascript'>alert('Project Finished!')</script>";
			echo "<script language='javascript'>window.location.href='../myprojects.php';</script>";

		 	exit();
		
 
	}
