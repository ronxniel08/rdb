<?php
	if(ISSET($_POST['btnSubmit'])){	
		$p_id = $_POST['p_id'];
		$p_bleft = $_POST['p_bleft'];
		$p_expense = $_POST['p_expense'];
		$exType = $_POST['exType'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$p_id = $_POST['p_id'];
		$currentDate = date("Y-m-d");
		$Y = date("Y");
		$M = date("m");

		$newBudget = $p_bleft - $price;
		$newExpense = $p_expense + $price;
		
			$conn = new mysqli("localhost", "root", "", "builders");

			$conn->query("INSERT INTO `tbl_expenses` VALUES('', '$p_id', '$exType', '$price', '$description', '$currentDate', '$M', '$Y')");

			$conn->query("UPDATE `tbl_projects` SET p_bleft='$newBudget', p_expense='$newExpense' WHERE p_id='$p_id'");

				echo "<script language='javascript'>alert('Expense added')</script>";
				echo "<script language='javascript'>window.location.href='../showProject.php?id=$p_id';</script>";
				exit();
		
 
	}
