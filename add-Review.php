<?php
	include_once("includes/system_header.php");
	include_once("includes/system_main_wraper.php");
	include_once("includes/system_navbar.php");
?>
<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div class="sidebar-contents">
					<div id="sidebar-menu" class="sidebar-menu">
						<div class="mobile-show">
							<div class="offcanvas-menu">
								<div class="user-info align-center bg-theme text-center">
									<span class="lnr lnr-cross  text-white" id="mobile_btn_close">X</span>
									<a href="javascript:void(0)" class="d-block menu-style text-white">
										<div class="user-avatar d-inline-block mr-3">
											 <img src="assets/img/profile.jpg" alt="user avatar" class="rounded-circle" width="50">
										</div>
									</a>
								</div>
							</div>
							<div class="sidebar-input">
								 
							</div>
						</div>
						<ul>
							<li>
								<a href="dashboard.php"><img src="assets/img/home.svg" alt="sidebar_img"> <span>Dashboard</span></a>
							</li>
							<li>
								<a href="employee.php"><img src="assets/img/employee.svg" alt="sidebar_img"><span> Employees</span></a>
							</li>
							<li>
								<a href="#"><img src="assets/img/company.svg" alt="sidebar_img"> <span> Company</span></a>
							</li>
							<li>
								<a href="calendar.php"><img src="assets/img/calendar.svg" alt="sidebar_img"> <span>Calendar</span></a>
							</li>
							<li>
								<a href="leave.php"><img src="assets/img/leave.svg" alt="sidebar_img"> <span>Leave</span></a>
							</li>
							<li class="active">
								<a href="review.php"><img src="assets/img/review.svg" alt="sidebar_img"><span>Attendance</span></a>
							</li>
							<li>
								<a href="report.php"><img src="assets/img/report.svg" alt="sidebar_img"><span>Report</span></a>
							</li>
							<li>
								<a href="manage.php"><img src="assets/img/manage.svg" alt="sidebar_img"> <span>Manage</span></a>
							</li>
							<li>
								<a href="settings.php"><img src="assets/img/settings.svg" alt="sidebar_img"><span>Settings</span></a>
							</li>
							<li>
								<a href="profile.php"><img src="assets/img/profile.svg" alt="sidebar_img"> <span>Profile</span></a>
							</li>
						</ul>
						<ul class="logout">
							<li>
								<a href="login.php"><img src="assets/img/logout.svg" alt="sidebar_img"><span>Log out</span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>


		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="row">
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="breadcrumb-path mb-4">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb">Home</a>
								</li>
								<li class="breadcrumb-item active"> Attendances</li>
							</ul>
							<h3>Create Attendance</h3>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="card">
							<div class="card-header">
								<h2 class="card-titles">Setup</h2>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-xl-12 col-sm-12 col-12 ">
										<div class="form-group">
											<label>Attendance Name <span class="mandatory">*</span> </label>
											<input type="text" placeholder="Attendance Name">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-6 col-sm-12 col-12 ">
										<div class="form-group">
											<label>Begins on </label>
											<input type="text">
										</div>
									</div>
									<div class="col-xl-6 col-sm-12 col-12 ">
										<div class="form-group">
											<label>Completion Date</label>
											<input type="text">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12 col-sm-12 col-12 ">
										<div class="form-group">
											<label>Attendance Frequency</label>
											<input type="text">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="card ">
							<div class="card-header">
								<h2 class="card-titles">Participants</h2>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-xl-6 col-sm-6 col-12 ">
										<div class="form-group">
											<label>Begins on </label>
											<select class="select">
												<option value="Select leave">Select leave</option>
												<option value="leave">Casual leave</option>
												<option value="leave">Earned leave</option>
											</select>
										</div>
									</div>
									<div class="col-xl-6 col-sm-6 col-12 ">
										<div class="form-group">
											<label>Completion Date</label>
											<select class="select">
												<option value="Select leave">Select leave</option>
												<option value="leave">Casual leave</option>
												<option value="leave">Earned leave</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="card">
							<div class="card-header">
								<h2 class="card-titles">Form</h2>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-xl-12 col-sm-12 col-12 ">
										<div class="form-group">
											<textarea rows="4" cols="50">Explain What This Attendance Is To, How It's Going To Be Run, How Everyone Can Prepare.	</textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12 col-sm-12 col-12">
										<div class="form-group">
											<textarea rows="4" cols="50">Add Questions For The People Being Attendanceed.	</textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12 col-sm-12 col-12 mb-3">
										<div class="creation-btn">
											<ul>
												<li><a class="action_label3">Add <i data-feather="plus"></i></a></li>
												<li><a class="action_label4">Delete <i data-feather="trash-2"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12 col-sm-12 col-12 ">
										<div class="form-group">
											<textarea rows="4" cols="50">Add Questions For The People Being Reviewed.	</textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12 col-sm-12 col-12 mb-5">
										<div class="creation-btn">
											<ul>
												<li><a class="action_label3">Add <i data-feather="plus"></i></a></li>
												<li><a class="action_label4">Delete <i data-feather="trash-2"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12 col-sm-12 col-12 ">
										<div class="form-btn">
											<a href="#" class="btn btn-apply">Save</a>
											<a href="#" class="btn btn-secondary">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>


	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<script src="assets/js/feather.min.js"></script>

	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<script src="assets/js/script.js"></script>
</body>

</html>