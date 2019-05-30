	<?php
	if(ISSET($_POST['btnSubmit'])){	
		$p_name = $_POST['p_name'];
		$p_type = $_POST['p_type']; 
		$p_address = $_POST['p_address'];
		$p_start = $_POST['p_start']; 
		$p_end = $_POST['p_end']; 

		$start = new DateTime($p_start);
		$end = new DateTime($p_end);
		$x = $start->diff($end);
		$p_dleft = $x->d;

		$p_foreman = $_POST['p_foreman']; 
		$p_budget = $_POST['p_budget'];
		$p_description = $_POST['p_description'];
		$p_expense = '0.00';
		
		$currentDate = date("Y-m-d");

		if ($start>=$end) {
			echo "<script language='javascript'>alert('Project Not Added Please Check Start and End of the Project')</script>";
			echo "<script language='javascript'>window.location.href='../myprojects.php';</script>";
				exit();
		}else{
			$conn = new mysqli("localhost", "root", "", "builders");
			$conn->query("INSERT INTO `tbl_projects` VALUES('', '$p_name', '$p_type', '$p_address', '$p_start', '$p_end', '$p_foreman', '$p_budget', '$p_description', '$p_expense', '$p_budget', '$currentDate', '$p_end')");

				echo "<script language='javascript'>alert('New Project added')</script>";
				echo "<script language='javascript'>window.location.href='../myprojects.php';</script>";
				exit();
		
		}

		
		
			
 
	}
