<?php
include("database/dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newPassword = $_POST['new_password'];
    $userID = $_SESSION['user_id'];

    // Use password_hash instead of md5 for stronger security
    $hashedPassword = md5($newPassword);

    $sql = "UPDATE `admin` SET `Password` = '$hashedPassword', updationDate = CURRENT_TIMESTAMP";

    if ($con->query($sql) === TRUE) {
        echo "Password updated successfully!";
        header("Location: profile-setting.php");
    } else {
        echo "Error updating password: " . $con->error;
        header("Location: profile-setting.php");
    }
}

$con->close();
?>
