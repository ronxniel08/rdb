<?php 
	$id = $_GET["id"];
	$conn = new mysqli("localhost", "root", "", "builders");
	$photoRetrieve = "SELECT * FROM tbl_photo_task WHERE id='$id'";
	$queryPhoto = mysqli_query($conn, $photoRetrieve);
		while ($row = mysqli_fetch_assoc($queryPhoto)) {
			$id = $row["id"];
			$pid = $row["pid"];
			$tid = $row["tid"];
			$uid = $row["uid"];
			$photo = $row["photo"];
			$upload_date = $row["upload_date"];


	$projectRetrieve = "SELECT * FROM tbl_projects WHERE p_id='$pid'";
	$queryProject = mysqli_query($conn, $projectRetrieve);
		while ($row2 = mysqli_fetch_assoc($queryProject)) {
			$p_id = $row2["p_id"];
			$p_name = $row2["p_name"];
			$p_address = $row2["p_address"];
			$p_name = $row2["p_name"];

	$userRetrieve = "SELECT * FROM tbl_users WHERE u_id='$uid'";
	$queryUser = mysqli_query($conn, $userRetrieve);
		while ($row3 = mysqli_fetch_assoc($queryUser)) {
			$u_id = $row3["u_id"];
			$u_fullname = $row3["u_fullname"];

	$taskRetrieve = "SELECT * FROM tbl_tasks WHERE t_id='$tid'";
	$queryTask = mysqli_query($conn, $taskRetrieve);
		while ($row4 = mysqli_fetch_assoc($queryTask)) {
			$t_name = $row4["t_name"];


 ?>
 <style>
 	img{
 		height: 400px;
 		width: 600px;
 		border-radius: 10px;
 		box-shadow: 3px 3px 3px 5px;
 	}
 </style>
<!DOCTYPE html>
<title>Photo || Task</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="../assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="../assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
	<div class="container">
		<div class="row">
			<p class="h4">Photo Proof of Task Completed</p>
		</div>
		<div class="row">
		<div class="col-md-7">
				<img src="<?php echo $photo; ?>">
				
		</div>
		<div class="col-md-5">
			<h4>Task Name: <?php echo $t_name; ?></h4>
			<h4>Project: <?php echo $p_name.' at '. $p_address; ?></h4>
			<h4>Foreman In Charge: <?php echo $u_fullname; ?></h4>
			<h4>Date of Completion: <?php echo $upload_date; ?></h4>
			<br><br>
			<a type="button" href="<?php echo $photo; ?>" class="btn btn-sm btn-primary" download><i class="fa fa-download"></i> Download</a>&nbsp;&nbsp;&nbsp;
			<a type="button" href="showproject.php?id=<?php echo $pid ?>" class="btn btn-sm btn-primary">Back</a>
		</div>

	</div>
	</div>
	
	<hr>
	<p class="text-center text-muted mt-md mb-md">&copy; Created By Team YOLO 2019</p>
	<footer></footer>
	
<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>
</body>
</html>
<?php } } } } ?>