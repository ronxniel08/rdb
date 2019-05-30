<?php
	if(ISSET($_POST['btnSubmit'])){	
		$fname = $_POST['fname'];
		$mname = $_POST['mname'].'.'; 
		$lname = $_POST['lname']; 
		$address = $_POST['address']; 
		$position = $_POST['position'];

		$fullname = $fname.' '.$mname.' '.$lname; 
		$username = $lname.'123';
		$password = $position.''.$lname.'123';

		$type = "";
		if ($position =="Mechanic") {
			$type = "3";
		}else{
			$type = "2";
		}
		
			$conn = new mysqli("localhost", "root", "", "builders");
			$conn->query("INSERT INTO `tbl_users` VALUES('', '$fullname', '$username', '$password', '$address', '$type', '0', '$position')");

				echo "<script language='javascript'>alert('Employee added')</script>";
				echo "<script language='javascript'>window.location.href='../employees.php';</script>";
				exit();
		
 
	}
