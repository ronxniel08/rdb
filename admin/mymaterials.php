<?php include 'layouts/adminLayout.php'; ?>
	<section role="main" class="content-body">
		<header class="page-header">
		<h2>Materials</h2>
						
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.php">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Construction Site Materials</span></li>
			</ol>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
		</header>

			<!-- start: page -->
			<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-print" style="color: blue; font-size: 20px;" type="button">Print</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
								<h2 class="panel-title">Construction Site Materials &nbsp;&nbsp;&nbsp;&nbsp;
								</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Material Name</th>
											<th>Quantity</th>
											<th>Project</th>
											<th>Project Address</th>
											<th>Foreman</th>
											<th>Date Added</th>
											<th style="width: 210px;">Option</th>
										</tr>
									</thead>
									<?php $sqlRetrieve = "SELECT * FROM tbl_materials WHERE m_pid!=0 ORDER BY m_id ASC";
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
				                        while ($row3 = mysqli_fetch_assoc($queryP)) {
					                       	$p_id = $row3["p_id"];
										   	$p_foreman = $row3["p_foreman"];
										   	$p_name = $row3["p_name"];
										   	$p_address = $row3["p_address"];
										   	$p_bleft = $row3["p_bleft"];
										   	$p_expense = $row3["p_expense"];
										 $sqlUsers = "SELECT * FROM tbl_users WHERE u_id ='$p_foreman'";
				                        $queryUserss = mysqli_query($conn, $sqlUsers);
				                        while ($row3 = mysqli_fetch_assoc($queryUserss)) {
					                       	$u_id = $row3["u_id"];
										   	$u_fullname = $row3["u_fullname"];
				                         ?>

				                      <tr>
				                        <td><?php echo $m_name; ?></td>
				                       	<td><?php echo $m_quantity; ?></td>
				                       	<td><?php echo $p_name; ?></td>
				                       	<td><?php echo $p_address; ?></td>
				                       	<td><?php echo $u_fullname; ?></td>
				                       	<td><?php echo $m_adddate; ?></td>
				                        <td style="text-align: center;">
				                        	<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-material="<?php echo $m_id; ?>"  data-project="<?php echo $p_id; ?>" data-quantity="<?php echo $m_quantity; ?>" data-mname="<?php echo $m_name; ?>" data-pname="<?php echo $p_name.' at '.$p_address; ?>" id="pid" data-target="#TransferMat"><i class="fa fa-building"></i> Transfer</button>                 
				                        	<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-mid="<?php echo $m_id; ?>" data-quantity="<?php echo $m_quantity; ?>"  data-project="<?php echo $p_id; ?>" data-leftbudget="<?php echo $p_bleft; ?>" data-expense="<?php echo $p_expense; ?>" data-m_name="<?php echo $m_name; ?>" data-p_name="<?php echo $p_name.' at '.$p_address;; ?>" id="pid" data-target="#addQuantity"><i class="fa fa-plus"></i> Add</button>			
				                        </td>
				                      </tr>
				                      <?php }
				                      		}
				                      	}
				                       ?>
				                
				                    </tbody>
								</table>
							</div>
									<form action="includes/transferMat.inc.php" method="POST">
								    
								  	<!-- Modal Add Material-->
								  	<?php include 'modals/transferMaterial.php'; ?>
									<!--Modal End-->
								 	</form>
								 	<form action="includes/addmatQuantity.inc.php" method="POST">
								    
								  	<!-- Modal Add Material-->
								  	<?php include 'modals/addmatQuantity.php'; ?>
									<!--Modal End-->
								 	</form>
						</section>

					<!-- end: page -->
	</section>
<?php include 'layouts/adminFooter.php'; ?>