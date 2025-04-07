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
						<div class="breadcrumb-path mb-4">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb">Home</a>
								</li>
								<li class="breadcrumb-item active"> Profile</li>
							</ul>
							<h3>Profile </h3>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 mb-4">
						<div class="head-link-set">
							<ul>
								<li><a href="profile.php">Employement</a></li>
								<li><a href="profile-detail.php">Detail</a></li>
								<li><a href="profile-document.php">Document</a></li>
								<li><a href="profile-payroll.php">Payroll</a></li>
								<li><a href="profile-timeoff.php">Timeoff</a></li>
								<li><a class="active" href="#">Attendances</a></li>
								<li><a href="profile-setting.php">Settings</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 mb-4">
						<div class="row">
							<div class="col-xl-12 col-sm-12 col-12">
								<div class="card ">
									<div class="card-header">
										<h2 class="card-titles">Attendance Forms</h2>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table  custom-table no-footer border">
												<thead>
													<tr>
														<th>Attendance Name </th>
														<th>Attendanceers</th>
														<th>Begin On</th>
														<th>Due By </th>
														<th>Status</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><label>Monthly Attendance </label></td>
														<td>
															<div class="table-img">
																<img src="assets/img/profiles/avatar-13.jpg" alt="profile" class="img-table"><label>Arvin Villaluna
																</label>
															</div>
														</td>
														<td>
															<label>15 Dec 2021</label>
														</td>
														<td>
															<label>17 Dec 2021 </label>
														</td>
														<td class="tab-select inactive">
															<select class="select">
																<option value="inactive">In Progress</option>
																<option value="active">Completed</option>
															</select>
														</td>
														<td>
															<div class="actionset">
																<label><a class="action_label5" href="add-Review.php">Edit <i data-feather="edit"></i></a></label>
																<label><a class="action_label4" data-toggle="modal" data-target="#delete">Delete <i data-feather="trash-2"></i></a></label>
															</div>
														</td>
													</tr>
													<tr>
														<td><label>Employees Attendance </label></td>
														<td>
															<div class="table-img">
																<img src="assets/img/profiles/avatar-16.jpg" alt="profile" class="img-table"><label>Graciella Relevo
																</label>
															</div>
														</td>
														<td>
															<label>05 Dec 2019 </label>
														</td>
														<td>
															<label>07 Dec 2019 </label>
														</td>
														<td class="tab-select inactive">
															<select class="select">
																<option value="inactive">In Progress</option>
																<option value="active">Completed</option>
															</select>
														</td>
														<td>
															<div class="actionset">
																<label><a class="action_label5" href="add-Review.php">Edit <i data-feather="edit"></i></a></label>
																<label><a class="action_label4" data-toggle="modal" data-target="#delete">Delete <i data-feather="trash-2"></i></a></label>
															</div>
														</td>
													</tr>
													<tr>
														<td><label>Employees Review </label></td>
														<td>
															<div class="table-img">
																<img src="assets/img/profiles/avatar-17.jpg" alt="profile" class="img-table"><label>Jenni Sims</label>
															</div>
														</td>
														<td>
															<label>05 Dec 2019 </label>
														</td>
														<td>
															<label>07 Dec 2019 </label>
														</td>
														<td class="tab-select inactive">
															<select class="select">
																<option value="inactive">In Progress</option>
																<option value="active">Completed</option>
															</select>
														</td>
														<td>
															<div class="actionset">
																<label><a class="action_label5" href="add-Review.php">Edit <i data-feather="edit"></i></a></label>
																<label><a class="action_label4" data-toggle="modal" data-target="#delete">Delete <i data-feather="trash-2"></i></a></label>
															</div>
														</td>
													</tr>
													<tr>
														<td><label>Employees Review </label></td>
														<td>
															<div class="table-img">
																<img src="assets/img/profiles/avatar-19.jpg" alt="profile" class="img-table"><label>Stacey Linville</label>
															</div>
														</td>
														<td>
															<label>05 Dec 2019 </label>
														</td>
														<td>
															<label>07 Dec 2019 </label>
														</td>
														<td class="tab-select inactive">
															<select class="select">
																<option value="inactive">In Progress</option>
																<option value="active">Completed</option>
															</select>
														</td>
														<td>
															<div class="actionset">
																<label><a class="action_label5" href="add-Review.php">Edit <i data-feather="edit"></i></a></label>
																<label><a class="action_label4" data-toggle="modal" data-target="#delete">Delete <i data-feather="trash-2"></i></a></label>
															</div>
														</td>
													</tr>
													<tr>
														<td><label>Employees Review </label></td>
														<td>
															<div class="table-img">
																<img src="assets/img/profiles/avatar-13.jpg" alt="profile" class="img-table"><label>Arvin Villaluna
																</label>
															</div>
														</td>
														<td>
															<label>05 Dec 2019 </label>
														</td>
														<td>
															<label>07 Dec 2019 </label>
														</td>
														<td class="tab-select inactive">
															<select class="select">
																<option value="inactive">In Progress</option>
																<option value="active">Completed</option>
															</select>
														</td>
														<td>
															<div class="actionset">
																<label><a class="action_label5" href="add-Review.php">Edit <i data-feather="edit"></i></a></label>
																<label><a class="action_label4" data-toggle="modal" data-target="#delete">Delete <i data-feather="trash-2"></i></a></label>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
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

	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<script src="assets/js/script.js"></script>
</body>

</html>