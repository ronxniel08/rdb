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
					<li><span>Recent Projects</span></li>
				</ol>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</div>
		</header>
		<!-- start: page -->

			<section class="panel">
							<header class="panel-heading">
								
								<h2 class="panel-title">Recent Projects &nbsp;&nbsp;&nbsp;&nbsp;
								</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Project Name</th>
											<th>Project Type</th>
											<th>Start Date</th>
											<th>End Date</th>
											<th>Penalty</th>
											<th>Option</th>
										</tr>
									</thead>
									<tbody>
									<?php $sqlRetrieve = "SELECT * FROM tbl_recent_project ORDER BY rp_id ASC";
				                        $query = mysqli_query($conn, $sqlRetrieve);
				                        while ($row = mysqli_fetch_assoc($query)) {
				                        $rp_id = $row["rp_id"];
				                        $rp_name = $row["rp_name"];
				                        $rp_type = $row["rp_type"];
				                        $rp_address = $row["rp_address"];
				                        $rp_start = $row["rp_start"];
				                        $rp_finish = $row["rp_finish"];
				                        $rp_penalty = $row["rp_penalty"];
				                        $rp_penalty_days = $row["rp_penalty_days"];

				                        

				                        $sqlRetrieve2 = "SELECT * FROM tbl_project_types WHERE id ='$rp_type' ";
				                        $query2 = mysqli_query($conn, $sqlRetrieve2);
				                        while ($row2 = mysqli_fetch_assoc($query2)) {
				                        $id = $row2["id"];
				                        $pt_name = $row2["pt_name"];

				                         ?>
				                      <tr>
				                        <td><?php echo $rp_name.' at '.$rp_address; ?></td>
				                        <td><?php echo $pt_name?></td>
				                        <td><?php echo $rp_start ?></td>
				                        <td><?php echo $rp_finish; ?></td>
				                        <td><?php echo $rp_penalty ?></td>
				                        <td><a class="btn btn-info btn-xs" href="showprofit.php?id=<?php echo $rp_id;?>">View Info</a></td>


				                        
				                      </tr>
				                      <?php } }?>
				                    </tbody>
								</table>
									</div>
								</div>
								
							</div>
							
						</section>
		<!-- end: page -->
	</section>
</div>

<?php include 'layouts/adminFooter.php'; ?>