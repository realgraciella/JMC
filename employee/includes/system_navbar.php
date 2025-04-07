<?php
session_start();

include("database/dbcon.php");


?>


<a class="mobile_btn" id="mobile_btn">
    <i class="fas fa-bars"></i>
</a>


<ul class="nav user-menu">

    <li class="nav-item dropdown">
       
    </li>
    <?php // Replace 'userprofile' with your actual table name
				// Use prepared statement to prevent SQL injection
				$query = "SELECT `UserID`, `ProfilePicture` FROM `userprofile` WHERE `UserID` = ?";
				$employeeId =$_SESSION['user_id'];;

				$stmt = mysqli_prepare($con, $query);
				mysqli_stmt_bind_param($stmt, 'i', $employeeId);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);

				if ($result) {
					// Check if any rows were returned
					if ($row = mysqli_fetch_assoc($result)) {
						$userId = $row['UserID'];
						$profilePicture = $row['ProfilePicture'];
					} else {
						// Handle the case where no rows are returned
						echo "No user found with the provided ID.";
					}
				} else {
					// Handle the case where the query execution fails
					echo "Error executing the query: " . mysqli_error($con);
				} ?>

    <li class="nav-item dropdown has-arrow main-drop">
        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <span class="user-img">
                <img src="data:image/jpeg;base64,<?php echo base64_encode($profilePicture); ?>" alt="profile" />
                <span class="status online"></span>
            </span>
            <span><?php

                    // Get the name of the user from the session
                    $welcomeMessage = $_SESSION['user_firstname'] . ' ' . $_SESSION['user_lastname'];
                    echo $welcomeMessage;

                    ?></span>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="profile-detail.php"><i data-feather="user" class="mr-1"></i> Profile</a>
            <a class="dropdown-item" href="../login.php"><i data-feather="log-out" class="mr-1"></i> Logout</a>
        </div>
    </li>

</ul>
<div class="dropdown mobile-user-menu show">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
    <div class="dropdown-menu dropdown-menu-right ">
        <a class="dropdown-item" href="profile-detail.php">My Profile</a>
        <a class="dropdown-item" href="../login.php">Logout</a>
    </div>
</div>

</div>