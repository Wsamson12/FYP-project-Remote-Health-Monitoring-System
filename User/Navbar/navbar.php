<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Remote Health Monitoring System</title>
    <link rel="stylesheet" href="navbar.css">
    <script src="https://kit.fontawesome.com/61b76a306e.js" crossorigin="anonymous"></script>
</head>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var dropdowns = document.getElementsByClassName("dropdown");
        for (var i = 0; i < dropdowns.length; i++) {
            dropdowns[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var dropdownContent = this.querySelector(".dropdown-content");
                dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
            });
        }
    });
</script>
<header>
    <nav class="navbar">
        <div class="logo">
            <img src="../image/MdiSpa.png" alt="">
            <span class="header-text">Remote health monitoring system</span>
        </div>
        <ul class="links">
            <li><a href="../User/home.php"><i class="fa-solid fa-house"></i> Home</a></li>
            <li><a href="../User/DoctorBook.php"><i class="fa-solid fa-file-medical"></i> Appointment</a></li>
            <li><a href="../User/SensorPage/sensor.php"><i class="fa-solid fa-laptop-file"></i>HealthyTest</a></li>
            <li><a href="../meeting_room.html"><i class="fa-solid fa-desktop"></i>  Meeting</a></li>
            <li><a href="../User/Chat/index.php"><i class="fa-solid fa-comment"></i> Chat</a></li>
            <li><a href="../User/Healthyinfo/indexeng.php"><i class="fa-solid fa-window-restore"></i> Healthy Information</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn"><i class="fa-solid fa-user"></i> Profile</a>
                <div class="dropdown-content">
                     <i class="fa-solid fa-user"></i> <?php
                    if (isset($_SESSION['userName'])) {
                        $userName = $_SESSION['userName'];
                        echo '<span>' . $userName . '</span>';
                    }
                    ?>
                    <a href="#">Settings</a>
                    <a href="../index.html">Logout</a>

                </div>
        </ul>

    </nav>
</header>
