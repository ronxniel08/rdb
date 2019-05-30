<?php
	if(ISSET($_POST['btnSubmit'])){	
		$name = $_POST['name'];

		$description = $_POST['description'];
		$date = $_POST['date'];
		$price = $_POST['price'];
		$status = "Good";
		$location = "0";
		$deployment = "No";
		
		
			$conn = new mysqli("localhost", "root", "", "builders");

			//expense Add
			$conn->query("INSERT INTO `tbl_equipment` VALUES('', '$name', '$description', '$date', '$price', '$status', '$location', '$deployment')");



				echo "<script language='javascript'>alert('Equipment Added!')</script>";
				echo "<script language='javascript'>window.location.href='../myequipments.php';</script>";

				exit();
		
 
	}
