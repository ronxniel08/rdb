<?php
	$id = $_GET["id"];
	$conn = new mysqli("localhost", "root", "", "builders");
	$Retrive = mysqli_query($conn,"SELECT * FROM tbl_recent_project WHERE rp_id='$id'");
	while($row = mysqli_fetch_assoc($Retrive)) {
				$rp_id = $row["rp_id"];
				$rp_name = $row["rp_name"];
				$rp_type = $row["rp_type"];
				$rp_address = $row["rp_address"];
				$rp_start = $row["rp_start"];
				$rp_finish = $row["rp_finish"];
				$rp_budget = $row["rp_budget"];
				$rp_expense = $row["rp_expense"];
				$rp_penalty = $row["rp_penalty"];
				$rp_penalty_days = $row["rp_penalty_days"];
				$rp_profit = $row["rp_profit"];
				$rp_loss = $row["rp_loss"];

				$Retrive = mysqli_query($conn,"SELECT * FROM tbl_project_types WHERE id='$rp_type'");
			while($row = mysqli_fetch_assoc($Retrive)) {			
				$pt_name = $row["pt_name"];
	
}
	
}
	
?>

<html class="fixed sidebar-left-collapsed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>CPMMS | Profit/Loss</title>
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

	<form action="recentProject.php" method="POST">
		<input type="hidden" name="p_name" value="<?php echo $rp_name;?>">
		<input type="hidden" name="p_address" value="<?php echo $rp_address;?>">

		<section class="panel">
						<div class="panel-body">
							<div class="invoice">
								<header class="clearfix">
									<div class="row">
										<div class="col-sm-8 mt-md">
											<h2 class="h2 mt-none mb-sm text-dark text-bold"><?php echo $rp_name.', '.$pt_name; ?></h2>
											<h4 class="h4 m-none text-dark text-bold"><?php echo $rp_address ?></h4>
										</div>
										<div class="col-sm-4 text-right mt-md mb-md">
											<address class="ib mr-xlg">
												RDB Builders
												<br/>
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
										</div>
										<div class="col-md-6">
											<div class="bill-data text-right">
												<p class="mb-none">
													<span class="text-dark">Date Started:</span>
													<span class="value"><?php echo $rp_start ?></span>
												</p>
												<p class="mb-none">
													<span class="text-dark">Date Finished:</span>
													<span class="value"><?php echo $rp_finish ?></span>
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
										<div class="col-sm-4 mt-md">
											<h2 class="h4 mt-none mb-sm text-dark text-bold">Budget:&nbsp;&nbsp;&nbsp;PHP. <?php echo $rp_budget; ?></h2>
										</div>
										<div class="col-sm-4 mt-md">
											<h2 class="h4 mt-none mb-sm text-dark text-bold">Expense:&nbsp;&nbsp;&nbsp;PHP. <?php echo $rp_expense; ?></h2>
										</div>
										<div class="col-sm-4 mt-md">
											<h2 class="h4 mt-none mb-sm text-dark text-bold">Penalty:&nbsp;&nbsp;&nbsp; <?php echo $rp_penalty; ?></h2>
										</div>
								</div>
								<div class="row">
										<div class="col-sm-4 mt-md">
											<h2 class="h4 mt-none mb-sm text-dark text-bold">Profit:&nbsp;&nbsp;&nbsp;PHP. <?php echo $rp_profit; ?></h2>
										</div>
										<div class="col-sm-4 mt-md">
											<h2 class="h4 mt-none mb-sm text-dark text-bold">Loss:&nbsp;&nbsp;&nbsp;PHP. <?php echo $rp_loss; ?></h2>
										</div>
										<div class="col-sm-4 mt-md">
											<h2 class="h4 mt-none mb-sm text-dark text-bold">Days of Penalty:&nbsp;&nbsp;&nbsp; <?php echo $rp_penalty_days; ?></h2>
										</div>
								</div>
							</div>

							<div class="text-right mr-lg">
								<button class="btn btn-success noprint" name="btnPrint" onclick="printPage()">PRINT</button>
								<a type="button" href="recentProject.php" class="btn btn-dark noprint">Back</a>
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