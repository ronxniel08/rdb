<?php
	if(ISSET($_POST['btnRepair'])){	
		$user = $_POST['user'];
		$eq_id = $_POST['eq_id'];
		$eq_name = $_POST['eq_name'];
		$p_name = $_POST['p_name'];
		$p_address = $_POST['p_address'];
		$currentDate = date("Y-m-d");
		$seen = "No";
		$location = $p_name.' at '.$p_address;
		$type = "Equipment";
$notification = $eq_name.' is Under Repair, Current Location is '.$location;

		$part = $_POST['part'];
		$price = $_POST['price'];
		$month = date("M");
		$year = date("Y");

			$conn = new mysqli("localhost", "root", "", "builders");
			if (empty($part) && empty($price)) {
				$description = $eq_name.' is Being Repaired at '.$currentDate.', No Parts Needed For the Repair';
				$conn->query("UPDATE `tbl_equipment` SET eq_status='Under Repair' WHERE eq_id='$eq_id'");
				$conn->query("INSERT INTO `tbl_notify` VALUES('', '$currentDate', '$notification', '$seen','Yes', '$user', 'Repair')");
				$conn->query("INSERT INTO `tbl_repairs` VALUES('', '$eq_id', '$currentDate', '$location','No Parts Needed', '$description')");
				echo "<script language='javascript'>alert('Equipment Under Repaired!')</script>";
				echo "<script language='javascript'>window.location.href='../index.php';</script>";
				exit();
			}else{
				$descript = $eq_name.' is Being Repaired at '.$currentDate.', '.$part.' is Needed For the Repair';
				$partNeed = $part.' Php.'.$price;
				$conn->query("UPDATE `tbl_equipment` SET eq_status='Under Repair' WHERE eq_id='$eq_id'");

				$conn->query("INSERT INTO `tbl_notify` VALUES('', '$currentDate', '$notification', '$seen','Yes', '$user', 'Repair')");

				$conn->query("INSERT INTO `tbl_repairs` VALUES('', '$eq_id', '$currentDate', '$location','$partNeed', '$descript')");

				$conn->query("INSERT INTO `tbl_expenses` VALUES('', '0', 'Equipment Expense', '$price','$descript', '$currentDate', '$month', '$year')");
				
				echo "<script language='javascript'>alert('Equipment Under Repaired!')</script>";
				echo "<script language='javascript'>window.location.href='../index.php';</script>";
				exit();
			}
			
	}elseif (ISSET($_POST['btnGood'])) {
		$user = $_POST['user'];
		$eq_id = $_POST['eq_id'];
		$eq_name = $_POST['eq_name'];
		$p_name = $_POST['p_name'];
		$p_address = $_POST['p_address'];
		$currentDate = date("Y-m-d");
		$seen = "No";
		$location = $p_name.' at '.$p_address;
		$notification = $eq_name.' Is Now Repaired and in Good Condition, Current Location is '.$location;

		$conn = new mysqli("localhost", "root", "", "builders");
		$conn->query("UPDATE `tbl_equipment` SET eq_status='Good' WHERE eq_id='$eq_id'");
		$conn->query("INSERT INTO `tbl_notify` VALUES('', '$currentDate', '$notification', '$seen','Yes', '$user', 'Repair')");
				echo "<script language='javascript'>alert('Equipment In Good Condition!')</script>";
				echo "<script language='javascript'>window.location.href='../index.php';</script>";
				exit();
	}
