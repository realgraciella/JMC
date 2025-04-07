<?php
include("database/dbcon.php");

if (isset($_POST['employee_id'])) {
    $employee_id = $_POST['employee_id'];
    
    // Perform the delete operation using the employee_id
    $deleteQuery = "DELETE FROM employee WHERE employeeID = $employee_id";
    $deleteResult = mysqli_query($con, $deleteQuery);
    
    if ($deleteResult) {
        // Deletion successful
        echo 'Employee deleted successfully';
    } else {
        // Deletion failed
        echo 'Error deleting employee';
    }
}
?>
