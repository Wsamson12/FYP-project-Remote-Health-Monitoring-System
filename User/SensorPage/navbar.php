<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/61b76a306e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
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
<header id="navbarContainer">
    <nav>
        <div class="logo">
            <img src="../../image/MdiSpa.png" alt="">
            <span class="header-text">Remote health monitoring system</span>
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="mainicon">
            <div class="menu">
                <i class="bi bi-list"></i>
            </div>
        </label>
        <ul>
            <li><a href="../../User/home.php"><i class="fa-solid fa-house"></i> Home</a></li>
            <li><a href="../../User/DoctorBook.php"><i class="fa-solid fa-file-medical"></i> Appointment</a></li>
            <li><a href="../../User/SensorPage/sensor.php"><i class="fa-solid fa-laptop-file"></i>HealthyTest</a></li>
            <li><a href="../../meeting_room.html"><i class="fa-solid fa-desktop"></i> Meeting</a></li>
            <li><a href="#"><i class="fa-solid fa-comment"></i> Chat</a></li>
            <li><a href="../../User/Healthyinfo/indexeng.php"><i class="fa-solid fa-window-restore"></i> Healthy
                    Info</a></li>

            <li class="dropdown">
                <a href="#" class="dropbtn"><i class="fa-solid fa-user"></i> Profile</a>
                <div class="dropdown-content">
                    <i class="fa-solid fa-user"></i>

                    <?php
                    if (isset($_SESSION['userName'])) {
                        $userName = $_SESSION['userName'];
                        echo '<span class="username">' . $userName . '</span>';
                    }
                    ?>

                    <br>
                    <a href="#">Settings</a>
                    <br>
                    <a href="../../index.html">Logout</a>


            </li>
        </ul>
    </nav>
</header>
</body>
</html>