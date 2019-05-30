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
					<li><span>My Employees</span></li>
				</ol>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</div>
		</header>
		<!-- start: page -->
		<section class="panel">
							<header class="panel-heading">
								
								<h2 class="panel-title">My Employees &nbsp;&nbsp;&nbsp;&nbsp;
									<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#addEmployee"><i class="fa fa-plus"></i> Add</button>
								</h2>
								  <form action="includes/addEmployee.inc.php" method="POST">
								    
								 <!-- Modal -->
								  <?php include 'modals/addEmployee.php'; ?>
								<!--Modal End-->
								 </form>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Fullname</th>
											<th>Address</th>
											<th>Position</th>
											<th>Site Handled</th>
										</tr>
									</thead>
									<tbody>
									<?php $sqlRetrieve = "SELECT * FROM tbl_users WHERE u_type!=1 ORDER BY u_position";
				                        $query = mysqli_query($conn, $sqlRetrieve);
				                        while ($row = mysqli_fetch_assoc($query)) {
				                        $u_id = $row["u_id"];
				                        $u_fullname = $row["u_fullname"];
				                        $u_address = $row["u_address"];
				                        $u_position = $row["u_position"];
				                        $u_site = $row["u_site"];
				                        $u_type = $row["u_type"];

				                        $sqlProject = "SELECT * FROM tbl_projects WHERE p_id='$u_site'";
				                        $queryProject = mysqli_query($conn, $sqlProject);
				                        while ($row2 = mysqli_fetch_assoc($queryProject)) {
				                        $p_name = $row2["p_name"];
				                        $p_address = $row2["p_address"];
				                        $project = "";
				                        if ($u_site==0 && $u_type==2) {
				                        	$project = "No Project Handled";
				                        }elseif ($u_site==0 && $u_type==3) {
				                        	$project = "RDB Garage Mechanic";
				                        }else{
				                        	$project = $p_name.' at '.$p_address;
				                        }

				                         ?>
				                      <tr>
				                        <td><?php echo $u_fullname; ?></td>
				                        <td><?php echo $u_address; ?></td>
				                        <td><?php echo $u_position; ?></td>
				                        <td><?php echo $project; ?></td>
				                      </tr>
				                      <?php }} ?>
				                    </tbody>
								</table>
									</div>
								</div>
								
							</div>
							
						</section>
	</section>
</div>

<?php include 'layouts/adminFooter.php'; ?>