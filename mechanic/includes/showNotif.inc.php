<?php
	if(ISSET($_POST['btnSubmit'])){	
		$n_id = $_POST['n_id'];
		$conn = new mysqli("localhost", "root", "", "builders");
		$conn->query("UPDATE `tbl_notify` SET seen_mech='Yes' WHERE n_id='$n_id'");
		
				echo "<script language='javascript'>window.location.href='../notification.php';</script>";
		
 
	}
