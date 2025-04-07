<?php
include 'database/dbcon.php';
include_once("includes/system_header.php");
include_once("includes/system_main_wraper.php");
include_once("includes/system_navbar.php");
?>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
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
									<img src="assets/img/profiles/avatar-18.jpg" alt="user avatar"
										class="rounded-circle" width="50">
								</div>
							</a>
						</div>
					</div>
					<div class="sidebar-input">
						<div class="top-nav-search">
							<form>
								<input type="text" class="form-control" placeholder="Search here">
								<button class="btn" type="submit"><i class="fas fa-search"></i></button>
							</form>
						</div>
					</div>
				</div>
				<ul>
					<li>
						<a href="dashboard.php"><img src="assets/img/home.svg" alt="sidebar_img">
							<span>Dashboard</span></a>
					</li>
					<li class="active">
						<a href="employee.php"><img src="assets/img/employee.svg" alt="sidebar_img"><span>
								Employees</span></a>
					</li>

					<li>
						<a href="leave.php"><img src="assets/img/leave.svg" alt="sidebar_img"> <span>Leave</span></a>
					</li>
					<li>
						<a href="review.php"><img src="assets/img/review.svg" alt="sidebar_img"><span>Attendance</span></a>
					</li>

					<li>
						<a href="profile-detail.php"><img src="assets/img/profile.svg" alt="sidebar_img">
							<span>Profile</span></a>
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
						<li class="breadcrumb-item"><a href="index.php"><img src="assets/img/dash.png" class="mr-2"
									alt="breadcrumb" />Home</a>
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
						<li><a href="employee-office.php">Department</a></li>
						<li><a class="active" href="#">Job</a></li>
					</ul>
					<a class="btn-add" href="add-employee.php"><i data-feather="plus"></i> Add Employee</a>
				</div>
			</div>
		</div>
		<div class="row mb-3">
			<div class="col-xl-11 col-sm-8 col-12 ">
				<?php 
				// Query to get the leave count
		$sqlJob = "SELECT COUNT(*) as Job_count FROM `Job`";
		$resultJob = mysqli_query($con, $sqlJob);

		// Fetch the result
		$rowJob = mysqli_fetch_assoc($resultJob);
		$JobCount = $rowJob['Job_count'];
				?>
				<label class="employee_count">							<h4><?php echo $JobCount; ?> Job</h4>
</label>
			</div>

			<div class="col-xl-1 col-sm-2 col-12 ">
				<a href="employee.php" class="btn-view active"><i data-feather="list"></i> </a>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12 col-sm-12 col-12 ">
				<?php
				if (isset($_POST["jobTitle"]) && isset($_POST["departmentID"])) {
					$jobTitle = $_POST["jobTitle"];
					$departmentID = $_POST["departmentID"];

					$sql = "INSERT INTO job (jobTitle, departmentID) VALUES (?, ?)";

					$stmt = mysqli_prepare($con, $sql);

					if ($stmt) {
						mysqli_stmt_bind_param($stmt, "si", $jobTitle, $departmentID);

						if (mysqli_stmt_execute($stmt)) {
							echo "<div class='alert alert-success' role='alert'>Job inserted successfully!</div>";
						} else {
							echo "<div class='alert alert-danger' role='alert'>Error inserting job: " . mysqli_error($con) . "</div>";
						}

						mysqli_stmt_close($stmt);
					} else {
						echo "<div class='alert alert-danger' role='alert'>Error preparing statement: " . mysqli_error($con) . "</div>";
					}
				}
				?>

				<div class="card  card-lists">

					<div class="card-header  ">
						<h2 class="card-titles">Create New Job</h2>
					</div>
					<div class="card-body">
						<form method="POST" action="">
							<div class="row">
								<div class="col-xl-5 col-sm-12 col-12">
									<input type="text" name="jobTitle" placeholder="Job Title" class="input-form"
										required>
								</div>

								<div class="col-xl-3 col-sm-12 col-12">
									<div class="form-group">
										<select name="departmentID" class="input-form ">
											<option value="Select department" selected disabled>Select Department
											</option>
											<?php
											// Fetch departments from the 'department' table
											$departmentQuery = mysqli_query($con, "SELECT * FROM department");

											while ($row = mysqli_fetch_assoc($departmentQuery)) {
												echo "<option value='" . $row['deptID'] . "'>" . $row['deptName'] . "</option>";
											}
											?>
										</select>
									</div>
								</div>

								<div class="col-xl-2 col-sm-2 col-2">
									<button type="submit" class="btn-create">Add Job</button>
								</div>

								<div class="col-xl-2 col-sm-6 col-6">
									<a href="#" class="btn-cancel">Cancel</a>
								</div>
							</div>
						</form>

					</div>
					<!-- INSERTING TO THE JOB TABLE -->

				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xl-12 col-sm-12 col-12 ">
				<div class="card">
					<div class="card-header create-formhead">
						<h2 class="card-titles">Progreen<span>Job</span></h2>
					</div>
					<div class="card-body">
						<div class="member-formcontent member-row">
							<div class="member-head">
								<h2>Members</h2>
	<?php 
	// Fetch data from the database
