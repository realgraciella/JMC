<?php
session_start();
include 'database/dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $preferredName = mysqli_real_escape_string($con, $_POST['preferredName']);
  $phoneNumber = mysqli_real_escape_string($con, $_POST['phoneNumber']);
  $secondaryNumber = mysqli_real_escape_string($con, $_POST['secondaryNumber']);
  $nationality = mysqli_real_escape_string($con, $_POST['nationality']);
  $dateOfBirth = mysqli_real_escape_string($con, $_POST['dateOfBirth']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $bloodGroup = mysqli_real_escape_string($con, $_POST['bloodGroup']);

  $userID = $_SESSION['user_id'];

  // Check if a record already exists for the user
  $checkQuery = "SELECT * FROM employee_basic_info WHERE employeeID = '$userID'";
  $result = $con->query($checkQuery);

  if ($result->num_rows > 0) {
      // Update the existing record
      $updateQuery = "UPDATE employee_basic_info 
                      SET preferredName = '$preferredName', 
                      phoneNumber = '$phoneNumber',
                      secondaryNumber='$secondaryNumber',
                          nationality = '$nationality', 
                          dateOfBirth = '$dateOfBirth', 
                          gender = '$gender', 
                          bloodgroup = '$bloodGroup' 
                      WHERE employeeID = '$userID'";

      if ($con->query($updateQuery) === TRUE) {
          echo "Record updated successfully";
      } else {
          echo "Error updating record: " . $con->error;
      }
  } else {
      // Insert a new record
      $insertQuery = "INSERT INTO employee_basic_info (employeeID, preferredName, nationality, dateOfBirth, gender, bloodgroup, `phoneNumber`, `secondaryNumber`) 
                      VALUES ('$userID', '$preferredName', '$nationality', '$dateOfBirth', '$gender', '$bloodGroup', '$phoneNumber', '$secondaryNumber')";

      if ($con->query($insertQuery) === TRUE) {
          echo "Record inserted successfully";
      } else {
          echo "Error inserting record: " . $con->error;
      }
  }
} else {
  echo "Invalid request method.";
}

// Close the database connection
$con->close();
?>
