<?php 

if (isset($_POST['btnEnable'])) {

	$pt_id = $_POST["pt_id"];
	$conn = new mysqli("localhost", "root", "", "builders");

	$conn->query("UPDATE `tbl_project_types` SET pt_status='Enabled' WHERE id='$pt_id'");

				echo "<script language='javascript'>alert('Project Type Updated')</script>";
				echo "<script language='javascript'>window.location.href='../typesproject.php';</script>";
				exit();
}elseif (isset($_POST['btnDisable'])) {

	$pt_id = $_POST["pt_id"];
	$conn = new mysqli("localhost", "root", "", "builders");

	$conn->query("UPDATE `tbl_project_types` SET pt_status='Disabled' WHERE id='$pt_id'");

				echo "<script language='javascript'>alert('Project Type Updated')</script>";
				echo "<script language='javascript'>window.location.href='../typesproject.php';</script>";
				exit();
}
	


?>