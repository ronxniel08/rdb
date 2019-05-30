<?php
	if(ISSET($_POST['btnSubmit'])){	
		$m_id = $_POST['m_id'];
		$p_id = $_POST['p_id'];
		$m_quantity = $_POST['m_quantity'];
		$tr_quant = $_POST['tr_quant'];
		$new_pid = $_POST['new_pid'];
		$p_name = $_POST['p_name'];
		$m_name = $_POST['m_name'];

		$new_quantity = $m_quantity-$tr_quant;

		$m_price = "0.00";
		$currentDate = date("Y-m-d");
		
		$m_description = "tranfered from".' '.$p_name;

		if ($tr_quant>$m_quantity) {
			echo "<script language='javascript'>alert('Transfer Failed Please Check Quantity!')</script>";
			echo "<script language='javascript'>window.location.href='../mymaterials.php';</script>";
		}else{
			$conn = new mysqli("localhost", "root", "", "builders");
			//Update Material Quantity
			$conn->query("UPDATE `tbl_materials` SET m_quantity='$new_quantity' WHERE m_id='$m_id'");

			$conn->query("INSERT INTO `tbl_materials` VALUES('', '$new_pid', '$m_name', '$tr_quant', '$m_price', '$currentDate', '$m_description')");

			echo "<script language='javascript'>alert('Record added')</script>";
			echo "<script language='javascript'>window.location.href='../mymaterials.php';</script>";
			exit();
		}

		
 
	}
