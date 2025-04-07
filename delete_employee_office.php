<?php
include("database/dbcon.php");

if (isset($_POST['employee_id'])) {
    $employee_id = $_POST['employee_id'];

    $sql = "DELETE FROM `attendance_records` WHERE employee_id = $employee_id";
    $result = mysqli_query($con, $sql);

    $response = array();

    if ($result) {
        $response['status'] = 'success';
        $response['message'] = 'Employee Attendance Deleted successfully';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Error Deleting Employee Attendance: ' . mysqli_error($con);
    }

    echo json_encode($response);
}
?>
