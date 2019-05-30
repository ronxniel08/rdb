<?php
	$id = $_GET["id"];
	$conn = new mysqli("localhost", "root", "", "builders");
	$rProject = mysqli_query($conn,"SELECT * FROM tbl_projects WHERE p_id='$id'");
	while($row = mysqli_fetch_assoc($rProject)) {
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
				$start = strtotime("$currentDate");
				$end = strtotime("$p_end");
				$daysLeft = ($end - $start)/60/60/24;

	$rType = mysqli_query($conn,"SELECT * FROM tbl_project_types WHERE id='$p_type'");
	while($row2 = mysqli_fetch_assoc($rType)) {
				$pt_name = $row2["pt_name"];
				

	$rUser = mysqli_query($conn,"SELECT * FROM tbl_users WHERE u_id='$p_foreman'");
	while($row3 = mysqli_fetch_assoc($rUser)) {
				$u_fullname = $row3["u_fullname"];
				

	

				

	
}}}
	
?>

<html class="fixed sidebar-left-collapsed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>CPMMS | Project Progress Report</title>
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

	</head>
	<body>
	<style>
		@media print{
   .noprint{
       display:none;
   }
}
	</style>	

	<form action="showProject.php?id=<?php echo $p_id; ?>" method="POST">
		<input type="hidden" name="p_name" value="<?php echo $rp_name;?>">
		<input type="hidden" name="p_address" value="<?php echo $rp_address;?>">

		<section class="panel">
						<div class="panel-body">
							<div class="invoice">
								<header class="clearfix">
									<div class="row">
										<div class="col-sm-8 mt-md">
											<h2 class="h2 mt-none mb-sm text-dark text-bold"><?php echo $p_name.' '.$pt_name; ?></h2>
											<h4 class="h4 m-none text-dark text-bold"><?php echo $p_address ?></h4>
											<br>
											<h5 class="h5 m-none text-dark">Foreman In Charge: <?php echo $u_fullname ?></h5>
										</div>
										<div class="col-sm-4 text-right mt-md mb-md">
											<address class="ib mr-xlg">
												RDB Builders CPMMS
												<br/>
												Engr. Ricardo D. Balderas
												<br>
												Casantiagoan, Laoac, Pangasinan
											</address>
											<div class="ib">
												<img src="../img/rdb.png" style="width: 100px;height: 100px" alt="OKLER Themes" />
											</div>
										</div>
									</div>
								</header>
								<div class="bill-info">
									<div class="row">
										<div class="col-md-6">
											<h3><?php echo $daysLeft; ?> Days Left</h3>
										</div>
										<div class="col-md-6">
											<div class="bill-data text-right">
												<p class="mb-none">
													<span class="text-dark">Start of the Project:</span>
													<span class="value"><?php echo $p_start ?></span>
												</p>
												<p class="mb-none">
													<span class="text-dark">Target Finish of the Project:</span>
													<span class="value"><?php echo $p_end ?></span>
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
										<div class="col-sm-4 mt-md">
											<h2 class="h3 mt-none mb-sm text-dark text-bold">Budget:&nbsp;&nbsp;&nbsp;Php <?php echo $p_budget; ?></h2>
										</div>
										<div class="col-sm-4 mt-md">
											<h2 class="h3 mt-none mb-sm text-dark text-bold">Expense:&nbsp;&nbsp;&nbsp;Php <?php echo $p_expense; ?></h2>
										</div>
										<div class="col-sm-4 mt-md">
											<h2 class="h3 mt-none mb-sm text-dark text-bold">Budget Left:&nbsp;&nbsp;&nbsp;Php <?php echo $p_bleft; ?></h2>
										</div>
								</div>
								<div class="row">
										<div class="col-sm-6 mt-md">
											<h2 class="h4 mt-none mb-sm text-dark text-bold">Tasks:</h2>
											<ul>
<?php $rTask = mysqli_query($conn,"SELECT * FROM tbl_tasks WHERE t_pid='$p_id'");
	while($row4 = mysqli_fetch_assoc($rTask)) {
		$t_name = $row4["t_name"];
		$t_status = $row4["t_status"]; 
		?>
											
												<li><?php echo $t_name.', '.$t_status; ?></li>
											<?php } ?>
											</ul>
										</div>
										<div class="col-sm-6 mt-md">
											<h2 class="h4 mt-none mb-sm text-dark text-bold">Current Expenses:</h2>
											<ul>
<?php $rExpense = mysqli_query($conn,"SELECT * FROM tbl_expenses WHERE e_pid='$p_id'");
	while($row5 = mysqli_fetch_assoc($rExpense)) {
		$e_type = $row5["e_type"];
		$e_date = $row5["e_date"];
		$e_price = $row5["e_price"]; 

		?>
											
												<li><?php echo $e_date.', '.$e_type.', Php. '.$e_price; ?></li>
											<?php } ?>
											</ul>
										</div>
										
								</div>

								<div class="row">
										<div class="col-sm-6 mt-md">
											<h2 class="h4 mt-none mb-sm text-dark text-bold">Material Available:</h2>
											<ul>
<?php $rTask = mysqli_query($conn,"SELECT * FROM tbl_materials WHERE m_pid='$p_id'");
	while($row4 = mysqli_fetch_assoc($rTask)) {
		$m_name = $row4["m_name"];
		$m_quantity = $row4["m_quantity"]; 
		?>
											
												<li><?php echo $m_name.', '.$m_quantity.' Left'; ?></li>
											<?php } ?>
											</ul>
										</div>
										<div class="col-sm-6 mt-md">
											<h2 class="h4 mt-none mb-sm text-dark text-bold">Equipments On Site:</h2>
											<ul>
<?php $rExpense = mysqli_query($conn,"SELECT * FROM tbl_equipment WHERE eq_location=$p_id");
	while($row5 = mysqli_fetch_assoc($rExpense)) {
		$eq_name = $row5["eq_name"];
		$eq_status = $row5["eq_status"];

		?>
											
												<li><?php echo $eq_name.', In '.$eq_status.', Condition'; ?></li>
											<?php } ?>
											</ul>
										</div>
										
								</div>
							</div>
							<br><br>
							<div class="text-right mr-lg">
								<button class="btn btn-success noprint" name="btnPrint" onclick="printPage()">PRINT</button>
								<a type="button" href="showProject.php?id=<?php echo $p_id; ?>" class="btn btn-dark noprint">Back</a>
							</div>
						</div>
					</section>
	</form>

	<script>
		function printPage(){
			window.print();
		}
	</script>
	<!-- Vendor -->
			<script src="../assets/vendor/jquery/jquery.js"></script>
			<script src="../assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
			<script src="../assets/vendor/bootstrap/js/bootstrap.js"></script>
			<script src="../assets/vendor/nanoscroller/nanoscroller.js"></script>
			<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
			<script src="../assets/vendor/magnific-popup/magnific-popup.js"></script>
			<script src="../assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
			
			<!-- Specific Page Vendor -->
			
			<!-- Theme Base, Components and Settings -->
			<script src="../assets/javascripts/theme.js"></script>
			
			<!-- Theme Custom -->
			<script src="../assets/javascripts/theme.custom.js"></script>
			
			<!-- Theme Initialization Files -->
			<script src="../assets/javascripts/theme.init.js"></script>
			<script src="../assets/javascripts/ui-elements/examples.modals.js"></script>
			<script src="{{asset('js/app.js')}}"></script>

<!-- Script for Materials -->
		<script>
</body>
</html>