<?php
include("database/dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = $_POST['employee_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $department_id = $_POST['department_id'];
    $job_id = $_POST['job_id'];
    $attendance_status = $_POST['attendance_status'];

    $updateEmployeeQuery = "UPDATE `employee` SET firstName='$first_name', lastName='$last_name', departmentID=$department_id, jobID=$job_id WHERE employeeID=$employee_id";
    $resultEmployee = mysqli_query($con, $updateEmployeeQuery);

    $updateAttendanceQuery = "UPDATE `attendance_records` SET attendance_status='$attendance_status' WHERE employee_id=$employee_id";
    $resultAttendance = mysqli_query($con, $updateAttendanceQuery);

    if ($resultEmployee && $resultAttendance) {
        echo "Employee updated successfully";
    } else {
        echo "Error updating employee";
    }
}
?>