<?php
// Assuming you have a connection to your database already established
include 'database/dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $companyName = $_POST['companyName'];
    $companyNum = $_POST['companyNum'];

    // Update query
    $sql = "UPDATE company SET companyName='$companyName', companyNum='$companyNum' WHERE companyID=2";

    // Execute the update query
    if ($con->query($sql) === TRUE) {
        header("Location: settings.php");
    } else {
        echo "Error updating company details: " . $con->error;
    }

    // Close the database connection (if opened)
    $conn->close();
}
?>
