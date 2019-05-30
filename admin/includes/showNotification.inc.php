<?php
	if(ISSET($_POST['btnSubmit'])){	
		$n_id = $_POST['n_id'];
		$conn = new mysqli("localhost", "root", "", "builders");
		$conn->query("DELETE FROM `tbl_notify` WHERE n_id='$n_id'");
			echo "<script language='javascript'>window.location.href='../index.php';</script>";
		
		
 
	}
