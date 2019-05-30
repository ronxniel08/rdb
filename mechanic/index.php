<?php include 'layouts/header.php'; ?>


	<section role="main" class="content-body">
		<header class="page-header">
			<h2>Mechanic Dashboard</h2>

			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="index.php">
							<i class="fa fa-home"></i>
						</a>
					</li>
					<li><span>Dashboard</span></li>
				</ol>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</div>
		</header>
		<!-- start: page -->
		
        
        <div class="container-fluid">
	        	<?php
			$conn = new mysqli("localhost", "root", "", "builders") or die(mysqli_error());
				
				$sqlRetriveAll = "SELECT * FROM tbl_equipment";
	            $resultAll = mysqli_query($conn, $sqlRetriveAll);
	            $resultCheckAll =  mysqli_num_rows($resultAll);

	            $sqlRetrive2 = "SELECT * FROM tbl_equipment WHERE eq_status ='Under Repair' ";
	            $result2 = mysqli_query($conn, $sqlRetrive2);
	            $resultCheck2 =  mysqli_num_rows($result2);

	            $sqlRetrive3 = "SELECT * FROM tbl_equipment WHERE eq_status ='Good' ";
	            $result3 = mysqli_query($conn, $sqlRetrive3);
	            $resultCheck3 =  mysqli_num_rows($result3);
	        ?>

	     
		        <div class="col-md-3">
		        	<div class="panel-body bg-warning">
						<div class="widget-summary widget-summary-lg">
							<div class="widget-summary-col widget-summary-col-icon">
								<div class="summary-icon bg-danger">
									<i class="fa fa-wrench"></i>
								</div>
							</div>
							<div class="widget-summary-col">
								<div class="summary">
									<h4 class="title">Under Repair</h4>
										<div class="info">
											<strong class="amount"><?php echo $resultCheck2 ?></strong>
										</div>
								</div>
							</div>
						</div>
					</div>
		        </div>
		    
		        <div class="col-md-3">
		        	<div class="panel-body bg-success">
						<div class="widget-summary widget-summary-lg">
							<div class="widget-summary-col widget-summary-col-icon">
								<div class="summary-icon bg-success">
									<i class="fa fa-check-square"></i>
								</div>
							</div>
							<div class="widget-summary-col">
								<div class="summary">
									<h4 class="title">Good</h4>
										<div class="info">
											<strong class="amount"><?php echo $resultCheck3 ?></strong>
										</div>
								</div>
							</div>
						</div>
					</div>
		        </div>
	        
		        <div class="col-md-3">
		        	<div class="panel-body bg-primary">
						<div class="widget-summary widget-summary-lg">
							<div class="widget-summary-col widget-summary-col-icon">
								<div class="summary-icon bg-success">
									<i class="fa fa-truck"></i>
								</div>
							</div>
							<div class="widget-summary-col">
								<div class="summary">
									<h4 class="title">All Equipment</h4>
										<div class="info">
											<strong class="amount"><?php echo $resultCheckAll ?></strong>
										</div>
								</div>
							</div>
						</div>
					</div>
		        </div>


        </div>
        <br>
        <form action="includes/changeStatus.inc.php" method="POST">
		<!-- Modal Add Material-->
		<?php include 'modals/changeStatusRepair.php'; ?>
		<!--Modal End-->
		</form>
		<form action="includes/changeStatus.inc.php" method="POST">
		<!-- Modal Add Material-->
		<?php include 'modals/changeStatusGood.php'; ?>
		<!--Modal End-->
		</form>

        <div class="container-fluid">
        	<section class="panel">
				<header class="panel-heading">
					<h2 class="panel-title">Company Equipments &nbsp;&nbsp;&nbsp;&nbsp;
						
					</h2>
				</header>

					<div class="panel-body">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Equipment</th>
											<th>Current Status</th>
											<th>Location</th>
											<th>Option</th>
										</tr>
									</thead>
									<tbody>
									<?php $sqlRetrieve = "SELECT * FROM tbl_equipment ORDER BY eq_id ASC";
				                        $query = mysqli_query($conn, $sqlRetrieve);
				                        while ($row = mysqli_fetch_assoc($query)) {
				                        $eq_id = $row["eq_id"];
				                        $eq_name = $row["eq_name"];
				                        $eq_description = $row["eq_description"];
				                        $eq_purchase_date = $row["eq_purchase_date"];
				                        $eq_purchase_price = $row["eq_purchase_price"];
				                        $eq_status = $row["eq_status"];
				                        $eq_deployment = $row["eq_deployment"];
				                        $eq_location = $row["eq_location"];

				                        $sql = "SELECT * FROM tbl_projects WHERE p_id ='$eq_location' ";
				                        $query2 = mysqli_query($conn, $sql);
				                        while ($row2 = mysqli_fetch_assoc($query2)) {
				                        $p_id = $row2["p_id"];
				                        $p_address = $row2["p_address"];
				                        $p_name = $row2["p_name"];
				                        $stats="";

				                        if ($eq_status =="Stocked") {
				                        	$stats = "color:red;font-weight: bolder;font-size: 16px;";
				                        }elseif ($eq_status =="Under Repair") {
				                        	$stats = "color:orange;font-weight: bolder;font-size: 16px;";
				                        }else{
				                        	$stats = "color:green;font-weight: bolder;font-size: 16px;";
				                        }

				                         ?>
				                      <tr>
				                        <td><?php echo $eq_name. ' / ' .$eq_description; ?></td>
				                        <td style="<?php echo $stats; ?>"><?php echo $eq_status?></td>
				                        <td><?php echo $p_name.' at '.$p_address ?></td>
				                        <td style="text-align: center;">
				                        	<?php if ($eq_status =="Under Repair") {
									                       			echo "<button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-eq_id='$eq_id' data-eq_status='$eq_status' data-eq_name='$eq_name' data-p_name='$p_name'  data-p_address='$p_address' data-user='$id' id='pid' data-target='#changeStatusGood'> Change Status</button>";
									                       		}else{
									                       			echo "<button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-eq_id='$eq_id' data-eq_status='$eq_status' data-eq_name='$eq_name' data-p_name='$p_name' data-p_address='$p_address' data-user='$id' id='pid' data-target='#changeStatusRepair'> Change Status</button>";
									                       		} 
									                       		?>
				                        </td>


				                        
				                      </tr>
				                      <?php } } ?>
				                    </tbody>
								</table>
							</div>
						</div>
					</div>
				</section>
        </div>

		<!-- end: page -->
	</section>
</div>

<?php include 'layouts/footer.php'; ?>