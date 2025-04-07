<?php
	include_once("includes/system_header.php");
	include_once("includes/system_main_wraper.php");
	include_once("includes/system_navbar.php");
?>
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
								<a href="index.php"><img src="assets/img/home.svg" alt="sidebar_img"> <span>Dashboard</span></a>
							</li>
							<li>
								<a href="employee.php"><img src="assets/img/employee.svg" alt="sidebar_img"><span> Employees</span></a>
							</li>
							<li>
								<a href="company.php"><img src="assets/img/company.svg" alt="sidebar_img"> <span> Company</span></a>
							</li>
							<li>
								<a href="calendar.php"><img src="assets/img/calendar.svg" alt="sidebar_img"> <span>Calendar</span></a>
							</li>
							<li>
								<a href="leave.php"><img src="assets/img/leave.svg" alt="sidebar_img"> <span>Leave</span></a>
							</li>
							<li>
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
							<li class="active">
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
						<div class="breadcrumb-path mb-3">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb">Home</a>
								</li>
								<li class="breadcrumb-item active"> Profile</li>
							</ul>
							<h3>Profile </h3>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 mb-3">
						<div class="head-link-set">
							<ul>
								<li><a href="profile.php">Employement</a></li>
								<li><a href="profile-detail.php">Detail</a></li>
								<li><a href="#" class="active">Document</a></li>
								<li><a href="profile-payroll.php">Payroll</a></li>
								<li><a href="profile-timeoff.php">Timeoff</a></li>
								<li><a href="profile-review.php">Attendances</a></li>
								<li><a href="profile-setting.php">Settings</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 mb-3">
						<div class="row">
							<div class="col-xl-12 col-sm-6 col-12 ">
								<div class="card">
									<div class="card-header">
										<h2 class="card-titles">Payroll Details</h2>
									</div>
									<div class="card-body">
										<div class="member-date">
											<ul>
												<li>
													<label>Add Bank Name</label>
													<a class="edit-link"><i data-feather="edit"></i> </a>
												</li>
												<li>
													<label>Add Bank Account Number</label>
													<a class="edit-link"><i data-feather="edit"></i> </a>
												</li>
												<li>
													<label>Add Bank Sort Code</label>
													<a class="edit-link"><i data-feather="edit"></i> </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="row">
							<div class="col-xl-4 col-sm-12 col-12 d-flex">
								<div class="card card-lists flex-fill">
									<div class="card-header">
										<h2 class="card-titles">Basic Information</h2>
										<ul>
											<li><a class="plus"><i data-feather="plus"></i></a></li>
											<li><a class="delete"><i data-feather="trash-2"></i></a></li>
										</ul>
									</div>
									<div class="card-body">
										<div class="member-info">
											<ul>
												<li>
													<label>Bank Name</label>
													<span>Life Essence Banks, Inc.</span>
												</li>
												<li>
													<label>Bank Account Number</label>
													<span>112300987652</span>
												</li>
												<li>
													<label>Bank Sort Code</label>
													<span>LE00652</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-12 col-12 d-flex">
								<div class="card card-lists flex-fill">
									<div class="card-header">
										<h2 class="card-titles">P45</h2>
									</div>
									<div class="card-body">
										<div class="member-date">
											<ul>
												<li class="border-0 px-0">
													<label><img src="assets/img/pdf.png" alt="pdf" class="mr-3" />Passport.pdf</label>
													<a class="edit-link"><i data-feather="edit"></i> </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-12 col-12 d-flex">
								<div class="card card-lists flex-fill">
									<div class="card-header">
										<h2 class="card-titles">P45</h2>
									</div>
									<div class="card-body">
										<div class="member-date">
											<ul>
												<li>
													<label>Current Salary</label>
													<a class="edit-link">₱ <i data-feather="edit"></i> </a>
												</li>
											</ul>
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


	<div class="customize_popup">
		<div class="modal fade" id="adddocument" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Add Document</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class=" col-md-12 p-0">
							<div class=" form-popup">
								<label>Document Description</label>
								<input type="text">
							</div>
							<div class=" form-popup">
								<div class="file-uploads">
									<label for="upload_img">
										<input type="file" id="upload_img" />
										<span>Upload</span>
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary">Add</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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

	<script src="assets/js/script.js"></script>
</body>

</html>