<?php include 'layouts/adminLayout.php'; ?>

	<section role="main" class="content-body">
		<header class="page-header">
			<h2>Equipments</h2>					
			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="index.php">
							<i class="fa fa-home"></i>
						</a>
					</li>
					<li><span>Dashboard</span></li>
					<li><span>Equipments</span></li>

				</ol>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</div>
		</header>
		<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">
				<h2 class="panel-title">Recent Repairs &nbsp;&nbsp;&nbsp;&nbsp;
					
				</h2>
			<div class="panel-body">
				<table class="table table-bordered table-striped mb-none" id="datatable-default">
					<thead>
						<tr>
							<th>Equipment Name</th>
							<th>Date Repair</th>
							<th>Location</th>
							<th>Details</th>
						</tr>
					</thead>
					<tbody>
						<?php $sqlRetrieve = "SELECT * FROM tbl_repairs ORDER BY r_id DESC";
				        $query = mysqli_query($conn, $sqlRetrieve);
				        while ($row = mysqli_fetch_assoc($query)) {
				          	$r_eq_id = $row["r_eq_id"];
				          	$r_date = $row["r_date"];
				          	$location = $row["location"];
				          	$description = $row["description"];

				          	

				          	$sqlRetrieve2 = "SELECT * FROM tbl_equipment WHERE eq_id ='$r_eq_id' ";
				          	$query2 = mysqli_query($conn, $sqlRetrieve2);
				        	while ($row2 = mysqli_fetch_assoc($query2)) {
				        		$eq_name = $row2["eq_name"];
				          	 

				        ?>
				        <tr>
				        	<td><?php echo $eq_name; ?></td>
				            <td><?php echo $r_date; ?></td>
				            <td><?php echo $location; ?></td>
				            <td><?php echo $description; ?></td>
				            
				            
				        </tr>
				        <?php }  }?>
				    </tbody>
				</table>
				<form action="includes/changeLocation.inc.php" method="POST">			    
				<!-- Modal -->
					<?php include 'modals/transferequipment.php'; ?>
				<!--Modal End-->
				</form>
				<form action="includes/deployEquipment.inc.php" method="POST">			    
				<!-- Modal -->
					<?php include 'modals/deployequipment.php'; ?>
				<!--Modal End-->
				</form>
			</div>
		</section>
		<!-- end: page -->
	</section>
</div>

<?php include 'layouts/adminFooter.php'; ?>