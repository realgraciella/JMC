<?php

include("database/dbcon.php");

$query = "SELECT * FROM leave_application";
$result = mysqli_query($con, $query);

if ($result) {
    echo '<div class="card-body p-0">';
    while ($row = mysqli_fetch_assoc($result)) {
        $statusClass = '';

        switch ($row['Status']) {
            case 'Pending':
                $statusClass = 'leave-pending';
                break;
            case 'Approved':
                $statusClass = 'leave-active';
                break;
            case 'Rejected':
                $statusClass = 'leave-inactive';
                break;
        }

        echo '<div class="leave-set">';
        echo '<span class="' . $statusClass . '">';
        echo '<i class="fas fa-briefcase"></i>';
        echo '</span>';
        echo '<label>' . $row['start_date'] . '</label>';
        echo '</div>';
    }

    echo '<div class="leave-viewall">';
    echo '<a href="leave.php"> Add Leave <img src="assets/img/right-arrow.png" class="ml-2" alt="arrow" /></a>';
    echo '</div>';
    echo '</div>';
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}

mysqli_close($cn);
?>