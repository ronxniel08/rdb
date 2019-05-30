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
				<li><span>Projects</span></li>
			</ol>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
		</header>

			<!-- start: page -->
			<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
								<h2 class="panel-title">On Going Project &nbsp;&nbsp;&nbsp;&nbsp;
									<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myProject"><i class="fa fa-plus"></i> Add Project</button>
								</h2>
								  <form action="includes/addProject.inc.php" method="POST">
								    
								 <!-- Modal -->
								  <?php include 'modals/addproject.php'; ?>
								<!--Modal End-->
								 </form>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Project Name</th>
											<th>Project Type</th>
											<th>Address</th>
											<th>Start Date</th>
											<th>End Date</th>
											<th style="width: 230px;">Option</th>
										</tr>
									</thead>
									<tbody>
									<?php $sqlRetrieve = "SELECT * FROM tbl_projects WHERE p_id !=0 ORDER BY p_id ASC";
				                        $query = mysqli_query($conn, $sqlRetrieve);
				                        while ($row = mysqli_fetch_assoc($query)) {
				                        $p_id = $row["p_id"];
				                        $p_name = $row["p_name"];
				                        $p_type = $row["p_type"];
				                        $p_expense = $row["p_expense"];

				                        $p_address = $row["p_address"];
				                        $p_start = $row["p_start"];
				                        $p_end = $row["p_end"];
				                        $p_bleft= $row["p_bleft"];
				                        $sqlRetrieve2 = "SELECT * FROM tbl_project_types WHERE id ='$p_type' ";
				                        $query2 = mysqli_query($conn, $sqlRetrieve2);
				                        while ($row2 = mysqli_fetch_assoc($query2)) {
				                        $pt_id = $row2["id"];
				                        $pt_name = $row2["pt_name"];
				                         ?>
				                      <tr>
				                        <td><?php echo $p_name; ?></td>
				                       	<td><?php echo $pt_name; ?></td>
				                       	<td><?php echo $p_address; ?></td>
				                       	<td><?php echo $p_start; ?></td>
				                       	<td><?php echo $p_end; ?></td>
				                        <td style="text-align: center;">
				                        	
				                        	<a class="btn btn-info btn-xs" href="includes/show.inc.php?id=<?php echo $p_id; ?>">View Info</a>			                        
				                        		<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-p_name="<?php echo $p_name; ?>" data-pid="<?php echo $p_id; ?>" data-address="<?php echo $p_address; ?>" data-leftbudget="<?php echo $p_bleft; ?>" data-expense="<?php echo $p_expense; ?>" id="pid" data-target="#addMaterial"><i class="fa fa-plus"></i> Add Material</button>			
				                        </td>
				                      </tr>
				                      <?php } ?>
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