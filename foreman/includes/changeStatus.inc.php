<?php
	if(ISSET($_POST['btnRepair'])){	
		$eq_id = $_POST['eq_id'];
		$u_id = $_POST['u_id'];
		$eq_name = $_POST['eq_name'];
		$p_name = $_POST['p_name'];
		$p_address = $_POST['p_address'];
		$currentDate = date("Y-m-d");
		$seen = "No";
		$location = $p_name.' at '.$p_address;
		$type = "Equipment";
$notification = $eq_name.' is Under Repair, Current Location is '.$location;

			$conn = new mysqli("localhost", "root", "", "builders");
			$conn->query("UPDATE `tbl_equipment` SET eq_status='Under Repair' WHERE eq_id='$eq_id'");

			$conn->query("INSERT INTO `tbl_notify` VALUES('', '$currentDate', '$notification', '$seen','$seen', '$u_id', 'Repair')");

				echo "<script language='javascript'>alert('Equipment Under Repaired!')</script>";
				echo "<script language='javascript'>window.location.href='../index.php';</script>";
				exit();
	}elseif (ISSET($_POST['btnGood'])) {
		$eq_id = $_POST['eq_id'];
		$u_id = $_POST['u_id'];
		$eq_name = $_POST['eq_name'];
		$p_name = $_POST['p_name'];
		$p_address = $_POST['p_address'];
		$currentDate = date("Y-m-d");
		$seen = "No";
		$location = $p_name.' at '.$p_address;
		$notification = $eq_name.' Is Now Repaired and in Good Condition, Current Location is '.$location;

		$conn = new mysqli("localhost", "root", "", "builders");
		$conn->query("UPDATE `tbl_equipment` SET eq_status='Good' WHERE eq_id='$eq_id'");
		$conn->query("INSERT INTO `tbl_notify` VALUES('', '$currentDate', '$notification', '$seen','$seen', '$u_id', 'Repair')");
				echo "<script language='javascript'>alert('Equipment In Good Condition!')</script>";
				echo "<script language='javascript'>window.location.href='../index.php';</script>";
				exit();
	}
