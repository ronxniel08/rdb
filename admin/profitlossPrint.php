<?php
	
				$currentDate = date("M-d-Y");

	
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
											<h2 class="h2 mt-none mb-sm text-dark text-bold">Profit and Losses</h2>
											<h4 class="h4 m-none text-dark text-bold">as of <?php echo $currentDate ?></h4>
											
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
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Date</th>
											<th>Amount</th>
											<th>Remarks</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
									<?php $conn = new mysqli("localhost", "root", "", "builders");
											$rProject = mysqli_query($conn,"SELECT * FROM tbl_profit_loss ORDER BY pl_date");
											while($row = mysqli_fetch_assoc($rProject)) {
														$pl_id = $row["pl_id"];
														$pl_amount = $row["pl_amont"];
														$pl_desc = $row["pl_desc"];
														$pl_date = $row["pl_date"];

										$remarks = "";
				                        if ($pl_amount<0) {
				                        	$remarks = "<h5 style='color: red'><i class='fa fa-minus'></i> LOSS</h5>";
				                        }else{
				                        	$remarks = "<h5 style='color: green'><i class='fa fa-plus'></i> GAIN</h5>";
				                        }

				                        
				                         ?>
				                      <tr>
				                        <td><?php echo $pl_date; ?></td>
				                       	<td><?php echo $pl_amount; ?></td>
				                       	<td><?php echo $remarks; ?></td>
				                       	<td><?php echo $pl_desc; ?></td>
				                        
				                      </tr>
				                      <?php } ?>
				                    </tbody>
								</table>
							<br><br>
							<div class="text-right mr-lg">
								<button class="btn btn-success noprint" name="btnPrint" onclick="printPage()">PRINT</button>
								<a type="button" href="profitLoss.php" class="btn btn-dark noprint">Back</a>
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