<?php
include("database/dbcon.php");
include_once("includes/system_header.php");
include_once("includes/system_main_wraper.php");
include_once("includes/system_navbar.php");
include_once("includes/sidebar.php");
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
			<div class="col-xl-12 col-sm-12 col-12">
				<div class="breadcrumb-path mb-4">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="dashboard.php"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb" />Home</a>
						</li>
						<li class="breadcrumb-item active"> Employees</li>
					</ul>
					<h3>Employees</h3>
				</div>
			</div>
			<div class="col-xl-12 col-sm-12 col-12 mb-4">
				<div class="head-link-set">
					<ul>
						<li><a class="active" href="#">All</a></li>
						<li><a href="employee-office.php">Offices</a></li>
						<li><a href="employee-job.php">Job</a></li>
					</ul>
					<a class="btn-add" href="add-employee.php"><i data-feather="plus"></i> Add Employee</a>
				</div>
			</div>
			<div class="col-xl-12 col-sm-12 col-12 mb-4">
				<div class="row">
					<div class="col-xl-11 col-sm-8 col-12 ">
					<?php
						// Count the number of employees
						$countQuery = "SELECT COUNT(*) AS employeeCount FROM employee";
						$countResult = mysqli_query($con, $countQuery);
						$employeeCount = mysqli_fetch_assoc($countResult)['employeeCount'];
					?>
					<label class="employee_count"><?php echo $employeeCount; ?> People</label>
					</div>
				
					<div class="col-xl-1 col-sm-2 col-12 ">
						<a href="#" class="btn-view active"><i data-feather="list"></i> </a>
					</div>
				</div>
			</div>
			<div class="col-xl-12 col-sm-12 col-12 mb-4">
				<div class="card">
					<div class="table-heading">
						<h2>Progreen Members</h2>
					</div><style>
	/* Style for the custom scroll bar */
	.table-responsive::-webkit-scrollbar {
		width: 12px;
	}

	.table-responsive::-webkit-scrollbar-thumb {
		background-color: #888;
		border-radius: 8px;
	}

	.table-responsive::-webkit-scrollbar-track {
		background-color: #f1f1f1;
		border-radius: 10px;
	}
</style>
					<div class="table-responsive" style="max-height: 500px; overflow-y: auto; overflow-x: auto;">
						<table class="table custom-table no-footer" >
							<thead>
								<tr class="text-center">
									<th>Full Name</th>
									<th>Username</th>
									<th>Department</th>
									<th>Job</th>
									<th>Start Date</th>
									<th>Employment Type</th>
									<th>Salary</th>
									<th>Salary Frequency</th>
									<th>Action</th>
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

											echo "<td>" . $row['startDate'] . "</td>";
											echo "<td>" . $row['employmentType'] . "</td>";
											echo "<td>" . $row['salary'] . "</td>";
											echo "<td>" . $row['salaryFrequency'] . "</td>";
											//For The Actions
											echo '<td>';
											echo '<div class="employee-head">';
											echo '<ul>';
											echo '<li><a class="edit_employee" data-employee-id="' . $row['employeeID'] . '" data-toggle="modal" data-target="#edit"><i data-feather="edit"></i></a></li>';
											echo '<li><a class="edit_delete" data-employee-id="' . $row['employeeID'] . '" data-toggle="modal" data-target="#delete"><i data-feather="trash-2"></i></a></li>';
											echo '</ul>';
											echo '</div>';
											echo '</td>';
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

<div class="customize_popup">
			<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="staticBackdropLa" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content" id="updateemployeee">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLa">Edit Employee</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class=" col-md-12 p-0">
									<div class=" form-popup">
										<input type="text" id="first_name" placeholder="First Name">
									</div>
									<div class=" form-popup">
										<input type="text" id="last_name" placeholder="Last Name">
									</div>
									<div class=" form-popup">
										<select name="departmentID" id="department_id" class="input-form" required>
												<option value="Select department" selected disabled>Select Department</option>
												<?php
												// Fetch departments from the 'department' table
												$departmentQuery = mysqli_query($con, "SELECT * FROM department");

												while ($row = mysqli_fetch_assoc($departmentQuery)) {
													echo "<option value='" . $row['deptID'] . "'>" . $row['deptName'] . "</option>";
												}
												?>
											</select>
									</div>
									<div class=" form-popup">
										<select name="jobID" id="job_id" class="input-form " required>
												<option value="Select job" selected disabled>Select Job</option>
												<?php
												// Fetch departments from the 'department' table
												$jobQuery = mysqli_query($con, "SELECT * FROM job");

												while ($row = mysqli_fetch_assoc($jobQuery)) {
													echo "<option value='" . $row['jobID'] . "'>" . $row['jobTitle'] . "</option>";
												}
												?>
										</select>
									</div>
									<div class=" form-popup">
										<select class="input-form" id="employment_type" name="employmentType" required>
											<option value="" selected disabled>Select Employment Type</option>
											<option value="Regular">Regular</option>
											<option value="Casual">Casual</option>
											<option value="Seasonal">Seasonal</option>
											<option value="Project">Project</option>
											<option value="Fix Term">Fix Term</option>
										</select>
									</div>
									<div class="form-popup">
										<input type="number" id="salary" placeholder="Salary">
									</div>
									<div class="form-popup">
										<select class="input-form" id="salary_frequency" name="salaryFrequency" required>
												<option value="Select Salary Frequency" selected disabled>Frequency </option>
												<option value="Annualy">Annualy</option>
												<option value="Monthly">Monthly</option>
												<option value="Weekly">Weekly</option>
												<option value="Daily">Daily</option>
											</select>
									</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" id="confirmUpdate">Update</button>
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
							<button type="button" class="btn btn-primary" id="confirmDelete">Delete</button>
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

<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="js/activePage.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/ajax.js"></script>
</body>

</html>