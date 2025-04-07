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
								<a href="dashboard.php"><img src="assets/img/home.svg" alt="sidebar_img"> <span>Dashboard</span></a>
							</li>
							<li>
								<a href="employee.php"><img src="assets/img/employee.svg" alt="sidebar_img"><span> Employees</span></a>
							</li>
							<li>
								<a href="company.php"><img src="assets/img/company.svg" alt="sidebar_img"> <span> Company</span></a>
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
								<li class="breadcrumb-item"><a href="index.php">Home</a>
								</li>
								<li class="breadcrumb-item active"> Activities</li>
							</ul>
							<h3>Activities</h3>
						</div>
					</div>
					<div class="col-md-12">
						<div class="activity">
							<div class="activity-box">
								<ul class="activity-list">
									<li>
										<div class="activity-user">
											<a href="profile.php" title="" data-toggle="tooltip" class="avatar" data-original-title="Lesley Grauer">
												<img alt="Lesley Grauer" src="assets/img/user.jpg" class="img-fluid rounded-circle">
											</a>
										</div>
										<div class="activity-content">
											<div class="timeline-content">
												<a href="profile.php" class="name">Lesley Grauer</a> buy new coin <a href="#">BTC</a>
												<span class="time">4 mins ago</span>
											</div>
										</div>
										<a class="activity-delete" href="" title="Delete">×</a>
									</li>
									<li>
										<div class="activity-user">
											<a href="profile.php" title="" data-toggle="tooltip" class="avatar" data-original-title="Lesley Grauer">
												<img alt="Lesley Grauer" src="assets/img/profiles/avatar-02.jpg" class="img-fluid rounded-circle">
											</a>
										</div>
										<div class="activity-content">
											<div class="timeline-content">
												<a href="profile.php" class="name">Jeffery Lalor</a> added <a href="profile.php" class="name">Loren Gatlin</a> and <a href="profile.php" class="name">Tarah Shropshire</a> to project <a href="#">Crypto</a>
												<span class="time">6 mins ago</span>
											</div>
										</div>
										<a class="activity-delete" href="" title="Delete">×</a>
									</li>
									<li>
										<div class="activity-user">
											<a href="profile.php" title="" data-toggle="tooltip" class="avatar" data-original-title="Lesley Grauer">
												<img alt="Lesley Grauer" src="assets/img/profiles/avatar-04.jpg" class="img-fluid rounded-circle">
											</a>
										</div>
										<div class="activity-content">
											<div class="timeline-content">
												<div class="timeline-content">
													<a href="profile.php" class="name">Catherine Manseau</a> completed task <a href="#">Crypto coin sell with payment gateway</a>
													<span class="time">12 mins ago</span>
												</div>
											</div>
										</div>
										<a class="activity-delete" href="" title="Delete">×</a>
									</li>
									<li>
										<div class="activity-user">
											<a href="profile.php" title="" data-toggle="tooltip" class="avatar" data-original-title="Lesley Grauer">
												<img alt="Lesley Grauer" src="assets/img/user.jpg" class="img-fluid rounded-circle">
											</a>
										</div>
										<div class="activity-content">
											<div class="timeline-content">
												<a href="profile.php" class="name">Lesley Grauer</a> buy new coin <a href="#">BTC</a>
												<span class="time">4 mins ago</span>
											</div>
										</div>
										<a class="activity-delete" href="" title="Delete">×</a>
									</li>
									<li>
										<div class="activity-user">
											<a href="profile.php" title="" data-toggle="tooltip" class="avatar" data-original-title="Lesley Grauer">
												<img alt="Lesley Grauer" src="assets/img/profiles/avatar-05.jpg" class="img-fluid rounded-circle">
											</a>
										</div>
										<div class="activity-content">
											<div class="timeline-content">
												<a href="profile.php" class="name">Jeffery Lalor</a> added <a href="profile.php" class="name">Loren Gatlin</a> and <a href="profile.php" class="name">Tarah Shropshire</a> to project <a href="#">Crypto</a>
												<span class="time">6 mins ago</span>
											</div>
										</div>
										<a class="activity-delete" href="" title="Delete">×</a>
									</li>
									<li>
										<div class="activity-user">
											<a href="profile.php" title="" data-toggle="tooltip" class="avatar" data-original-title="Lesley Grauer">
												<img alt="Lesley Grauer" src="assets/img/profiles/avatar-07.jpg" class="img-fluid rounded-circle">
											</a>
										</div>
										<div class="activity-content">
											<div class="timeline-content">
												<div class="timeline-content">
													<a href="profile.php" class="name">Catherine Manseau</a> completed task <a href="#">Crypto coin sell with payment gateway</a>
													<span class="time">12 mins ago</span>
												</div>
											</div>
										</div>
										<a class="activity-delete" href="" title="Delete">×</a>
									</li>
								</ul>
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