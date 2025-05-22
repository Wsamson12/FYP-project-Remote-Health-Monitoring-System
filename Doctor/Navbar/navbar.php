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
            <li><a href="../Doctor/home.php"><i class="fa-solid fa-house"></i> Home</a></li>
            <li><a href="../Doctor/AppRecord.php"><i class="fa-solid fa-clipboard"></i></i> Appointment Record</a></li>
            <li><a href="../Doctor/Chat/index.php"><i class="fa-solid fa-comment"></i> Chat</a></li>
            <li><a href="../meeting_room.html"><i class="fa-solid fa-desktop"></i>  Meeting</a></li>
            <li><a href="../Doctor/SensorRecord.php"><i class="fa-solid fa-note-sticky"></i>Sensor Record</a></li>

            <li class="dropdown">
                <a href="#" class="dropbtn"><i class="fa-solid fa-user"></i> Profile</a>
                <div class="dropdown-content">
                    <i class="fa-solid fa-user"></i> <?php
                    session_start();
                    if (isset($_SESSION['userName'])) {
                        $name = $_SESSION["name"];
                        echo '<span>' . $name . '</span>';
                    }
                    ?>
                    <a href="#">Settings</a>
                    <a href="../index.html">Logout</a>
                </div>
            </li>

                </div>
        </ul>

    </nav>
</header>
