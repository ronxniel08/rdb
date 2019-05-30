<?php
    $conn = new mysqli("localhost", "root", "", "builders") or die(mysqli_error());
    session_start();

    if (!isset($_SESSION['u_id']) || (trim($_SESSION['u_id']) == '')) {
    header("location: ../index.php");
    exit();
}
$session_id=$_SESSION['u_id'];

$result=mysqli_query($conn, "select * from tbl_users where u_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
$id = $row['u_id'];
$username = $row['u_username'];
$password = $row['u_password'];
$position = $row['u_position'];
$fullname = $row['u_fullname'];
$type = $row['u_type'];
$site = $row['u_site'];
  ?>

<!doctype html>
<html class="fixed sidebar-left-collapsed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>CPMMS | Admin Dashboard</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="../assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="../assets/vendor/modernizr/modernizr.js"></script>
<style>
	#myDIV{
		display:none;
	}

</style>
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="index.php" class="logo">
						<img src="../img/rdbbg.png" height="35" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="../img/admin.png" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info">
								<span class="name"><?php echo $fullname ?></span>
								<span class="role"><?php echo $position ?></span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="../logout.php"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li>
										<a href="index.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									
									<li class="nav-parent">
										<a>
											<i class="fa fa-building" aria-hidden="true"></i>
											<span>Projects</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="myprojects.php">
													 My Projects
												</a>
											</li>
											<li>
												<a href="typesproject.php">
													 Projects Types
												</a>
											</li>
											<li>
												<a href="recentProject.php">
													 Recent Projects
												</a>
											</li>
											<li>
												<a href="profitLoss.php">
													 Profits and Losses
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-truck" aria-hidden="true"></i>
											<span>Equipments</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="myequipments.php">
													My Equipments
												</a>
											</li>
											<li>
												<a href="recentRepairs.php">
													Recent Repairs
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-cube" aria-hidden="true"></i>
											<span>Site Materials</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="mymaterials.php">
													 Materials
												</a>
											</li>
											<li>
												<a href="stockmaterials.php">
													 Stocked Materials
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-children">
										<a href="employees.php">
											<i class="fa fa-users" aria-hidden="true"></i>
											<span>My Employees</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
				
					</div>
					

					
				
				</aside>
				<!-- end: sidebar -->