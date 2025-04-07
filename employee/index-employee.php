<?php
include("database/dbcon.php");

include_once("includes/system_header.php");
include_once("includes/system_main_wraper.php");
include_once("includes/system_navbar.php");
?>
	<?php // Replace 'userprofile' with your actual table name
				// Use prepared statement to prevent SQL injection
				$query = "SELECT `UserID`, `ProfilePicture` FROM `userprofile` WHERE `UserID` = ?";
				$employeeId =$_SESSION['user_id'];;

				$stmt = mysqli_prepare($con, $query);
				mysqli_stmt_bind_param($stmt, 'i', $employeeId);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);

				if ($result) {
					// Check if any rows were returned
					if ($row = mysqli_fetch_assoc($result)) {
						$userId = $row['UserID'];
						$profilePicture = $row['ProfilePicture'];
					} else {
						// Handle the case where no rows are returned
						echo "No user found with the provided ID.";
					}
				} else {
					// Handle the case where the query execution fails
					echo "Error executing the query: " . mysqli_error($con);
				} ?>
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
									<img src="data:image/jpeg;base64,<?php echo base64_encode($profilePicture); ?>" alt="user avatar"
										class="rounded-circle" width="50">
								</div>
							</a>
						</div>
					</div>
				
				</div>
				<ul>
					<li>
						<a href="index-employee.php"><img src="assets/img/home.svg" alt="sidebar_img">
							<span>Dashboard</span></a>
					</li>
					<li>
						<a href="leave.php"><img src="assets/img/leave.svg" alt="sidebar_img"> <span>Leave</span></a>
					</li>
					<li>
						<a href="review.php"><img src="assets/img/review.svg"
								alt="sidebar_img"><span>Attendance</span></a>
					</li>
					<li>
						<a href="profile-detail.php"><img src="assets/img/profile.svg" alt="sidebar_img">
							<span>Profile</span></a>
					</li>
				</ul>
				<ul class="logout">
					<li>
						<a href="../login.php"><img src="assets/img/logout.svg" alt="sidebar_img"><span>Log
								out</span></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>


