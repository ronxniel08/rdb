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
					<h2 class="panel-title">Notifications &nbsp;&nbsp;&nbsp;&nbsp;
					</h2>
				</header>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Type</th>
											<th>Date Requested</th>
											<th>Seen By Engineer?</th>
											<th>Option</th>
										</tr>
									</thead>
									<tbody>
									<?php $sqlRetrieve = "SELECT * FROM tbl_notify WHERE n_seen= 'No' ORDER BY seen_mech asc";
				                        $query = mysqli_query($conn, $sqlRetrieve);
				                        while ($row = mysqli_fetch_assoc($query)) {
				                        $n_id = $row["n_id"];
				                        $n_date = $row["n_date"];
				                        $n_message = $row["n_message"];
				                        $n_seen = $row["n_seen"];
				                        $seen_mech = $row["seen_mech"];
				                        $n_user = $row["n_user"];
				                        $n_type = $row["n_type"];

				                        $check = "";
				                        if ($seen_mech == "No") {
				                        	$check = "";
				                        }else{
				                        	$check = "<i class='fa fa-check'></i>";
				                        }

				                         ?>
				                      <tr>
				                        <td><?php echo $check.' '.$n_type; ?></td>
				                        <td><?php echo $n_date ?></td>
				                        <td><?php echo $n_seen ?></td>
				                        <td style="text-align: center;"><button type='button' class='btn btn-info btn-xs' data-toggle='modal' data-n_type='<?php echo $n_type ?>' data-n_message='<?php echo $n_message ?>' data-n_id='<?php echo $n_id ?>' id='pid' data-target='#showNotif'> Show</button></td>
				                      </tr>
				                      <?php }  ?>
				                    </tbody>
								</table>
							</div>
							<div class="col-md-1"></div>

						</div>
					</div>
				</section>
        </div>
<form action="includes/showNotif.inc.php" method="POST">
		<!-- Modal Add Material-->
		<?php include 'modals/showNotif.php'; ?>
		<!--Modal End-->
		</form>
		<!-- end: page -->
	</section>
</div>

<?php include 'layouts/footer.php'; ?>