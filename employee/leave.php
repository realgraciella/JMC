<?php
include("database/dbcon.php");
include_once("includes/system_header.php");
include_once("includes/system_main_wraper.php");
include_once("includes/system_navbar.php");
include("includes/sidebar.php");
?>
<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">

<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="row">
			<div class="col-xl-12 col-sm-12 col-12 mb-4">
				<div class="breadcrumb-path ">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php"><img src="assets/img/dash.png" class="mr-2"
									alt="breadcrumb">Home</a>
						</li>
						<li class="breadcrumb-item active"> Leave</li>
					</ul>
					<h3>Leave</h3>
				</div>
			</div>
		</div>

		<form method="post">
			<div class="row">
				<div class="col-xl-12 col-sm-12 col-12">
					<div class="card">
						<div class="card-header">
							<h2 class="card-titles">Apply Leaves</h2>
						</div>
						<div class="form-creation">
							<div class="row">
								<div class="col-xl-6 col-sm-6 col-6 ">
									<div class="form-group">
										<label>Leave Type <span class="mandatory">*</span> </label>
										<select name="leave_type" class="select">
											<option value="Select leave" selected disabled>Select leave</option>
											<option value="Annual Leave/Vacation">Annual Leave/Vacation</option>
											<option value="Sick Leave">Sick Leave</option>
											<option value="Personal/Unpaid Leave">Personal/Unpaid Leave</option>
											<option value="Maternity/Paternity Leave">Maternity/Paternity Leave</option>
											<option value="Bereavement Leave">Bereavement Leave</option>
											<option value="Public Holidays">Public Holidays</option>
											<option value="Compensatory Time Off">Compensatory Time Off</option>
											<option value="Jury Duty Leave">Jury Duty Leave</option>
											<option value="Educational Leave">Educational Leave</option>
											<option value="Remote Work/Telecommuting">Remote Work/Telecommuting</option>
											<option value="Training Leave">Training Leave</option>
											<option value="Emergency Leave">Emergency Leave</option>
											<option value="Half-Day Leave">Half-Day Leave</option>
										</select>

									</div>
								</div>
								<div class="col-xl-3 col-sm-3 col-3">
									<div class="form-group">
										<label>From</label>
										<input type="date" name="start_date">
									</div>
								</div>

								<div class="col-xl-3 col-sm-3 col-3">
									<div class="form-group">
										<label>To</label>
										<input type="date" name="end_date" id="end_date">
									</div>
								</div>

								<script>
									// Get the "To" date input element
									var endDateInput = document.getElementById('end_date');

									// Set the minimum date to today
									var today = new Date();
									var dd = String(today.getDate()).padStart(2, '0');
									var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
									var yyyy = today.getFullYear();
									today = yyyy + '-' + mm + '-' + dd;
									endDateInput.setAttribute('min', today);
								</script>


							</div>

							<div class="row">
								<div class="col-xl-12 col-sm-12 col-12 ">
									<div class="form-group">
										<label>Additional reasons </label>
										<textarea name="additional_reasons" rows="4" cols="50" class="date"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-12 col-sm-12 col-12 ">
									<div class="form-btn">
										<button type="submit" class="btn btn-apply btn-lg" name="apply">Apply</button>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<?php
		if (isset($_POST['apply'])) {
			// Check if the employee has pending leave
			$employee_id = $_SESSION['user_id']; // Assuming you have the user ID stored in the session
		
			$pendingLeaveQuery = "SELECT * FROM leave_application WHERE employee_id = '$employee_id' AND status = 'Pending'";
			$pendingLeaveResult = mysqli_query($con, $pendingLeaveQuery);

			if (mysqli_num_rows($pendingLeaveResult) > 0) {
				echo "<div id='errorAlert' class='alert alert-danger' role='alert'>You have a pending leave application. Please wait for the current application to be processed.</div>";
			} else {
				// Process the form data
				$leave_type = $_POST["leave_type"];
				$start_date = $_POST["start_date"];
				$end_date = $_POST["end_date"];
				$additional_reasons = $_POST["additional_reasons"];
				$status = "Pending";

				$sql = "INSERT INTO leave_application (employee_id, leave_type, start_date, end_date, additional_reasons, status)
                VALUES ('$employee_id', '$leave_type', '$start_date', '$end_date', '$additional_reasons', '$status')";

				if ($con->query($sql) === TRUE) {
					echo "<div id='successAlert' class='alert alert-success' role='alert'>New record created successfully.</div>";

					echo "Leave application submitted successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $con->error;
				}

				$con->close();
			}
		}
		?>

		<!-- <div class="row">
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="card">
							<div class="card-header">
								<h2 class="card-titles">Leave Details</h2>
							</div>
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table  custom-table  no-footer">
										<thead>
											<tr>
												<th>Date</th>
												<th>Total Employees </th>
												<th>First Half </th>
												<th>Second Half </th>
												<th>Working From Home </th>
												<th>Absent</th>
												<th>Today Aways</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>05 May 2019 </label></td>
												<td><label>7 </label></td>
												<td><label>6 </label></td>
												<td><label>6 </label></td>
												<td><label>1 </label></td>
												<td><label>0 </label></td>
												<td><label>1 </label></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="card ">
							<div class="card-header">
								<h2 class="card-titles">Leave Details</h2>
							</div>
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table  custom-table  no-footer">
										<thead>
											<tr>
												<th>Employee</th>
												<th>Leave Type </th>
												<th>From </th>
												<th>To</th>
												<th>Days</th>
												<th>Remaining Days </th>
												<th>Notes</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="table-img">
														<a href="profile.php"><img src="assets/img/profiles/avatar-13.jpg" alt="profile" class="img-table"></a>
														<label>Arvin Villaluna
														</label>
													</div>
												</td>
												<td>
													<label>Parental Leave </label>
												</td>
												<td>
													<label>05 Dec 2019 </label>
												</td>
												<td><label>07 Dec 2019 </label></td>
												<td><label>3</label></td>
												<td><label>9</label></td>
												<td><label>Parenting Leave</label></td>
												<td>
													<label><a class="action_label3">Approved</a></label>
												</td>
												<td>
													<label><a class="action_label4" data-toggle="modal" data-target="#delete">Delete <i data-feather="trash-2"></i> </a></label>
												</td>
											</tr>
											<tr>
												<td>
													<div class="table-img">
														<a href="profile.php"><img src="assets/img/profiles/avatar-16.jpg" alt="profile" class="img-table"></a>
														<label>Graciella Relevo
														</label>
													</div>
												</td>
												<td>
													<label>Parental Leave </label>
												</td>
												<td>
													<label>05 Dec 2019 </label>
												</td>
												<td><label>07 Dec 2019 </label></td>
												<td><label>3</label></td>
												<td><label>9</label></td>
												<td><label>Going to Hospital</label></td>
												<td>
													<label><a class="action_label3">Approved</a></label>
												</td>
												<td>
													<label><a class="action_label4" data-toggle="modal" data-target="#delete">Delete <i data-feather="trash-2"></i> </a></label>
												</td>
											</tr>
											<tr>
												<td>
													<div class="table-img">
														<a href="profile.php"><img src="assets/img/profiles/avatar-17.jpg" alt="profile" class="img-table"></a>
														<label>Jenni Sims</label>
													</div>
												</td>
												<td>
													<label>Parental Leave </label>
												</td>
												<td>
													<label>05 Dec 2019 </label>
												</td>
												<td><label>07 Dec 2019 </label></td>
												<td><label>3</label></td>
												<td><label>9</label></td>
												<td><label>Raining</label></td>
												<td>
													<label><a class="action_label3">Approved</a></label>
												</td>
												<td>
													<label><a class="action_label4" data-toggle="modal" data-target="#delete">Delete <i data-feather="trash-2"></i> </a></label>
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
		</div> -->

		<!-- 
		<div class="customize_popup">
			<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabel">Edit Office</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class=" col-md-12 p-0">
								<div class=" form-popup">
									<label>Office Name</label>
									<input type="text">
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-apply">Apply</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="customize_popup">
			<div class="modal fade" id="editmember" tabindex="-1" aria-labelledby="staticBackdropLabels" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabels">Edit Member</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class=" col-md-12 p-0">
								<div class=" form-popup">
									<input type="text" placeholder="Member Name">
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary">Save</button>
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

	</div> -->


		<script src="assets/js/jquery-3.6.0.min.js"></script>

		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>

		<script src="assets/js/feather.min.js"></script>

		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

		<script src="assets/plugins/select2/js/select2.min.js"></script>
		<script src="js/activePage.js"></script>
		<script src="assets/js/script.js"></script>
		</body>

		</html>