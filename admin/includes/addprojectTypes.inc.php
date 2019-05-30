<?php
	if(ISSET($_POST['btnSubmit'])){	
		$p_type = $_POST['p_type'];
		
		
			$conn = new mysqli("localhost", "root", "", "builders");
			//material Add
			$conn->query("INSERT INTO `tbl_project_types` VALUES('', '$p_type','Enabled')");


				echo "<script language='javascript'>alert('Project Type added')</script>";
				echo "<script language='javascript'>window.location.href='../typesproject.php';</script>";
				exit();
		
 
	}
