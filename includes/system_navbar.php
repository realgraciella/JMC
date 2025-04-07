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


    <li class="nav-item dropdown has-arrow main-drop">
        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <span class="user-img">
                <img src="assets/img/profile.jpg" alt="">
                <span class="status online"></span>
            </span>
            <span>  <?php

// Get the name of the user from the session
$welcomeMessage = $_SESSION['user_firstname'] . ' ' . $_SESSION['user_lastname'];
echo $welcomeMessage;

?></span>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="profile-detail.php"><i data-feather="user" class="mr-1"></i> Profile</a>
            <a class="dropdown-item" href="login.php"><i data-feather="log-out" class="mr-1"></i> Logout</a>
        </div>
    </li>

</ul>
<div class="dropdown mobile-user-menu show">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
            class="fa fa-ellipsis-v"></i></a>
    <div class="dropdown-menu dropdown-menu-right ">
        <a class="dropdown-item" href="profile-detail.php">My Profile</a>
        <a class="dropdown-item" href="login.php">Logout</a>
    </div>
</div>

</div>