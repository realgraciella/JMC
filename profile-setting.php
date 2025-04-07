<?php
include("database/dbcon.php");
include_once("includes/system_header.php");
include_once("includes/system_main_wraper.php");
include_once("includes/system_navbar.php");
include_once("includes/sidebar.php");

?>

<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="row">
			<div class="col-xl-12 col-sm-12 col-12 ">
				<div class="breadcrumb-path mb-4">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php"><img src="assets/img/dash.png" class="mr-2"
									alt="breadcrumb">Home</a>
						</li>
						<li class="breadcrumb-item active"> Profile</li>
					</ul>
					<h3>Profile </h3>
				</div>
			</div>
			<div class="col-xl-12 col-sm-12 col-12 mb-4">
				<div class="head-link-set">
					<ul>

						<li><a href="profile-detail.php">Detail</a></li>
						<li><a class="active" href="#">Settings</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-12 col-sm-12 col-12 mb-4">
				<div class="row">
					<div class="col-xl-6 col-sm-12 col-12 d-flex">
						<div class="card flex-fill">
							<div class="card-header">
								<h2 class="card-titles">Change Password<span>Your password needs to be at least 8
										characters long.</span></h2>
							</div>
							<form action="update_password.php" method="POST">
								<div class="card-body">
									<div class="form-group">
										<input type="password" name="current_password" placeholder="Current Password"
											required>
									</div>
									<div class="form-group">
										<input type="password" name="new_password" placeholder="New Password" required>
									</div>
									<div class="form-group">
										<input type="password" name="repeat_password" placeholder="Repeat Password"
											required>
									</div>
									<div class="btn-set pl-0">
										<button type="submit" class="btn btn-apply" id="resetPasswordButton">Change My
											Password</button>
									</div>
								</div>
							</form>

						</div>
					</div>
					<div class="col-xl-6 col-sm-12 col-12 d-flex">
						<div class="card flex-fill">
							<div class="card-header">
								<h2 class="card-titles">Company Notification Settings<span>You will receive information
										across the whole company.</span></h2>
							</div>
							<div class="card-body">
								<div class="company-set">
									<ul>
										<li>
											<div class="company-path checkworking">
												<input type="checkbox" id="che1">
												<label for="che1">
													Weekly Summarize
													<span>Keeping you in the loop with a weekly email summarizing</span>
												</label>
											</div>
										</li>
										<li>
											<div class="company-path checkworking">
												<input type="checkbox" id="che2">
												<label for="che2">Weekly Payroll Summarize
													<span>A weekly email containing all changes related to your
														payroll..</span>
												</label>
											</div>
										</li>
										<li>
											<div class="company-path checkworking">
												<input type="checkbox" id="che3">
												<label for="che3">Visa Dates
													<span>Informs and notify the day before Visa dates for each team
														member.</span>
												</label>
											</div>
										</li>
									</ul>
								</div>
								<div class="btn-set pl-0">
									<a class="btn btn-apply">Update Notification Settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-12 col-sm-12 col-12 ">
				<div class="row">
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="card ">
							<div class="card-header">
								<h2 class="card-titles">Team Member Notification Settings<span>You will receive
										notifications only for Team Leads.</span></h2>
							</div>
							<div class="card-body">
								<div class="company-set">
									<ul>
										<li>
											<div class="company-path checkworking">
												<input type="checkbox" id="che6">
												<label for="che6">Birthdays
													<span>Reasons to party with reminders a week and a day before a team
														member’s birthday.</span>
												</label>
											</div>
										</li>
										<li>
											<div class="company-path checkworking">
												<input type="checkbox" id="che7">
												<label for="che7">Work Anniversaries
													<span>Never miss work anniversaries with reminders the week and the
														day before.</span>
												</label>
											</div>
										</li>
										<li>
											<div class="company-path checkworking">
												<input type="checkbox" id="che8">
												<label for="che8">Key Dates
													<span>Informs and notify the day before key dates for each team
														member.</span>
												</label>
											</div>
										</li>
										<li>
											<div class="company-path checkworking">
												<input type="checkbox" id="che4">
												<label for="che4">Off Boardings
													<span>Informs you when a team member has a leaving date set and
														reminds you the day before.</span>
												</label>
											</div>
										</li>
										<li>
											<div class="company-path checkworking">
												<input type="checkbox" id="che5">
												<label for="che5">Work From Home Notifications
													<span>Never miss a notification that someone will be working from
														home.</span>
												</label>
											</div>
										</li>
									</ul>
								</div>
								<div class="btn-set pl-0">
									<a class="btn btn-apply">Update Notification Settings</a>
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
	<div class="modal fade" id="changePassword" tabindex="-1" aria-labelledby="staticBackdropLabels" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header text-centers border-0">
					<h5 class="modal-title text-center" id="staticBackdropLabels1">Are You Sure You Want to Change?</h5>
				</div>
				<div class="modal-footer text-centers">
					<button type="submit" class="btn btn-primary" id="resetPassword">Reset Password</button>
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