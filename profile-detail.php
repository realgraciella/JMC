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
								<a href="leave.php"><img src="assets/img/leave.svg" alt="sidebar_img"> <span>Leave</span></a>
							</li>
							<li>
								<a href="review.php"><img src="assets/img/review.svg" alt="sidebar_img"><span>Attendance</span></a>
							</li>

							<li class="active">
								<a href="profile-detail.php"><img src="assets/img/profile.svg" alt="sidebar_img"> <span>Profile</span></a>
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
								<li><a class="active" href="profile-detail.php">Detail</a></li>
								<li><a href="profile-setting.php">Settings</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="row">
							<div class="col-xl-4 col-sm-12 col-12 d-flex">
								<div class="card card-lists flex-fill">
									<div class="card-header">
										<h2 class="card-titles">Basic Information</h2>
										
									</div>
									<div class="card-body">
										<div class="member-info">
											<ul>
												<li>
													<label>Preferred Name </label>
													<span><?php echo $_SESSION['user_preferredName']  ?></span>
												</li>
												<li>
													<label>First Name </label>
													<span><?php echo $_SESSION['user_firstname'] ?></span>
												</li>
												<li>
													<label>Last Name </label>
													<span><?php echo $_SESSION['user_lastname'] ?></span>
												</li>
												<li>
													<label>Nationality </label>
													<span><?php echo $_SESSION['nationality'] ?></span>
												</li>
												<li>
													<label>Date of Birth </label>
													<span> <?php echo $_SESSION['dateOfBirth'] ?></span>
												</li>
												<li>
													<label>Gender </label>
													<span><?php echo $_SESSION['gender'] ?></span>
												</li>
												<li>
													<label>Blood Group</label>
													<span> <?php echo $_SESSION['bloodgroup'] ?></span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-12 col-12 d-flex">
								<div class="card card-lists flex-fill">
									<div class="card-header">
										<h2 class="card-titles">Contact Information</h2>
										
									</div>
									<div class="card-body">
										<div class="member-info">
											<ul>
												<li>
													<label>Phone Number </label>
													<span><?php echo $_SESSION['phoneNumber'] ?></span>
												</li>
												<li>
													<label>Personal Email</label>
													<span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7815190a11191b170c0c1716381d00191508141d561b1715">[email&#160;protected]</a></span>
												</li>
												<li>
													<label>Secondary Number </label>
													<span><?php echo $_SESSION['secondaryNumber'] ?></span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-12 col-12 ">
							<div class="card card-lists flex-fill">
        <div id="alertContainer"></div> <!-- Container for the alert -->
        <div class="card-header">
            <h2 class="card-titles">Profile Picture</h2>
            <!-- Use a button type "button" instead of "submit" to allow custom validation -->
        </div>
        <div class="card-body">
            <div class="company-logo" style="position: relative;">
                <div id="imagePreview">
                    <?php

                        echo '<img style="max-width: 100%; max-height: 300px;" src="assets/img/profile.jpg" alt="default_profile_picture" />';
                    
                    ?>
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
			<div class="modal fade" id="editinformation" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabel">Basic Information</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class=" col-md-12 p-0">
								<div class=" form-popup">
								<input type="text" id="preferredName" placeholder="Add Preferred Name">
								</div>
								<div class=" form-popup">
								<input type="text" id="firstName" placeholder="First Name">
								</div>
								<div class=" form-popup">
								<input type="text" id="lastName" placeholder="Last Name">
								</div>
								<div class=" form-popup">
								<input type="text" id="nationality" placeholder="Add Nationality">
								</div>
								<div class=" form-popup">
								<input type="text" id="dateOfBirth" placeholder="Add Date of Birth">
								</div>
								<div class=" form-popup">
								<input type="text" id="gender" placeholder="Add Gender">
								</div>
								<div class=" form-popup">
								<input type="text" id="bloodGroup" placeholder="Add Blood Group">
								</div>
							</div>
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-primary" onclick="addEmployee()">Add</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="customize_popup">
			<div class="modal fade" id="editinformations" tabindex="-1" aria-labelledby="staticBackdropLabels" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabels">Add Contact</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class=" col-md-12 p-0">
								<div class=" form-popup">
									<input type="text" placeholder="Add Phone Number">
								</div>
								<div class=" form-popup">
									<input type="text" placeholder="Login Email">
								</div>
								<div class=" form-popup">
									<input type="text" placeholder="Add Personal Email">
								</div>
								<div class=" form-popup">
									<input type="text" placeholder="Add Secondary Phone Number">
								</div>
								<div class=" form-popup">
									<input type="text" placeholder="Add Web Site">
								</div>
								<div class=" form-popup">
									<input type="text" placeholder="Connect Your Linkedin">
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
				<div class="modal-dialog modal-dialog-centered">
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


	<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<script src="assets/js/feather.min.js"></script>

	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<script src="assets/js/script.js"></script>
</body>

</html>