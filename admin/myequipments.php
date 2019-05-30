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
				<h2 class="panel-title">Company Equipment &nbsp;&nbsp;&nbsp;&nbsp;
					<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#addEquipment"><i class="fa fa-plus"></i> Add Equipment
					</button>
				</h2>
				<form action="includes/addEquipments.inc.php" method="POST">			    
				<!-- Modal -->
					<?php include 'modals/addequipment.php'; ?>
				<!--Modal End-->
				</form>
				<form action="includes/showEquipment.inc.php" method="POST">			    
				<!-- Modal -->
					<?php include 'modals/showEquipment.php'; ?>
				<!--Modal End-->
				</form>
			</header>
			<div class="panel-body">
				<table class="table table-bordered table-striped mb-none" id="datatable-default">
					<thead>
						<tr>
							<th>Equipment Name</th>
							<th>Description</th>
							<th>Status</th>
							<th>Location</th>
							<th style="width: 230px;">Option</th>
						</tr>
					</thead>
					<tbody>
						<?php $sqlRetrieve = "SELECT * FROM tbl_equipment ORDER BY eq_deployment DESC";
				        $query = mysqli_query($conn, $sqlRetrieve);
				        while ($row = mysqli_fetch_assoc($query)) {
				          	$eq_id = $row["eq_id"];
				          	$eq_name = $row["eq_name"];
				          	$eq_description = $row["eq_description"];
				          	$eq_purchase_date = $row["eq_purchase_date"];

				          	$eq_purchase_price = $row["eq_purchase_price"];
				          	$eq_status = $row["eq_status"];
				          	$eq_location = $row["eq_location"];

				          	

				          	$sqlRetrieve2 = "SELECT * FROM tbl_projects WHERE p_id ='$eq_location' ";
				          	$query2 = mysqli_query($conn, $sqlRetrieve2);
				        	while ($row2 = mysqli_fetch_assoc($query2)) {
				        		$p_name = $row2["p_name"];
				          		$p_address = $row2["p_address"];
				          	 

				        ?>
				        <tr>
				            <td><?php echo $eq_name; ?></td>
				            <td><?php echo $eq_description; ?></td>
				            <td><?php echo $eq_status; ?></td>
				            <td><?php echo $p_name.' at '.$p_address; ?></td>
				            <td style="text-align: center;">
				                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-eq_id="<?php echo $eq_id; ?>" data-eq_name="<?php echo $eq_name; ?>" data-eq_description="<?php echo $eq_description; ?>" data-eq_purchase_date="<?php echo $eq_purchase_date; ?>" data-eq_purchase_price="<?php echo $eq_purchase_price; ?>" data-eq_status="<?php echo $eq_status; ?>" data-p_name="<?php echo $p_name.' at '.$p_address; ?>" id="pid" data-target="#showEquipment"> Show</button>
				                <?php  
				                	if ($eq_location == "0") {
				                		echo "
				                		<button type='button' class='btn btn-success btn-xs' data-toggle='modal' data-eid='$eq_id' data-name='$eq_name' data-location='echo $eq_location' id='pid' data-target='#deployEquipment'> Deploy</button>	
				                		";
				                	}else{
				                		echo "
				                		<button type='button' class='btn btn-primary btn-xs' data-toggle='modal' data-eid='$eq_id' data-name='$eq_name' data-location='$eq_location' id='pid' data-target='#transferEquipment'>Transfer</button>	
				                		";
				                	}
				                ?>
				                	
				            </td>
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