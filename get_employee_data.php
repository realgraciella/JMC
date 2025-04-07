<?php
include("database/dbcon.php");

if (isset($_GET['employee_id'])) {
    $employee_id = $_GET['employee_id'];
    
    $query = "SELECT * FROM employee WHERE employeeID = $employee_id";
    $result = mysqli_query($con, $query);
    $employeeData = mysqli_fetch_assoc($result);
    
    if ($employeeData) {
        echo json_encode($employeeData);
    }
}
?>
