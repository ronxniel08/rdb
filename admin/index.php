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
					<li><span>Admin Dashboard</span></li>
				</ol>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</div>
		</header>
		<!-- start: page -->
		<div class="container-fluid">
	        	<?php
			$conn = new mysqli("localhost", "root", "", "builders") or die(mysqli_error());

				$sqlRetriveAll = "SELECT * FROM tbl_equipment";
	            $resultAll = mysqli_query($conn, $sqlRetriveAll);
	            $resultCheckAll =  mysqli_num_rows($resultAll);

	            $sqlRetrive = "SELECT * FROM tbl_notify WHERE n_seen ='No' ";
	            $result = mysqli_query($conn, $sqlRetrive);
	            $resultCheckNotify =  mysqli_num_rows($result);

	            $sqlRetrive2 = "SELECT * FROM tbl_projects WHERE p_id!='0'";
	            $result2 = mysqli_query($conn, $sqlRetrive2);
	            $resultCheckProject =  mysqli_num_rows($result2);

	            $sqlRetrive3 = "SELECT * FROM tbl_recent_project";
	            $result3 = mysqli_query($conn, $sqlRetrive3);
	            $resultCheckProjectRecent =  mysqli_num_rows($result3);
	        ?>
		        
	    	<a href="myequipments.php">
		        <div class="col-md-4">
		        	<div class="panel-body bg-primary">
						<div class="widget-summary widget-summary-lg">
							<div class="widget-summary-col widget-summary-col-icon">
								<div class="summary-icon bg-success">
									<i class="fa fa-truck"></i>
								</div>
							</div>
							<div class="widget-summary-col">
								<div class="summary">
									<h4 class="title">All Equipment</h4>
										<div class="info">
											<strong class="amount"><?php echo $resultCheckAll ?></strong>
										</div>
								</div>
							</div>
						</div>
					</div>
		        </div>
		    </a>
	        <a href="myprojects.php">
	        	<div class="col-md-4">
		        	<div class="panel-body bg-warning">
						<div class="widget-summary widget-summary-lg">
							<div class="widget-summary-col widget-summary-col-icon">
								<div class="summary-icon bg-success">
									<i class="fa fa-building"></i>
								</div>
							</div>
							<div class="widget-summary-col">
								<div class="summary">
									<h5 class="title">On Going Project</h5>
										<div class="info">
											<strong class="amount"><?php echo $resultCheckProject ?></strong>
										</div>
								</div>
							</div>
						</div>
					</div>
		        </div>
		    </a>
		        <a href="recentProject.php">
		        <div class="col-md-4">
		        	<div class="panel-body bg-success">
						<div class="widget-summary widget-summary-lg">
							<div class="widget-summary-col widget-summary-col-icon">
								<div class="summary-icon bg-success">
									<i class="fa fa-building"></i>
								</div>
							</div>
							<div class="widget-summary-col">
								<div class="summary">
									<h4 class="title">Recent Project</h4>
										<div class="info">
											<strong class="amount"><?php echo $resultCheckProjectRecent ?></strong>
										</div>
								</div>
							</div>
						</div>
					</div>
		        </div>
		        </a>
        </div>
        <br>
        <form action="includes/showNotification.inc.php" method="POST">			    
				<!-- Modal -->
					<?php include 'modals/showNotification.php'; ?>
				<!--Modal End-->
				</form>
				<form action="includes/requestShow.inc.php" method="POST">			    
				<!-- Modal -->
					<?php include 'modals/requestShow.php'; ?>
				<!--Modal End-->
				</form>
        <div class="col-md-6">
        	<section class="panel">
							<header class="panel-heading">
								
								<h2 class="panel-title">UnSeen Notifications &nbsp;&nbsp;&nbsp;&nbsp;
								</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Date</th>
											<th>Type</th>
											<th>Employee</th>
											<th>Option</th>
										</tr>
									</thead>
									<tbody>
									<?php $sqlRetrieve = "SELECT * FROM tbl_notify WHERE n_seen='No' ORDER BY n_id ASC";
				                        $query = mysqli_query($conn, $sqlRetrieve);
				                        while ($row = mysqli_fetch_assoc($query)) {
				                        $n_type = $row["n_type"];
				                        $n_id = $row["n_id"];
				                        $n_message = $row["n_message"];
				                        $n_user = $row["n_user"];
				                        $n_date = $row["n_date"];

				                        

				                        $sqlRetrieve2 = "SELECT * FROM tbl_users WHERE u_id ='$n_user' ";
				                        $query2 = mysqli_query($conn, $sqlRetrieve2);
				                        while ($row2 = mysqli_fetch_assoc($query2)) {
				                        
				                        $u_fullname = $row2["u_fullname"];
				                        $u_position = $row2["u_position"];


				                         ?>
				                      <tr>
				                        <td><?php echo $n_date; ?></td>
				                        <td><?php echo $n_type?></td>
				                        <td><?php echo $u_fullname.' / '. $u_position ?></td>
				                        <td style="text-align: center;"><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-n_id="<?php echo $n_id; ?>" data-n_type="<?php echo $n_type; ?>" data-n_message="<?php echo $n_message; ?>" data-u_fullname="<?php echo $u_fullname; ?>" id="pid" data-target="#showNotification"> Show</button>	
				                        </td>


				                        
				                      </tr>
				                      <?php } }?>
				                    </tbody>
								</table>
									</div>
								</div>
								
							</div>
							
						</section>
        </div>

        <div class="col-md-6">
        	<section class="panel">
							<header class="panel-heading">
								
								<h2 class="panel-title">Pending Requests &nbsp;&nbsp;&nbsp;&nbsp;
								</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Date</th>
											<th>Type</th>
											<th>Employee</th>
											<th>Option</th>
										</tr>
									</thead>
									<tbody>
									<?php $sqlReq = "SELECT * FROM tbl_request WHERE status='Pending' ORDER BY seen ASC";
				                        $queryReq = mysqli_query($conn, $sqlReq);
				                        while ($rowReq = mysqli_fetch_assoc($queryReq)) {
				                        $id = $rowReq["id"];
				                        $uid = $rowReq["uid"];
				                        $pid = $rowReq["pid"];
				                        $type = $rowReq["type"];
				                        $description = $rowReq["description"];
				                        $date = $rowReq["date"];
				                        $status = $rowReq["status"];
				                        $seen = $rowReq["seen"];

				                        

				                        $sqlRetrieve3 = "SELECT * FROM tbl_users WHERE u_id ='$uid' ";
				                        $query3 = mysqli_query($conn, $sqlRetrieve3);
				                        while ($row3 = mysqli_fetch_assoc($query3)) {
				                        
				                        $u_fullname = $row3["u_fullname"];
				                        $u_position = $row3["u_position"];
				                        $bg ="";
				                        if ($seen =='Yes') {
				                        	$bg = '<i class="fa fa-check"></i>';
				                        }else{
				                        	$bg = '';
				                        }

				                         ?>
				                      <tr >
				                        <td><?php echo $bg.' '.$date; ?></td>
				                        <td><?php echo $type?></td>
				                        <td><?php echo $u_fullname.' / '. $u_position ?></td>
				                        <td style="text-align: center;"><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-id="<?php echo $id; ?>" data-uid="<?php echo $u_fullname.''.$u_position; ?>" data-type="<?php echo $type; ?>" data-date="<?php echo $date; ?>" data-description="<?php echo $description; ?>" id="pid" data-target="#requestShow"> Show</button>	
				                        </td>


				                        
				                      </tr>
				                      <?php } }?>
				                    </tbody>
								</table>
									</div>
								</div>
								
							</div>
							
						</section>
        </div>
	</section>
</div>

<?php include 'layouts/adminFooter.php'; ?>