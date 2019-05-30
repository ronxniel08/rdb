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
        	<section class="panel">
				<header class="panel-heading">
					<h2 class="panel-title">My Requests &nbsp;&nbsp;&nbsp;&nbsp;
					</h2>
				</header>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Request Type</th>
											<th>Description</th>
											<th>Date Requested</th>
											<th>Status</th>
											<th>Seen By Engineer?</th>
										</tr>
									</thead>
									<tbody>
									<?php $sqlRetrieve = "SELECT * FROM tbl_request WHERE uid = $id ORDER BY id asc";
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

				                         ?>
				                      <tr>
				                        <td><?php echo $type; ?></td>
				                        <td><?php echo $description ?></td>
				                        <td><?php echo $date ?></td>
				                        <td><?php echo $status ?></td>
				                        <td><?php echo $seen ?></td>
				                      </tr>
				                      <?php }  ?>
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