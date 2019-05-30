<?php
	$id = $_GET["id"];
	$conn = new mysqli("localhost", "root", "", "builders");
	$Retrive = mysqli_query($conn,"SELECT * FROM tbl_projects WHERE p_id='$id'");
	while($row = mysqli_fetch_assoc($Retrive)) {
				$p_id = $row["p_id"];
				$p_name = $row["p_name"];
				$p_type = $row["p_type"];
				$p_address = $row["p_address"];
				$p_start = $row["p_start"];
				$p_end = $row["p_end"];
				$p_foreman = $row["p_foreman"];
				$p_budget = $row["p_budget"];
				$p_description = $row["p_description"];
				$p_expense = $row["p_expense"];
				$p_bleft = $row["p_bleft"];
				$p_target = $row["p_target"];
	

	$currentDate = date("Y-m-d"); 
	

		$conn->query("UPDATE `tbl_users` SET u_site='$p_id' WHERE u_id='$p_foreman'");
		$conn->query("UPDATE `tbl_projects` SET p_currentDate='$currentDate' WHERE p_id='$id'");
		echo "<script language='javascript'>window.location.href='../showProject.php?id=$p_id';</script>";
		exit();
	
	
}
	
?>