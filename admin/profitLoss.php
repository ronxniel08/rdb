<?php include 'layouts/adminLayout.php'; ?>
	<section role="main" class="content-body">
		<header class="page-header">
		<h2>Admin Dashboard</h2>
						
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.php">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Dashboard</span></li>
				<li><span>Profits and Losses</span></li>
			</ol>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
		</header>

			<!-- start: page -->
			<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
								<h2 class="panel-title">Profits and Losses Report &nbsp;&nbsp;&nbsp;&nbsp;
									<a type="button" href="profitlossPrint.php" class="fa fa-print" style="color: blue; font-size: 20px; float: right;">Print</a>
								</h2>
								  
							</header>
							<div class="panel-body">
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
									<?php $sqlRetrieve = "SELECT * FROM tbl_profit_loss";
				                        $query = mysqli_query($conn, $sqlRetrieve);
				                        while ($row = mysqli_fetch_assoc($query)) {
				                        $pl_id = $row["pl_id"];
				                        $pl_date = $row["pl_date"];
				                        $pl_amount = $row["pl_amont"];
				                        $pl_description = $row["pl_desc"];

				                        $remarks = "";
				                        if ($pl_amount<0) {
				                        	$remarks = "<h5 style='color: red'><i class='fa fa-minus'></i> LOSS</h5>";
				                        }else{
				                        	$remarks = "<h5 style='color: green'><i class='fa fa-plus'></i> GAIN</h5>";
				                        }

				                         ?>
				                      <tr>
				                        <td><?php echo $pl_date; ?></td>
				                       	<td>Php <?php echo $pl_amount; ?></td>
										<td><?php echo $remarks; ?></td>
				                       	<td><?php echo $pl_description; ?></td>
				                        
				                      </tr>
				                      <?php } ?>
				                    </tbody>
								</table>
							</div>
							<form action="includes/addMaterial.inc.php" method="POST">
								    
								  <!-- Modal Add Material-->
								  <?php include 'modals/addmaterial.php'; ?>
								<!--Modal End-->
								 </form>
						</section>

					<!-- end: page -->
	</section>
<?php include 'layouts/adminFooter.php'; ?>