<?php
	if(ISSET($_POST['btnSubmit'])){	
		$user = $_POST['user'];
		$type = $_POST['type'].' Request';
		$description = $_POST['description'];
		$currentDate = date("Y-m-d");
		$year = date("Y");
		$month = date("M");
		$status = "Pending";
		$seen = "No";
		$expense_type = $_POST['type'].' Expense';
		$price = $_POST['price'];

		$conn = new mysqli("localhost", "root", "", "builders");

		$conn->query("INSERT INTO `tbl_request` VALUES('', '$user', '0', '$type', '$description', '$currentDate', '$status', '$seen')");

		$conn->query("INSERT INTO `tbl_expenses` VALUES('', '0', '$expense_type', '$price', '$description', '$currentDate', '$month', '$year')");

				echo "<script language='javascript'>alert('New Request added')</script>";
				echo "<script language='javascript'>window.location.href='../index.php';</script>";
				exit();

 
	}
