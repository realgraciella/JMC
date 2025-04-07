<?php
include 'database/dbcon.php';
include_once("includes/system_header.php");
include_once("includes/system_main_wraper.php");
include_once("includes/system_navbar.php");
?>
<link rel="shortcut icon" href="assets/img/favicon.png">
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
									 <img src="assets/img/profile.jpg" alt="user avatar" class="rounded-circle" width="50">
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
								<a href="dashboard.php"><img src="assets/img/home.svg" alt="sidebar_img"> <span>Dashboard</span></a>
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
							<li>
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
<form method="post">
	<div class="page-wrapper">
		<div class="content container-fluid">
			<div class="row">
				<div class="col-xl-12 col-sm-12 col-12 ">
				<?php
if (isset($_POST["addmember"])) {
    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password']; // Plain text password
    $confirmPassword = $_POST['confirmPassword'];
    $departmentID = $_POST['departmentID'];
    $jobID = $_POST['jobID'];
    $startDate = $_POST['startDate'];
    $employmentType = $_POST['employmentType'];
    $salary = $_POST['salary'];
    $salaryFrequency = $_POST['salaryFrequency'];

    // Check if password and confirm password match
    if ($password !== $confirmPassword) {
        echo "<div class='alert alert-danger' role='alert'>Error: Passwords do not match.</div>";
    } else {
        // Hash the password using MD5
        $hashedPassword = md5($password);

        // Insert the data into the database
        $sql = "INSERT INTO employee (firstName, lastName, email, username, password, departmentID, jobID, startDate, employmentType, salary, salaryFrequency) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssssisssis", $firstName, $lastName, $email, $username, $hashedPassword, $departmentID, $jobID, $startDate, $employmentType, $salary, $salaryFrequency);

            if (mysqli_stmt_execute($stmt)) {
                echo "<div class='alert alert-success' role='alert'>Employee inserted successfully!</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error inserting employee: " . mysqli_error($con) . "</div>";
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "<div class='alert alert-danger' role='alert'>Error preparing statement: " . mysqli_error($con) . "</div>";
        }
    }
}
?>


					<div class="breadcrumb-path mb-4">
						
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a>
							</li>
							<li class="breadcrumb-item active"> Employees</li>
						</ul>
						<h3>Create Employees</h3>
					</div>
				</div>
				<div class="col-xl-12 col-sm-12 col-12 ">
					<div class="card">
						<div class="card-header">
							<h2 class="card-titles">Basic Details <span>Organized and secure.</span></h2>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-xl-6 col-sm-12 col-12 ">
									<div class="form-group">
										<input type="text" placeholder="First Name" name="firstName" required>
									</div>
								</div>
								<div class="col-xl-6 col-sm-12 col-12 ">
									<div class="form-group">
										<input type="text" placeholder="Last Name" name="lastName" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-6 col-sm-12 col-12 ">
									<div class="form-group">
										<input type="text" placeholder="Email" name="email" required>
									</div>
								</div>
								<div class="col-xl-6 col-sm-12 col-12 ">
									<div class="form-group">
										<input type="text" placeholder="Username" name="username" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-6 col-sm-12 col-12 ">
									<div class="form-group">
										<input type="password" placeholder="Password" name="password" required>
									</div>
								</div>
								<div class="col-xl-6 col-sm-12 col-12 ">
									<div class="form-group">
										<input type="password" placeholder="Confirm Password" name="confirmPassword">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-sm-12 col-12 ">
					<div class="card ">
						<div class="card-header">
							<h2 class="card-titles">Employment Details<span>Let everyone know the essentials so they're fully prepared.</span></h2>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-xl-6 col-sm-12 col-12 ">
									<div class="form-group">
										<label for="select">Department</label>
										<select name="departmentID" class="input-form" required>
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
								</div>
								<div class="col-xl-6 col-sm-12 col-12 ">
									<div class="form-group">
										<label for="date">Start Date</label>
										<input type="date" placeholder="Start Date" name="startDate" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-6 col-sm-12 col-12 ">
									<div class="form-group">
										<label for="select">Job Title</label>
										<select name="jobID" class="input-form " required>
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
								</div>
								<div class="col-xl-6 col-sm-12 col-12 ">
									<div class="form-group">
										<label for="select">Employment Type</label>
										<select class="select" name="employmentType" required>
											<option value="" selected disabled>Select Employment Type</option>
											<option value="Regular">Regular</option>
											<option value="Casual">Casual</option>
											<option value="Seasonal">Seasonal</option>
											<option value="Project">Project</option>
											<option value="Fix Term">Fix Term</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-sm-12 col-12 ">
					<div class="card">
						<div class="card-header">
							<h2 class="card-titles">Salary Details<span>Stored securely, only visible to Super Admins, Payroll Admins, and themselves.</span></h2>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-xl-6 col-sm-12 col-12 ">
									<div class="form-group">
										<input type="number" placeholder="Salary" name="salary" required>
									</div>
								</div>
								<div class="col-xl-6 col-sm-12 col-12 ">
									<div class="form-group">
										<select class="select" name="salaryFrequency" required>
											<option value="Select Salary Frequency" selected disabled>Frequency </option>
											<option value="Annualy">Annualy</option>
											<option value="Monthly">Monthly</option>
											<option value="Weekly">Weekly</option>
											<option value="Daily">Daily</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="form-btn">
        <button type="submit" class="btn btn-apply w-auto" name="addmember">Add Team Member</button>
        <a href="#" class="btn btn-secondary">Cancel</a>
    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
</form>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

</html>