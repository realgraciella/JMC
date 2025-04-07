<?php
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
					<div class="col-xl-12 col-sm-12 col-12 mb-4">
						<div class="breadcrumb-path ">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb">Home</a>
								</li>
								<li class="breadcrumb-item active"> Attendance</li>
							</ul>
							<h3>Attendance</h3>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 mb-4">
						<div class="head-link-set">
							<ul>
								<li><a class="active" href="#">Overview</a></li>
							</ul>
						
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-header">
            <h2 class="card-titles">Attendance Details</h2>
        </div>
        <div class="table-responsive">
            <table class="table custom-table no-footer">
						<thead>
								<tr>
								<th>Employee Name </th>
											<th>Employee ID </th>
											<th>Check In </th>
											<th>Check out</th>
											<th>Status</th>
								</tr>
							</thead>
							<tbody>
                <?php 
								// Query to retrieve employee attendance data with concatenated employee name
$query = "SELECT ar.record_id, e.employeeID, CONCAT(e.firstName, ' ', e.lastName) AS employee_name, ar.check_in_time, ar.check_out_time, ar.attendance_status
FROM attendance_records AS ar
JOIN employee AS e ON ar.employee_id = e.employeeID";
$result = mysqli_query($con, $query);
								// Check if there are any results
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
			echo '<tr>';
			echo '<td><label>' . $row['employee_name'] . '</label></td>';
			echo '<td><label>' . $row['employeeID'] . '</label></td>';
			echo '<td><label>' . $row['check_in_time'] . '</label></td>';
			echo '<td><label>' . $row['check_out_time'] . '</label></td>';
			echo '<td><label>' . $row['attendance_status'] . '</label></td>';
			echo '</tr>';
	}
} else {
	echo '<tr><td colspan="6">No records found</td></tr>';
}

// Close the database connection
mysqli_close($con);
								?></tbody>
            </table>
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