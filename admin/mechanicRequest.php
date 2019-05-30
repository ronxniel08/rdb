<?php include 'layouts/adminLayout.php'; ?>

	<section role="main" class="content-body">
		<header class="page-header">
			<h2>Mechanic Request</h2>					
			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="index.php">
							<i class="fa fa-home"></i>
						</a>
					</li>
					<li><span>Request</span></li>
					<li><span>Mechanic</span></li>
				</ol>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</div>
		</header>
		<!-- start: page -->
			<div class="container-fluid">
        	<section class="panel">
				<header class="panel-heading">
					<h2 class="panel-title">Mechanic Request &nbsp;&nbsp;&nbsp;&nbsp;
					</h2>
				</header>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Request Type</th>
											<th>Date Requested</th>
											<th>Person Requested</th>

											<th>Address</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
									<?php $sqlRetrieve = "SELECT * FROM tbl_request WHERE pid = 0 ORDER BY id asc";
				                        $query = mysqli_query($conn, $sqlRetrieve);
				                        while ($row = mysqli_fetch_assoc($query)) {
				                        $id = $row["id"];
				                        $uid = $row["uid"];
				                        $pid = $row["pid"];
				                        $type = $row["type"];
				                        $description = $row["description"];
				                        $date = $row["date"];
				                        $status = $row["status"];
				                        $seen = $row["seen"];
										
										$retUser = "SELECT * FROM tbl_users WHERE u_id ='$uid' ";
				                        $queryUser = mysqli_query($conn, $retUser);
				                        while ($row2 = mysqli_fetch_assoc($queryUser)) {
				                        $u_id = $row2["u_id"];
				                        $u_fullname = $row2["u_fullname"];

				                        $retProject = "SELECT * FROM tbl_projects WHERE p_id ='$pid' ";
				                        $queryProject = mysqli_query($conn, $retProject);
				                        while ($row3 = mysqli_fetch_assoc($queryProject)) {
				                        $p_name = $row3["p_name"];
				                        $p_address = $row3["p_address"];
				                         ?>
				                      <tr>
				                        <td><?php echo $type; ?></td>
				                        <td><?php echo $date ?></td>
				                        <td><?php echo $u_fullname ?></td>
				                        <td><?php echo $p_name.' at '.$p_address ?></td>
				                        <td><?php echo $status ?></td>
				                      </tr>
				                      <?php } } } ?>	
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

<?php include 'layouts/adminFooter.php'; ?>