$sql = "SELECT `UserID`, `UserName`, `ProfilePicture` FROM `userprofile` Limit 10 ";
$result = $con->query($sql);

// Generate HTML based on the database data
if ($result->num_rows > 0) {
	echo '<div class="avatar-group">';

	while ($row = $result->fetch_assoc()) {
			$userID = $row['UserID'];
			$userName = $row['UserName'];
			$profilePicture = base64_encode($row['ProfilePicture']); // Assuming ProfilePicture is a BLOB

			echo '<div class="avatar avatar-xs group_img group_header">';
			echo '<img class="avatar-img rounded-circle" alt="' . $userName . '" src="data:image/jpeg;base64,' . $profilePicture . '">';
			echo '</div>';
	}

	echo '</div>';
} else {
	echo 'No users found in the database.';
}



	
	?>
							</div>
							<div class="member_link">
								<a data-toggle="collapse" href="#table" role="button" aria-expanded="false"
									aria-controls="table"><i data-feather="chevron-down"></i></a>
							</div>
						</div>
						<div class="table-responsive collapse show" id="table">
							<table class="table  custom-table  no-footer">
								<thead>
									<tr class="text-center">
										<th>Full Name</th>
										<th>Username</th>
										<th>Department</th>
										<th>Job</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<?php
										$query = "SELECT * FROM employee";
										$result = mysqli_query($con, $query);

										while ($row = mysqli_fetch_assoc($result)) {
											echo "<tr class='text-center'>";
											echo "<td>" . $row['firstName'] . " " . $row['lastName'] . "</td>";
											echo "<td>" . $row['username'] . "</td>";

											// Fetch and display the department name
											$departmentQuery = "SELECT deptName FROM department WHERE deptID = " . $row['departmentID'];
											$departmentResult = mysqli_query($con, $departmentQuery);
											$departmentName = mysqli_fetch_assoc($departmentResult)['deptName'];

											// Fetch and display the job title
											$jobQuery = "SELECT jobTitle FROM job WHERE jobID = " . $row['jobID'];
											$jobResult = mysqli_query($con, $jobQuery);
											$jobTitle = mysqli_fetch_assoc($jobResult)['jobTitle'];

											echo "<td>" . $departmentName . "</td>";
											echo "<td>" . $jobTitle . "</td>";

											echo '<td class="tab-select">';
											echo '<select class="select">';
											echo '<option value="active">Active</option>';
											echo '<option value="inactive">Inactive</option>';
											echo "</select>";
											echo "</td>";
											echo "</tr>";
										}
										?>
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

<div class="create_popup">
	<div class="modal fade" id="createOffice" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Create Office</h5>
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
	<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
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