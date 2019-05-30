<?php include 'layouts/header.php'; ?>
<?php
			
			$conn = new mysqli("localhost", "root", "", "builders");
			$Retrive = mysqli_query($conn,"SELECT * FROM tbl_projects WHERE p_id='$site'");
			while($row = mysqli_fetch_assoc($Retrive)) {
				$p_id = $row["p_id"];
				$p_name = $row["p_name"];
				$p_type = $row["p_type"];
				$p_address = $row["p_address"];
				$p_start = $row["p_start"];
				$p_end = $row["p_end"];
				$p_foreman = $row["p_foreman"];
				$p_budget = $row["p_budget"];
				$p_description = $row["p_description"];
				$p_expense = $row["p_expense"];
				$p_bleft = $row["p_bleft"];
				$p_target = $row["p_target"];
				$p_currentDate = $row["p_currentDate"];
				$p_target = $row["p_target"];
				$daysLeft ="";
				$currentDate = date("Y-m-d");
				$start = strtotime("$currentDate");
				$end = strtotime("$p_end");
				$daysLeft = ($end - $start)/60/60/24;

			$type = mysqli_query($conn,"SELECT * FROM tbl_project_types WHERE id='$p_type'");
			while($rowType = mysqli_fetch_assoc($type)) {
				$id = $rowType["id"];
				$pt_name = $rowType["pt_name"];

				$notifDays = "";

				include 'includes/days.inc.php';
			
		?>
		
	<section role="main" class="content-body">
		<header class="page-header">
		<h2>Foreman Dashboard</h2>
						
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.php">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Dashboard</span></li>
				<li><span>Projects</span></li>
				<li><span><?php echo $p_name; ?></span></li>
			</ol>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
		</header>

			<!-- start: page -->
			<div class="container">
				<!--section1 start-->
				<section class="panel">
					<header class="panel-heading">
						
						<h2 class="panel-title">Project: <?php echo $p_name; ?></h2>
						<hr>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="panel-group" id="accordion2">
										<div class="panel panel-accordion panel-accordion-primary">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseProject" aria-expanded="false">
														<i class="fa fa-building"></i> Project Details
													</a>
												</h4>
											</div>
											<div id="collapseProject" class="accordion-body collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<strong style="font-size: 16px">
														Project Name: <?php echo $p_name; ?> <br>
														Project Type: <?php echo $pt_name; ?> <br>
														Site Address: <?php echo $p_address; ?> <br>
														Start Date: <?php echo $p_start; ?> <br>
														Target Finish Date: <?php echo $p_target; ?> <br>
														End Date: <?php echo $p_end; ?> <br>
														Project Budget: <?php echo $p_budget; ?> <br>
														Project Description: <?php echo $p_description; ?> <br>
													</strong>
												</div>
											</div>
										</div>
										<div class="panel panel-accordion panel-accordion-primary">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseMaterials" aria-expanded="false">
														<i class="fa fa-building"></i> Project Materials
													</a>
												</h4>
											</div>
											<div id="collapseMaterials" class="accordion-body collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<table class="table table-striped mb-none" id="datatable-default">
														<thead>
															<tr>
																<th>Material Name</th>
																<th>Quantity</th>
																<th>Date Added</th>
																
															</tr>
														</thead>
														<?php $sqlRetrieve = "SELECT * FROM tbl_materials WHERE m_pid='$p_id' ";
									                        $query = mysqli_query($conn, $sqlRetrieve);
									                        while ($row = mysqli_fetch_assoc($query)) {
									                        $m_id = $row["m_id"];
									                        $m_pid = $row["m_pid"];
									                        $m_name = $row["m_name"];
									                        $m_quantity = $row["m_quantity"];
									                        $m_price = $row["m_price"];
									                        $m_adddate = $row["m_adddate"];

									                         ?>
									                      <tr>
									                        <td><?php echo $m_name; ?></td>
									                       	<td><?php echo $m_quantity; ?></td>
									                       	<td><?php echo $m_adddate; ?></td>
									                       	<td>
									                       		<button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-eq_id='$eq_id' data-eq_status='$eq_status' data-eq_name='$eq_name' data-p_name='$p_name' data-u_id='$p_foreman'data-p_address='$p_address' id='pid' data-target='#changeStatusGood'> Update</button>
									                       	</td>
									                        
									                      </tr>
									                      <?php } ?>
									                    </tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="panel panel-accordion panel-accordion-primary">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseEquipments" aria-expanded="false">
														<i class="fa fa-cogs"></i> Project Equipments
													</a>
												</h4>
											</div>
											<div id="collapseEquipments" class="accordion-body collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<table class="table table-striped mb-none" id="datatable-default">
														<thead>
															<tr>
																<th>Equipment Name</th>
																<th>Status</th>
																<th>Option</th>
																
															</tr>
														</thead>
														<?php $sqlRetrieve = "SELECT * FROM tbl_equipment WHERE eq_location=$p_id ";
									                        $query = mysqli_query($conn, $sqlRetrieve);
									                        while ($row = mysqli_fetch_assoc($query)) {
									                        $eq_id = $row["eq_id"];
									                        $eq_name = $row["eq_name"];
									                        $eq_status = $row["eq_status"];

									                         ?>
									                      <tr>
									                        <td><?php echo $eq_name; ?></td>
									                       	<td><?php echo $eq_status; ?></td>
									                       	<td>
									                       		<?php if ($eq_status =="Under Repair") {
									                       			echo "<button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-eq_id='$eq_id' data-eq_status='$eq_status' data-eq_name='$eq_name' data-p_name='$p_name' data-u_id='$p_foreman'data-p_address='$p_address' id='pid' data-target='#changeStatusGood'> Change Status</button>";
									                       		}else{
									                       			echo "<button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-eq_id='$eq_id' data-eq_status='$eq_status' data-eq_name='$eq_name' data-p_name='$p_name' data-u_id='$p_foreman' data-p_address='$p_address' id='pid' data-target='#changeStatusRepair'> Change Status</button>";
									                       		} 
									                       		?>
									                       		

									                       	</td>
									                        
									                      </tr>
									                      <?php }  ?>
									                    </tbody>
													</table>
												</div>
											</div>
										</div>
										
										
									</div>
								</div>

						<?php  
							$sqlRetrive1 = "SELECT * FROM tbl_tasks WHERE t_pid = $site ";
						    $taskAllResult = mysqli_query($conn, $sqlRetrive1);
						    $taskAllCheck =  mysqli_num_rows($taskAllResult);

						  	$sqlRetrive2 = "SELECT * FROM tbl_tasks WHERE t_pid = $site AND t_status = 'Completed'";
						    $taskResult = mysqli_query($conn, $sqlRetrive2);
						    $taskCheck =  mysqli_num_rows($taskResult);
							$percent = "";
						    

						    if ($taskAllCheck <= 0) {
						    	$percent = "NA";
						    }else{
						    $percent = ($taskCheck/$taskAllCheck)*100;

						    }
						?>

								<div class="col-md-5">
									<div class="widget-summary widget-summary-xlg">
											<div class="widget-summary-col widget-summary-col-icon">
												<div class="summary-icon bg-primary">
													<?php echo $daysLeft; ?>	
												</div>
											</div>
											<h4 style="margin-left: 15px;font-size: 20px;">
												Total Expense:Php <?php echo $p_expense; ?>
												<br>
												Left Budget:Php <?php echo $p_bleft; ?>
												<br>
												<br>
												Task Completed: <?php echo $taskCheck; ?> out of <?php echo $taskAllCheck; ?>
											</h4>
											
											<div class="progress progress-striped m-md">
												<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percent; ?>%	;">
													<?php echo $percent; ?>%
												</div>
											</div>
										</div>
										<h4 style="margin-left: 18px;margin-top: -24px;">Days Left</h4>
										<div class="container">
											<?php echo $notifDays; ?>
										</div>
								</div>
								
							</div>
						</div>
					</header>
				</section>
<form action="includes/changeStatus.inc.php" method="POST">
		<!-- Modal Add Material-->
		<?php include 'modals/changeStatusGood.php'; ?>
		<!--Modal End-->
		</form>
		<form action="includes/changeStatus.inc.php" method="POST">
		<!-- Modal Add Material-->
		<?php include 'modals/changeStatusRepair.php'; ?>
		<!--Modal End-->
		</form>
				
				<!--section1 end-->
				<form action="includes/task.inc.php" method="POST" enctype="multipart/form-data">
					<!-- Modal Add Material-->
					<?php include 'modals/task.php'; ?>
					<!--Modal End-->
				</form>
				<!--task section start-->
				<?php include 'modals/taskphoto.php'; ?>
				<section class="panel">
					<header class="panel-heading">
						
						<h2 class="panel-title">Task to be Completed
							
						</h2>

						<hr>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-5">
									<table class="table table-striped mb-none" id="datatable-default">
										<thead>
											<tr>
												<th>Task Name</th>
												<th>Status</th>
												<th>Option</th>
											</tr>
										</thead>
										<tbody>
					<?php $sqlRetrieve = "SELECT * FROM tbl_tasks WHERE t_pid='$p_id' ORDER BY t_adddate ASC";
							$query = mysqli_query($conn, $sqlRetrieve);
							while ($row = mysqli_fetch_assoc($query)) {
								$t_id = $row["t_id"];
								$t_pid = $row["t_pid"];
								$t_name = $row["t_name"];
								$t_status = $row["t_status"];
								$t_adddate = $row["t_adddate"];


					?>
									        <tr>

										        <td><?php echo $t_name; ?></td>
										        <td><?php echo $t_status; ?></td>
										        <td>
										        	<?php if ($t_status =="Completed") {
										        			echo "Completed";
										        		}else{
														echo "<button type='button' class='btn btn-success btn-xs' data-toggle='modal' data-t_id='$t_id' data-t_name='$t_name' data-t_pid='$t_pid'  data-p_foreman='$p_foreman' data-p_name='$p_name' data-p_address='$p_address' id='task' data-target='#task'> Complete Task</button>";
										        		} ?>
										        </td>
									        </tr>
									    <?php } ?>
									    </tbody>
									</table>
								</div>
								<div class="col-md-1">
									
								</div>
								<!--request-->
								<form method="POST" action="includes/request.inc.php">
									<input type="hidden" name="foreman" value="<?php echo $p_foreman ?>">
									<input type="hidden" name="project" value="<?php echo $p_id ?>">
									<input type="hidden" name="fullname" value="<?php echo $fullname ?>">
									<input type="hidden" name="p_name" value="<?php echo $p_name ?>">
									<input type="hidden" name="p_address" value="<?php echo $p_address ?>">


								<div class="col-md-6">
									<h4>Request to Management</h4>
									<label class="h5" style="font-weight: bold;">Request Type:</label>
								    <input type="text" class="form-control" name="type" required="required">
								    <label class="h5" style="font-weight: bold;">Description:</label>
								    <textarea name="description" class="form-control" required="required"></textarea>
								    <br>


								    <center>
								    	<input type="submit" name="btnSubmit" class="btn btn-info" value="Submit Request">
								    </center>
								</div>

								</form>
								<!--/request-->
							</div>
						</div>
					</header>
					
				</section>
				<!--task section end-->

			</div>

			<!-- end: page -->
	</section>
<?php } }?>
	<?php include 'layouts/footer.php'; ?>
