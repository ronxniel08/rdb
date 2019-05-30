<?php
	if(ISSET($_POST['btnSubmit'])){	
		$p_id = $_POST['p_id'];
		$p_name = $_POST['p_name']; 
		$p_expense = $_POST['p_expense']; 
		$p_budget = $_POST['p_budget']; 
		$new_date = $_POST['new_date'];
		$amount = $_POST['amount']; 
		
		$month = date("M");
		$year = date("Y");
		

		$currentDate = date("Y-m-d");
		$start = strtotime("$currentDate");
		$end = strtotime("$new_date");
		$days = ($end - $start)/60/60/24;

		$total = "";
		$newBudget = "";
		$newExpense= "";
		$e_type = "Penalty Expense";
		$description = "Adjusted the End Date to".$new_date;

		if (empty($amount)) {
			echo "<script language='javascript'>alert('Please Check the Amount')</script>";
			exit();
		}elseif (empty($new_date)) {
			echo "<script language='javascript'>alert('Please Check New End Date')</script>";
			exit();
		}else{
			$total = $amount*$days;
			$newBudget = $p_budget - $total;
			$newExpense = $p_expense + $total;
			
			$conn = new mysqli("localhost", "root", "", "builders");

			$conn->query("UPDATE `tbl_projects` SET p_bleft='$newBudget',p_end ='$new_date', p_expense='$newExpense' WHERE p_id='$p_id'");
			$conn->query("INSERT INTO `tbl_expenses` VALUES('', '$p_id', '$e_type', '$total', '$description', '$currentDate', '$month', '$year')");

			$conn->query("INSERT INTO `tbl_project_penalties` VALUES('', '$p_id', '$p_name', '$days', '$total', '$currentDate')");
			echo "<script language='javascript'>alert('Added Days')</script>";
			echo "<script language='javascript'>window.location.href='show.inc.php?id=$p_id';</script>";


			exit();
		}



		
			// $conn = new mysqli("localhost", "root", "", "builders");
			// $conn->query("INSERT INTO `tbl_tasks` VALUES('', '$p_id', '$p_name', '$pen_days', '$status')");

			// 	echo "<script language='javascript'>alert('Record added')</script>";
			// 	echo "<script language='javascript'>window.location.href='../showProject.php?id=$p_id';</script>";
			// 	exit();
		
 
	}
