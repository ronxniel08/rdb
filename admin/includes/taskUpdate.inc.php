<?php
	if(ISSET($_POST['btnSubmit'])){	
		$t_id = $_POST['t_id'];
		$p_id = $_POST['p_id'];

		$status = "Completed";
		
		

		
		
			$conn = new mysqli("localhost", "root", "", "builders");
			$conn->query("UPDATE `tbl_tasks` SET t_status='$status' WHERE t_id='$t_id'");
			

				echo "<script language='javascript'>alert('Task Updated')</script>";
				echo "<script language='javascript'>window.location.href='../showProject.php?id=$p_id';</script>";
				exit();
		
 
	}