<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-name mb-4">
			<h4 class="d-flex align-items-center">

			
				<img src="data:image/jpeg;base64,<?php echo base64_encode($profilePicture); ?>"
					class="mr-2 employeeprofile" name="employeeprofile" alt="profile" />
				<label class="small-text">
					<?php

					// Get the name of the user from the session
					$welcomeMessage = "Welcome " . $_SESSION['user_firstname'];
					echo $welcomeMessage;
					?>
				</label>
			</h4>
			<?php
			// Display current date
			$currentDate = date("D, d M Y"); // Format: "Day, DD Month YYYY"
			echo "<label class='small-text'>$currentDate</label>";
			?>
		</div>

		<div class="row mb-4">
			<div class="col-xl-6 col-sm-12 col-12">
				<div class="breadcrumb-path ">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php"><img src="assets/img/dash.png" class="mr-3"
									alt="breadcrumb" />Home</a>
						</li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ul>
					<h3>Employee Dashboard</h3>
				</div>
			</div>
			<div class="col-xl-6 col-sm-12 col-12">
				<div class="row">
					<!-- <div class="col-xl-6 col-sm-6 col-12">
								<a class="btn-emp" href="dashboard.php"> Admin Dashboard</a>
							</div> -->
					<div class="col-xl-12 col-sm-12 col-12">
						<a class="btn-dash" href="#">Employee Dashboard</a>
					</div>
				</div>
			</div>
		</div>
		<?php

		// Query to get the leave count
		$sqlLeaveCount = "SELECT COUNT(*) as leave_count FROM `leave_application` WHERE employee_id=" . $_SESSION['user_id'];
		$resultLeaveCount = mysqli_query($con, $sqlLeaveCount);

		// Fetch the result
		$rowLeaveCount = mysqli_fetch_assoc($resultLeaveCount);
		$leaveCount = $rowLeaveCount['leave_count'];
		// Query to get the total salary
		$sqlTotalSalary = "SELECT SUM(`salary`) as total_salary FROM `employee` WHERE employeeID= ". $_SESSION['user_id'];
		$resultTotalSalary = mysqli_query($con, $sqlTotalSalary);

		// Fetch the result
		$rowTotalSalary = mysqli_fetch_assoc($resultTotalSalary);
		$totalSalary = $rowTotalSalary['total_salary'];

		// Query to get the total present
		$sqlTotalPresent = "SELECT COUNT( `attendance_status` ) as attendance FROM `attendance_records`   WHERE attendance_status='Present'  and employee_id= ". $_SESSION['user_id'];
		$resultTotalPresent = mysqli_query($con, $sqlTotalPresent);

		// Fetch the result
		$rowTotalPresent = mysqli_fetch_assoc($resultTotalPresent);
		$totalPresent = $rowTotalPresent['attendance'];

		// Query to get the total present
		$sqlJobTitle = "SELECT j.`jobTitle` as job FROM `employee` e JOIN `job` j ON e.`jobID` = j.`jobID`WHERE e.`employeeID`=". $_SESSION['user_id'];
		$resultJobTitle = mysqli_query($con, $sqlJobTitle);

		// Fetch the result
		$rowJobTitle = mysqli_fetch_assoc($resultJobTitle);
		$JobTitle = $rowJobTitle['job'];
		?>
		<div class="row mb-4">
			<div class="col-xl-3 col-sm-6 col-12">
				<div class="card board1 fill1 ">
					<div class="card-body">
						<div class="card_widget_header">
							<label>My Attendance</label>
							<h4>
								<?php echo $totalPresent; ?>
							</h4>
						</div>
						<div class="card_widget_img">
							<img src="assets/img/dash1.png" alt="card-img" />
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 col-12">
				<div class="card board1 fill2 ">
					<div class="card-body">
						<div class="card_widget_header">
							<label>My Role</label>
							<h5 style="color: white;">
								<?php echo $JobTitle; ?>
							</h5>
						</div>
						<div class="card_widget_img">
							<img src="assets/img/dash2.png" alt="card-img" />
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 col-12">
				<div class="card board1 fill3 ">
					<div class="card-body">
						<div class="card_widget_header">

							<label>My Leaves</label>
							<h4>
								<?php echo $leaveCount; ?>
							</h4>
						</div>
						<div class="card_widget_img">
							<img src="assets/img/dash3.png" alt="card-img" />
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 col-12">
				<div class="card board1 fill4 ">
					<div class="card-body">
						<div class="card_widget_header">
							<label>Current Salary</label>
							<h4>
							₱ <?php echo $totalSalary; ?>
							</h4>
						</div>
						<div class="card_widget_img">
							<img src="assets/img/dash4.png" alt="card-img" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-6 d-flex mobile-h">
				<div class="card flex-fill">
				<div class="card-header ">
						<h4 class="card-title-dash">Leave History</h4>
						<div class="dropdown">

							<div class="dropdown-menu" aria-labelledby="roomsBtn">
								<a class="dropdown-item" href="#">Action</a>
							</div>
						</div>
					</div>
					<?php
					$query = "SELECT * FROM leave_application WHERE employee_id = ". $_SESSION['user_id'];
					$result = mysqli_query($con, $query);

					if ($result) {
						echo '<div class="card-body p-0">';
						while ($row = mysqli_fetch_assoc($result)) {
							$statusClass = '';

							switch ($row['Status']) {
								case 'Pending':
									$statusClass = 'leave-pending';
									break;
								case 'Approved':
									$statusClass = 'leave-active';
									break;
								case 'Reject':
									$statusClass = 'leave-inactive';
									break;
							}
							$formattedDate = date("M d, Y", strtotime($row['start_date']));

							echo '<div class="leave-set">';
							echo '<span class="' . $statusClass . '">';
							echo '<i class="fas fa-briefcase"></i>';
							echo '</span>';
							echo '<label style="margin-right: 10px">' . $formattedDate . '</label>';
							echo '<label style="margin-right: 10px">' . $row['leave_type'] . '</label>';
							echo '</div>';
						}

						echo '<div class="leave-viewall">';
						echo '<a href="leave.php"> Add Leave <img src="assets/img/right-arrow.png" class="ml-2" alt="arrow" /></a>';
						echo '</div>';
						echo '</div>';
					} else {
						echo "Error: " . $query . "<br>" . mysqli_error($con);
					}
					mysqli_close($con);
					?>
				</div>
			</div>
			<div class="col-xl-6 d-flex">
				<div class="card flex-fill">
					<div class="card-header">
						<div class="d-flex justify-content-between align-items-center">
							<h5 class="card-title">HOliday List</h5>
						</div>
					</div>
					<div class="table table-responsive custimze-table" style="max-height: 200px; overflow-y: scroll;">
						<table>
							<thead>
								<tr>
									<th>#</th>
									<th>Date</th>
									<th>Leave Reason</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>01 Jan</td>
									<td>New Year's Day</td>
								</tr>
								<tr>
									<td>2</td>
									<td>09 Feb</td>
									<td>Chinese New Year</td>
								</tr>
								<tr>
									<td>3</td>
									<td>06 Apr</td>
									<td>Maundy Thursday</td>
								</tr>
								<tr>
									<td>4</td>
									<td>07 Apr</td>
									<td>Good Friday</td>
								</tr>
								<tr>
									<td>5</td>
									<td>01 May</td>
									<td>Labor Day</td>
								</tr>
								<tr>
									<td>6</td>
									<td>12 Jun</td>
									<td>Independence Day</td>
								</tr>
								<tr>
									<td>7</td>
									<td>26 Jun</td>
									<td>Eid'l Fitr (tentative)</td>
								</tr>
								<tr>
									<td>8</td>
									<td>09 Aug</td>
									<td>National Heroes Day</td>
								</tr>
								<tr>
									<td>9</td>
									<td>28 Aug</td>
									<td>National Heroes Day (additional holiday)</td>
								</tr>
								<tr>
									<td>10</td>
									<td>25 Sep</td>
									<td>Eid'l Adha (tentative)</td>
								</tr>
								<tr>
									<td>11</td>
									<td>23 Oct</td>
									<td>Barangay Election Day</td>
								</tr>
								<tr>
									<td>12</td>
									<td>31 Oct</td>
									<td>Halloween</td>
								</tr>
								<tr>
									<td>13</td>
									<td>30 Nov</td>
									<td>Bonifacio Day</td>
								</tr>
								<tr>
									<td>14</td>
									<td>25 Dec</td>
									<td>Christmas Day</td>
								</tr>
								<tr>
									<td>15</td>
									<td>26 Dec</td>
									<td>Additional Christmas Holiday</td>
								</tr>
								<tr>
									<td>16</td>
									<td>31 Dec</td>
									<td>New Year's Eve</td>
								</tr>
								<!-- Additional Holidays -->
								<tr>
									<td>17</td>
									<td>01 Jan</td>
									<td>New Year's Day (additional)</td>
								</tr>
								<tr>
									<td>18</td>
									<td>25 Jan</td>
									<td>Chinese New Year (additional)</td>
								</tr>
								<tr>
									<td>19</td>
									<td>23 Feb</td>
									<td>EDSA People Power Revolution Anniversary</td>
								</tr>
								<tr>
									<td>20</td>
									<td>01 Apr</td>
									<td>Maundy Thursday (additional)</td>
								</tr>
								<!-- Add more rows for additional holidays -->
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>

	</div>
</div>

</div>

<style>
	/* Style for the custom scroll bar */
	.table-responsive::-webkit-scrollbar {
		width: 12px;
	}

	.table-responsive::-webkit-scrollbar-thumb {
		background-color: green;
		border-radius: 8px;
	}

	.table-responsive::-webkit-scrollbar-track {
		background-color: #f1f1f1;
		border-radius: 10px;
	}
</style>
<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<script src="assets/js/script.js"></script>
</body>

</html>