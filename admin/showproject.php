<?php include 'layouts/adminLayout.php'; ?>
<?php
			$id = $_GET["id"];
			$conn = new mysqli("localhost", "root", "", "builders");
			$Retrive = mysqli_query($conn,"SELECT * FROM tbl_projects WHERE p_id='$id'");
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
				$p_currentDate = $row["p_currentDate"];
				$p_target = $row["p_target"];
				$daysLeft ="";
				$currentDate = date("Y-m-d");
				$start = strtotime("$currentDate");
				$end = strtotime("$p_end");
				$daysLeft = ($end - $start)/60/60/24;
				

			$typeProject = mysqli_query($conn,"SELECT * FROM tbl_project_types WHERE id='$p_type'");
			while($rowType = mysqli_fetch_assoc($typeProject)) {
				$id = $rowType["id"];
				$pt_name = $rowType["pt_name"];
			$foreman = mysqli_query($conn,"SELECT * FROM tbl_users WHERE u_id='$p_foreman'");
				while($rowforeman = mysqli_fetch_assoc($foreman)) {
				$u_id = $rowforeman["u_id"];
				$u_fullname = $rowforeman["u_fullname"];

				$notifDays = "";

				include 'includes/daysLeft.inc.php';
			
		?>
		
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
				<li><span><?php echo $p_name; ?></span></li>
			</ol>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
		</header>

			<!-- start: page -->
			<div class="container-fluid">
				<!--section1 start-->
				<section class="panel">
					<header class="panel-heading">
						
						<h2 class="panel-title">Project: <?php echo $p_name; ?>
							<a href="progressPrint.php?id=<?php echo $p_id; ?>" class="fa fa-print btn btn-info" style="color: blue; font-size: 20px; float: right;" type="button">Print</a>
						</h2>

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
														Current End Date: <?php echo $p_end; ?> <br>
														Foreman In Charge: <?php echo $u_fullname; ?> <br>
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
									                        
									                      </tr>
									                      <?php }  ?>
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
													<table class="table mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Equipment</th>
											<th>Current Status</th>
										</tr>
									</thead>
									<tbody>
									<?php $sqlRetrieve = "SELECT * FROM tbl_equipment WHERE eq_location =$p_id";
				                        $query = mysqli_query($conn, $sqlRetrieve);
				                        while ($row = mysqli_fetch_assoc($query)) {
				                        $eq_id = $row["eq_id"];
				                        $eq_name = $row["eq_name"];
				                        $eq_description = $row["eq_description"];
				                        $eq_purchase_date = $row["eq_purchase_date"];
				                        $eq_purchase_price = $row["eq_purchase_price"];
				                        $eq_status = $row["eq_status"];
				                        $eq_deployment = $row["eq_deployment"];
				                        $eq_location = $row["eq_location"];

				                        

				                        if ($eq_status =="Stocked") {
				                        	$stats = "color:red;font-weight: bolder;font-size: 14px;";
				                        }elseif ($eq_status =="Under Repair") {
				                        	$stats = "color:orange;font-weight: bolder;font-size: 14px;";
				                        }else{
				                        	$stats = "color:green;font-weight: bolder;font-size: 14px;";
				                        }

				                         ?>
				                      <tr>
				                        <td><?php echo $eq_name.'/'.$eq_description; ?></td>
				                        <td style="<?php echo $stats; ?>"><?php echo $eq_status?></td>
				                        


				                        
				                      </tr>
				                      <?php }  ?>
				                    </tbody>
								</table>
												</div>
											</div>
										</div>
										
										
									</div>
								</div>
				
								<div class="col-md-5">
									<div class="widget-summary widget-summary-xlg">
											<div class="widget-summary-col widget-summary-col-icon">
												<?php 
													$primary = "<div class='summary-icon bg-primary'>
													$daysLeft</div>";
													$danger = "<div class='summary-icon bg-danger'>
													$daysLeft</div>";
													$warning = "<div class='summary-icon bg-warning'>
													$daysLeft</div>";
												if ($daysLeft >= '5') {
													echo $primary;
												}elseif ($daysLeft < '1') {
													echo $danger;
												}elseif ($daysLeft = '1') {
													echo $warning;
												}

												 ?>
												
											</div>
											<?php  
							$sqlRetrive1 = "SELECT * FROM tbl_tasks WHERE t_pid = $p_id ";
						    $taskAllResult = mysqli_query($conn, $sqlRetrive1);
						    $taskAllCheck =  mysqli_num_rows($taskAllResult);
						    

						  	$sqlRetrive2 = "SELECT * FROM tbl_tasks WHERE t_pid = $p_id AND t_status = 'Completed'";
						    $taskResult = mysqli_query($conn, $sqlRetrive2);
						    $taskCheck =  mysqli_num_rows($taskResult);
							$percent = "";
						    

						    if ($taskAllCheck <= 0) {
						    	$percent = "NA";
						    }else{
						    $percent = ($taskCheck/$taskAllCheck)*100;

						    }
						?>
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

				<form action="includes/projectAddDays.inc.php" method="POST">
								    
								  <!-- Modal Add Material-->
								  <?php include 'modals/projectAddDays.php'; ?>
								<!--Modal End-->
								 </form>

				<form action="includes/FinishProject.inc.php" method="POST">
								    
								  <!-- Modal Add Material-->
								  <?php include 'modals/FinishProject.php'; ?>
								<!--Modal End-->
								 </form>
				<!--section1 end-->
<form action="includes/addTask.inc.php" method="POST">
								    
								  <!-- Modal Add Material-->
								  <?php include 'modals/projectTask.php'; ?>
								<!--Modal End-->
								 </form>
				<!--task section start-->
				<section class="panel">
					<header class="panel-heading">
						
						<h2 class="panel-title">Task to be Completed
							<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-pname="<?php echo $p_name; ?>" data-pid="<?php echo $p_id; ?>" id="task" data-target="#projectTask"><i class="fa fa-plus"></i> Add Task</button>
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
										<?php $sqlRetrieve = "SELECT * FROM tbl_tasks WHERE t_pid='$p_id' ORDER BY t_id ASC";
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
										        	<form action="includes/taskUpdate.inc.php" method="POST">
										        		<input type="hidden" name="t_id" value="<?php echo $t_id; ?>">
										        		<input type="hidden" name="p_id" value="<?php echo $p_id; ?>">
										        		<?php if ($t_status =="Completed") {
										        			$photoRetrieve = "SELECT * FROM tbl_photo_task WHERE tid='$t_id'";
										        			$queryPhoto = mysqli_query($conn, $photoRetrieve);
															while ($row = mysqli_fetch_assoc($queryPhoto)) {
																$id = $row["id"];
																$pid = $row["pid"];
																$tid = $row["tid"];
																$uid = $row["uid"];
																$photo = $row["photo"];
																$upload_date = $row["upload_date"];

								echo "<a type='button' href='photoproof.php?id=$id' class='btn btn-info btn-xs'>Photo Proof</a>";
															}
										        		}else{
										        			echo "On Progress";
										        		} ?>
										        		
										        	</form>
										        </td>
									        </tr>
									    <?php } ?>
									    </tbody>
									</table>
								</div>
								<form action="includes/request.inc.php" method="POST">
								    
								  <!-- Modal Add Material-->
								  <?php include 'modals/requestShow.php'; ?>
								<!--Modal End-->
								 </form>
								 <form action="includes/addExpense.inc.php" method="POST">
								    
								  <!-- Modal Add Material-->
								  <?php include 'modals/addExpense.php'; ?>
								<!--Modal End-->
								 </form>
								<div class="col-md-6">
									<h4>Current Expenses
									<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-p_id="<?php echo $p_id; ?>" data-p_bleft="<?php echo $p_bleft; ?>" data-p_expense="<?php echo $p_expense; ?>" data-target="#addExpense"><i class="fa fa-plus"></i> Add Expense
									</button>
								</h4>
									<table class="table table-striped mb-none" id="datatable-default">
										<thead>
											<tr>
												<th>Date</th>
												<th>Expense Type</th>
												<th>Price</th>
												<th>Description</th>
											</tr>
										</thead>
									<?php  
									$reqRetrieve = "SELECT * FROM tbl_expenses WHERE e_pid='$p_id' ORDER BY e_date ASC";
										$queryreq = mysqli_query($conn, $reqRetrieve);
										while ($rowReq = mysqli_fetch_assoc($queryreq)) {
										$e_id = $rowReq["e_id"];
										$e_type = $rowReq["e_type"];
										$e_price = $rowReq["e_price"];
										$e_date = $rowReq["e_date"];

										$e_description = $rowReq["e_description"];
									?>
											<tr>

									            <td><?php echo $e_date; ?></td>
									           	<td><?php echo $e_type; ?></td>
									           	<td><?php echo $e_price; ?></td>
									           	<td><?php echo $e_description; ?></td>
									        </tr>
									<?php } ?>    
									 	</tbody>
									</table>
								</div>
							</div>
						</div>
					</header>
					
				</section>
				<!--task section end-->

			</div>

			<!-- end: page -->
	</section>
<?php } } }?>
	<?php include 'layouts/adminFooter.php'; ?>
