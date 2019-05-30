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
					<li><span>Project Types</span></li>
				</ol>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</div>
		</header>
		<!-- start: page -->

			<section class="panel">
							<header class="panel-heading">
								
								<h2 class="panel-title">Types of Projects &nbsp;&nbsp;&nbsp;&nbsp;
									<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myProjectTypes"><i class="fa fa-plus"></i> Add</button>
								</h2>
								  <form action="includes/addprojectTypes.inc.php" method="POST">
								    
								 <!-- Modal -->
								  <?php include 'modals/addprojectTypes.php'; ?>
								<!--Modal End-->
								 </form>
							</header>
							<div class="panel-body">
								<h4>Types of Project By RDB Builders</h4>
								<br>
								<div class="row">
									<div class="col-md-4">
										<table class="table" id="datatable-default">
									<thead>
									</thead>
									<tbody>
									<?php $sqlRetrieve = "SELECT * FROM tbl_project_types";
				                        $query = mysqli_query($conn, $sqlRetrieve);
				                        while ($row = mysqli_fetch_assoc($query)) {
				                        $id = $row["id"];
				                        $pt_name = $row["pt_name"];
										$pt_status = $row["pt_status"];
										$button = "";
										if ($pt_status== 'Enabled') {
											$button ="<input type='submit' class='btn btn-xs btn-warning' name='btnDisable' value='Disable'>";
										}else{
											$button ="<input type='submit' class='btn btn-xs btn-success' name='btnEnable' value='Enable'>";
										}

				                         ?>
				                      <tr>
				                        <td><strong><?php echo $pt_name; ?></strong></td>
				                        <td>
				                        	<strong>
				                        		<form action="includes/updateProjectType.inc.php" method="POST">
				                        			<input type="hidden" name="pt_id" value="<?php echo $id ?>">
				                        			<?php echo $button; ?>

				                        		</form>
				                        	</strong>

				                        	
				                        </td>
				                      </tr>
				                      <?php } ?>
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