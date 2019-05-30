<?php
	if(ISSET($_POST['btnSubmit'])){	
		$p_id = $_POST['p_id'];
		$p_bleft = $_POST['p_bleft'];
		$expense = $_POST['expense'];
		$m_name = $_POST['m_name']; 
		$m_quantity = $_POST['m_quantity'];
		$m_price = $_POST['m_price'];
		$m_description = $_POST['m_description'];
		$e_type = "Material Expense";
		$totalExpense = $m_price * $m_quantity;
		$currentDate = date("Y-m-d");
		$month = date("m");
		$year = date("Y");
		$newBudget = $p_bleft - $totalExpense;
		$newExpense = $expense + $totalExpense;

			$conn = new mysqli("localhost", "root", "", "builders");
			//material Add
			$conn->query("INSERT INTO `tbl_materials` VALUES('', '$p_id', '$m_name', '$m_quantity', '$m_price', '$currentDate', '$m_description')");

			//expense Add
			$conn->query("INSERT INTO `tbl_expenses` VALUES('', '$p_id', '$e_type', '$totalExpense', '$m_description', '$currentDate','$month','$year')");

			//update project budget
			$conn->query("UPDATE `tbl_projects` SET p_bleft='$newBudget', p_expense='$newExpense' WHERE p_id='$p_id'");


				echo "<script language='javascript'>alert('Material added')</script>";
				echo "<script language='javascript'>window.location.href='../myprojects.php';</script>";

				exit();
		
 
	}
