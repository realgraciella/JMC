<?php
include("database/dbcon.php");

if (isset($_POST['employee_id'])) {
    $employee_id = $_POST['employee_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $department_id = $_POST['department_id'];
    $job_id = $_POST['job_id'];
    $employment_type = $_POST['employment_type'];
    $salary = $_POST['salary'];
    $salary_frequency = $_POST['salary_frequency'];

    // Perform the update operation using the employee_id
    $updateQuery = "UPDATE employee SET firstName = '$first_name', lastName = '$last_name', departmentID = $department_id, jobID = $job_id, employmentType = '$employment_type', salary = $salary, salaryFrequency = '$salary_frequency' WHERE employeeID = $employee_id";
    $updateResult = mysqli_query($con, $updateQuery);
    
    if ($updateResult) {
        // Update successful
        echo 'Employee updated successfully';
    } else {
        // Update failed
        echo 'Error updating employee';
    }
}
?>
