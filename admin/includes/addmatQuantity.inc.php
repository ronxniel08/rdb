<?php
	if(ISSET($_POST['btnSubmit'])){	
		$m_id = $_POST['m_id'];
		$p_id = $_POST['p_id'];
		$p_bleft = $_POST['p_bleft'];
		$expense = $_POST['expense'];
		$old_quantity = $_POST['old_quantity'];
		$m_quantity = $_POST['m_quantity'];
		$m_price = $_POST['m_price'];
		$m_name = $_POST['m_name'];
		$m_description = $_POST['m_description'];
		$e_type = "Material Expense";
		$totalExpense = $m_price * $m_quantity;
		
		$currentDate = date("Y-m-d");
		$Y = date("Y");
		$M = date("m");

		$newQuantity = $old_quantity + $m_quantity;
		$newBudget = $p_bleft - $totalExpense;
		$newExpense = $expense + $totalExpense;
		
		
			$conn = new mysqli("localhost", "root", "", "builders");
			//Update Material Quantity
			$conn->query("INSERT INTO `tbl_materials` VALUES('', '$p_id', '$m_name', '$m_quantity', '$m_price', '$currentDate', '$m_description' )");
			//expense Add
			$conn->query("INSERT INTO `tbl_expenses` VALUES('', '$p_id', '$e_type', '$totalExpense', '$m_description', '$currentDate', '$M', '$Y')");

			//update project budget
			$conn->query("UPDATE `tbl_projects` SET p_bleft='$newBudget', p_expense='$newExpense' WHERE p_id='$p_id'");


				echo "<script language='javascript'>alert('Material Quantity added')</script>";
				echo "<script language='javascript'>window.location.href='../mymaterials.php';</script>";
				exit();
		
 
	}
