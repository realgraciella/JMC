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
								<li><a class="active" href="#">Payroll</a></li>
								<li><a href="profile-timeoff.php">Timeoff</a></li>
								<li><a href="profile-setting.php">Settings</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 mb-4">
						<div class="row">
							<div class="col-xl-12 col-sm-12 col-12">
								<div class="card ">
									<div class="card-header">
										<h2 class="card-titles">Payroll Forms</h2>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table  custom-table no-footer border">
												<thead>
													<tr>
														<th> Name </th>
														<th>Active</th>
														<th>Email</th>
														<th>Salary </th>
														<th>Bank Name</th>
														<th>Account Number</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="table-img">
																<a href="profile.php"><img src="assets/img/profiles/avatar-10.jpg" alt="profile" class="img-table"></a>
																<label>Danny Ward</label>
															</div>
														</td>
														<td class="tab-select">
															<select class="select">
																<option value="active">Active</option>
																<option value="inactive">Inactive</option>
															</select>
														</td>
														<td><label><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4420252a3d3325362004213c25293428216a272b29">[email&#160;protected]</a> </label></td>
														<td><label>$4000</label></td>
														<td><label>Life Essence Banks, Inc.</label></td>
														<td><label>112300987652</label></td>
													</tr>
													<tr>
														<td>
															<div class="table-img">
																<a href="profile.php"><img src="assets/img/profiles/avatar-17.jpg" alt="profile" class="img-table"></a>
																<label>Graciella Relevo
																</label>
															</div>
														</td>
														<td class="tab-select">
															<select class="select">
																<option value="active">Active</option>
																<option value="inactive">Inactive</option>
															</select>
														</td>
														<td><label><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="187471767c797b6a796e7d6a587d60797568747d367b7775">[email&#160;protected]</a></label></td>
														<td><label>$3000</label></td>
														<td><label>Life Essence Banks, Inc.</label></td>
														<td><label>112300987652</label></td>
													</tr>
													<tr>
														<td>
															<div class="table-img">
																<a href="profile.php"><img src="assets/img/profiles/avatar-19.jpg" alt="profile" class="img-table"></a>
																<label>Jenni Sims</label>
															</div>
														</td>
														<td class="tab-select">
															<select class="select">
																<option value="active">Active</option>
																<option value="inactive">Inactive</option>
															</select>
														</td>
														<td><label><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="79131c1717100a10140a391c01181409151c571a1614">[email&#160;protected]</a></label></td>
														<td><label>$4000</label></td>
														<td><label>Life Essence Banks, Inc.</label></td>
														<td><label>112300987652</label></td>
													</tr>
													<tr>
														<td>
															<div class="table-img">
																<a href="profile.php"><img src="assets/img/profiles/avatar-14.jpg" alt="profile" class="img-table"></a>
																<label>Maria Cotton</label>
															</div>
														</td>
														<td class="tab-select">
															<select class="select">
																<option value="active">Active</option>
																<option value="inactive">Inactive</option>
															</select>
														</td>
														<td><label><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c3aea2b1aaa2a0acb7b7acad83a6bba2aeb3afa6eda0acae">[email&#160;protected]</a></label></td>
														<td><label>$2000</label></td>
														<td><label>Life Essence Banks, Inc.</label></td>
														<td><label>112300987652</label></td>
													</tr>
													<tr>
														<td>
															<div class="table-img">
																<a href="profile.php"><img src="assets/img/profiles/avatar-18.jpg" alt="profile" class="img-table"></a>
																<label>John Gibbs</label>
															</div>
														</td>
														<td class="tab-select">
															<select class="select">
																<option value="active">Active</option>
																<option value="inactive">Inactive</option>
															</select>
														</td>
														<td><label><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8fe5e0e7e1ebfdf6fcebeee3eacfeaf7eee2ffe3eaa1ece0e2">[email&#160;protected]</a></label></td>
														<td><label>$4000</label></td>
														<td><label>Life Essence Banks, Inc.</label></td>
														<td><label>112300987652</label></td>
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

	</div>


	<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<script src="assets/js/feather.min.js"></script>

	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<script src="assets/js/script.js"></script>
</body>

</html>