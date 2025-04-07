<?php
include("database/dbcon.php");

if (isset($_GET['employee_id'])) {
    $employee_id = $_GET['employee_id'];

    $query = "SELECT * FROM `employee` e
              INNER JOIN attendance_records ar
              ON e.employeeID = ar.employee_id WHERE e.employeeID = $employee_id";

    $result = mysqli_query($con, $query);
    $employeeData = mysqli_fetch_assoc($result);

    if ($employeeData) {
        echo json_encode($employeeData);
    }
}
?>