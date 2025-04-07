<?php
session_start();
include("database/dbcon.php");

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was selected
    if (isset($_FILES["edit_img"]) && $_FILES["edit_img"]["error"] == 0 && $_FILES["edit_img"]["size"] > 0) {
        // Open the file for binary reading
        $imageData = file_get_contents($_FILES["edit_img"]["tmp_name"]);

        // Perform database insert or update
        $userID = $_SESSION['user_id']; // Replace with the actual user ID
        $userName = $_SESSION['user_name']; // Replace with the actual user name

        // Check if the user has already uploaded a picture
        $sqlCheck = "SELECT UserID FROM UserProfile WHERE UserID = ?";
        $stmtCheck = $con->prepare($sqlCheck);
        $stmtCheck->bind_param("i", $userID);
        $stmtCheck->execute();
        $stmtCheck->store_result();

        if ($stmtCheck->num_rows > 0) {
            // User has already uploaded a picture, update the existing record
            $stmtCheck->close();

            $sqlUpdate = "UPDATE UserProfile SET ProfilePicture = ? WHERE UserID = ?";
            $stmtUpdate = $con->prepare($sqlUpdate);
            $stmtUpdate->bind_param("si", $imageData, $userID);
            $stmtUpdate->execute();
            $stmtUpdate->close();
        } else {
            // User has not uploaded a picture, insert a new record
            $stmtCheck->close();

            $sqlInsert = "INSERT INTO UserProfile (UserID, UserName, ProfilePicture) VALUES (?, ?, ?)";
            $stmtInsert = $con->prepare($sqlInsert);
            $stmtInsert->bind_param("iss", $userID, $userName, $imageData);
            $stmtInsert->execute();
            $stmtInsert->close();
        }

        // Retrieve the image data from the database
        $sqlRetrieve = "SELECT ProfilePicture FROM UserProfile WHERE UserID = ?";
        $stmtRetrieve = $con->prepare($sqlRetrieve);
        $stmtRetrieve->bind_param("i", $userID);
        $stmtRetrieve->execute();
        $result = $stmtRetrieve->get_result();

        // Check if a row is returned
        if ($row = $result->fetch_assoc()) {
            $imageData = $row['ProfilePicture'];
        } else {
            $imageData = null;
        }

        // Close the statement
        $stmtRetrieve->close();

        // Redirect to profile-detail.php after a successful upload
        header("Location: profile-detail.php");
        exit(); // Ensure no further output is sent after the header
    } else {
        echo "No file selected or uploaded.";
    }

    // Close the database connection
    $con->close();
}
?>
