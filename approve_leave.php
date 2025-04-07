<?php
include("database/dbcon.php");

if (isset($_POST['id'])) {
    $leaveID = $_POST['id'];

    $updateQuery = "UPDATE leave_application SET `Status` = 'Approved' WHERE id = $leaveID";

    $result = mysqli_query($con, $updateQuery);

    if ($result) {
        // Update successful
        echo 'Leave approved successfully';
    } else {
        // Update failed
        echo 'Error updating leave: ' . mysqli_error($con);
    }
}

?>