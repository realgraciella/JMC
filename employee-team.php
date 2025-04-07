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
							<li class="active">
								<a href="employee.php"><img src="assets/img/employee.svg" alt="sidebar_img"><span> Employees</span></a>
							</li>

							<li>
								<a href="leave.php"><img src="assets/img/leave.svg" alt="sidebar_img"> <span>Leave</span></a>
							</li>
							<li>
								<a href="review.php"><img src="assets/img/review.svg" alt="sidebar_img"><span>Attendance</span></a>
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
					<div class="col-xl-12 col-sm-12 col-12 mb-4">
						<div class="breadcrumb-path ">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb" />Home</a>
								</li>
								<li class="breadcrumb-item active"> Employees</li>
							</ul>
							<h3>Employees</h3>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 mb-4">
						<div class="head-link-set">
							<ul>
								<li><a href="employee.php">All</a></li>
								<li><a class="active" href="#">Teams</a></li>
								<li><a href="employee-office.php">Offices</a></li>
						<li><a href="employee-job.php">Job</a></li>
							</ul>
							<a class="btn-add" data-toggle="modal" data-target="#addteam"><i data-feather="plus"></i> Add Employee</a>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="card m-0">
							<div class="card-body pb-0">
								<div class="row">
									<div class="col-xl-6">
										<div class="card">
											<div class="card-header">
												<div class="employee-head">
													<h2>PHP</h2>
													<ul>
														<li><a class="edit_employee" data-toggle="modal" data-target="#edit"><i data-feather="edit"></i></a></li>
														<li><a class="edit_delete" data-toggle="modal" data-target="#delete"><i data-feather="trash-2"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="card-body">
												<div class="employee-content">
													<div class="employee-image">
														<div class="avatar-group">
															<div class="avatar avatar-xs group_img group_header">
																<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-14.jpg">
															</div>
															<div class="avatar avatar-xs group_img group_header">
																<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-15.jpg">
															</div>
														</div>
													</div>
													<a class="btn-addmember" data-toggle="modal" data-target="#addteam">Add Members</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="card">
											<div class="card-header">
												<div class="employee-head">
													<h2>Designing</h2>
													<ul>
														<li><a class="edit_employee" data-toggle="modal" data-target="#edit"><i data-feather="edit"></i></a></li>
														<li><a class="edit_delete" data-toggle="modal" data-target="#delete"><i data-feather="trash-2"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="card-body">
												<div class="employee-content">
													<div class="employee-image">
														<div class="avatar-group">
															<div class="avatar avatar-xs group_img group_header">
																<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-14.jpg">
															</div>
															<div class="avatar avatar-xs group_img group_header">
																<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-15.jpg">
															</div>
														</div>
													</div>
													<a class="btn-addmember" data-toggle="modal" data-target="#addteam">Add Members</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-6">
										<div class="card">
											<div class="card-header">
												<div class="employee-head">
													<h2>IOS</h2>
													<ul>
														<li><a class="edit_employee" data-toggle="modal" data-target="#edit"><i data-feather="edit"></i></a></li>
														<li><a class="edit_delete" data-toggle="modal" data-target="#delete"><i data-feather="trash-2"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="card-body">
												<div class="employee-content">
													<div class="employee-image">
														<div class="avatar-group">
															<div class="avatar avatar-xs group_img group_header">
																<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-14.jpg">
															</div>
															<div class="avatar avatar-xs group_img group_header">
																<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-15.jpg">
															</div>
														</div>
													</div>
													<a class="btn-addmember" data-toggle="modal" data-target="#addteam">Add Members</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="card">
											<div class="card-header">
												<div class="employee-head">
													<h2>Android</h2>
													<ul>
														<li><a class="edit_employee" data-toggle="modal" data-target="#edit"><i data-feather="edit"></i></a></li>
														<li><a class="edit_delete" data-toggle="modal" data-target="#delete"><i data-feather="trash-2"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="card-body">
												<div class="employee-content">
													<div class="employee-image">
														<div class="avatar-group">
															<div class="avatar avatar-xs group_img group_header">
																<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-14.jpg">
															</div>
															<div class="avatar avatar-xs group_img group_header">
																<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-15.jpg">
															</div>
														</div>
													</div>
													<a class="btn-addmember" data-toggle="modal" data-target="#addteam">Add Members</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-6">
										<div class="card">
											<div class="card-header">
												<div class="employee-head">
													<h2>Business</h2>
													<ul>
														<li><a class="edit_employee" data-toggle="modal" data-target="#edit"><i data-feather="edit"></i></a></li>
														<li><a class="edit_delete"><i data-feather="trash-2"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="card-body">
												<div class="employee-content">
													<div class="employee-image">
														<div class="avatar-group">
															<div class="avatar avatar-xs group_img group_header">
																<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-14.jpg">
															</div>
															<div class="avatar avatar-xs group_img group_header">
																<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-15.jpg">
															</div>
														</div>
													</div>
													<a class="btn-addmember" data-toggle="modal" data-target="#addteam">Add Members</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="card">
											<div class="card-header">
												<div class="employee-head">
													<h2>Testing</h2>
													<ul>
														<li><a class="edit_employee" data-toggle="modal" data-target="#edit"><i data-feather="edit"></i></a></li>
														<li><a class="edit_delete"><i data-feather="trash-2"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="card-body">
												<div class="employee-content">
													<div class="employee-image">
														<div class="avatar-group">
															<div class="avatar avatar-xs group_img group_header">
																<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-14.jpg">
															</div>
															<div class="avatar avatar-xs group_img group_header">
																<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-15.jpg">
															</div>
														</div>
													</div>
													<a class="btn-addmember" data-toggle="modal" data-target="#addteam">Add Members</a>
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
		</div>


		<div class="customize_popup">
			<div class="modal fade" id="addteam" tabindex="-1" aria-labelledby="staticBackdropLabela" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabela">Create New Team</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class=" col-md-12 p-0">
								<div class=" form-popup m-0">
									<input type="text" placeholder="Name">
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
		<div class="customize_popup">
			<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="staticBackdropLa" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLa">Edit Employee</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class=" col-md-12 p-0">
								<div class=" form-popup m-0">
									<input type="text" placeholder="Name">
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
		<div class="customize_popup">
			<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="staticBackdropLabels1" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered ">
					<div class="modal-content">
						<div class="modal-header text-centers border-0">
							<h5 class="modal-title text-center" id="staticBackdropLabels1">Are You Sure Want to Delete?</h5>
						</div>
						<div class="modal-footer text-centers">
							<button type="button" class="btn btn-primary">Delete</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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
	
	<script src="assets/js/script.js"></script>
</body>

</html>