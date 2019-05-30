<?php

	session_start();
	if(ISSET($_POST['btnSubmit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$conn = new mysqli("localhost", "root", "", "builders") or die(mysqli_error());

		$query = $conn->query("SELECT * FROM `tbl_users` WHERE `u_username` = '$username' && `u_password` = '$password'") or die(mysqli_error());
		
		$fetch = $query->fetch_array();
		$valid = $query->num_rows;
		$type = $fetch['u_type'];

		
			if($valid > 0){

				if ($type == "1") {
					$_SESSION['u_id'] = $fetch['u_id'];
					header("location: admin/index.php");
				}elseif ($type == "2") {
					$_SESSION['u_id'] = $fetch['u_id'];
					header("location: foreman/index.php");
				}elseif ($type == "3") {
					$_SESSION['u_id'] = $fetch['u_id'];
					header("location: mechanic/index.php");
				}
	
			}else{
				echo "<script>alert('Account Does Not Exist!')</script>";
				echo "<script>window.location = 'index.php'</script>";
				exit();
			}
						
		
		}
		$conn->close();
	