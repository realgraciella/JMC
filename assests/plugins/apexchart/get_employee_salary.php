<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "progreen";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$query = "SELECT 
            DATE_FORMAT(startDate, '%b') AS Formatted_Date,
            salaryFrequency,
            SUM(salary) AS totalSalary
            FROM employee
            GROUP BY Formatted_Date, salaryFrequency";

$result = $con->query($query);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close the database connection
$con->close();  // Fix the variable name here

header('Content-Type: application/json');
echo json_encode($data);
?>
