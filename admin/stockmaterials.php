<?php include 'layouts/adminLayout.php'; ?>

	<section role="main" class="content-body">
		<header class="page-header">
			<h2>Stock Materials</h2>					
			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="index.php">
							<i class="fa fa-home"></i>
						</a>
					</li>
					<li><span>Dashboard</span></li>
					<li><span>Stock Materials</span></li>
				</ol>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</div>
		</header>
		<!-- start: page -->
				<section class="panel">
							<header class="panel-heading">
								
								<h2 class="panel-title">Stock Materials &nbsp;&nbsp;&nbsp;&nbsp;
								</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Material Name</th>
											<th>Quantity</th>
											<th>Current Location</th>
											<th>Date Added</th>
											<th style="width: 210px;">Option</th>
										</tr>
									</thead>
									<?php $sqlRetrieve = "SELECT * FROM tbl_materials WHERE m_pid=0 ORDER BY m_id ASC";
				                        $query = mysqli_query($conn, $sqlRetrieve);
				                        while ($row = mysqli_fetch_assoc($query)) {
				                       	$m_id = $row["m_id"];
									   	$m_pid = $row["m_pid"];
									   
									   	$m_name = $row["m_name"];
									   	$m_quantity = $row["m_quantity"];
									   	$m_price = $row["m_price"];
									   	$m_adddate = $row["m_adddate"];

									   	$sqlRProject = "SELECT * FROM tbl_projects WHERE p_id ='$m_pid'";
				                        $queryP = mysqli_query($conn, $sqlRProject);
				                        while ($row = mysqli_fetch_assoc($queryP)) {
					                       	$p_id = $row["p_id"];
										   	$p_name = $row["p_name"];
										   	$p_address = $row["p_address"];
				                         ?>

				                      <tr>
				                        <td><?php echo $m_name; ?></td>
				                       	<td><?php echo $m_quantity; ?></td>
				                       	<td><?php echo $p_name.' at '.$p_address; ?></td>
				                       	<td><?php echo $m_adddate; ?></td>
				                        <td style="text-align: center;">
				                        	<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-material="<?php echo $m_id; ?>"  data-project="<?php echo $p_id; ?>" data-quantity="<?php echo $m_quantity; ?>" data-mname="<?php echo $m_name; ?>" data-pname="<?php echo $p_name.' at '.$p_address; ?>" id="pid" data-target="#TransferMat"><i class="fa fa-building"></i> Transfer</button>			
				                        </td>
				                      </tr>
				                      <?php } } ?>
				                
				                    </tbody>
								</table>
									</div>
								</div>
								
							</div>
							
						</section>
						<form action="includes/transferMat.inc.php" method="POST">
								    
								  	<!-- Modal Add Material-->
								  	<?php include 'modals/transferMaterial.php'; ?>
									<!--Modal End-->
								 	</form>
		<!-- end: page -->
	</section>
</div>

<?php include 'layouts/adminFooter.php'; ?>