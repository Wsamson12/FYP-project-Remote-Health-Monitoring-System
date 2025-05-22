<?php
session_start();
include('Navbar/navbar.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@200;300;400;500;600;700;800&family=Roboto:wght@100;300;400&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Outfit', sans-serif;
        }

        .header-text {
            color: white;
        }

        .username {
            color: white; /* Replace with your desired text color */
        }

        body {
            background-image: url('../image/home-bgc.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }

        /*nav */
        nav {
            display: flex;
            justify-content: space-between;
            max-width: 80%;
            margin: auto;
            padding: 1.4rem 1rem;
            background-color: #000000b5;
            backdrop-filter: blur(10px);
            border-radius: 3rem;
            margin-top: 1rem;
            /* box-shadow: 0px 0px 3px rgb(254 116 62); */
        }

        .logo {
            font-size: 1.3rem;
            font-weight: 600;
        }

        .logo a {
            color: #fff;
            text-decoration: none;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            padding: 0;
            background-color: transparent;
            overflow: hidden;
            margin-bottom: 0;
        }

        li {
            padding: 0rem 1.1rem;
            float: left;
        }

        li a {
            color: #e96d3f;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 600;
            letter-spacing: .7px;
        }

        ul li a {
            position: relative;
        }

        ul li a::before {
            content: "";
            position: absolute;
            bottom: -6px;
            width: 100%;
            height: 3px;
            background-color: #fff;
        }

        /* Center Animation */
        ul li a::before {
            transform: scale(0, 1);
            transition: transform .3s ease;
        }

        ul li a:hover::before {
            transform: scale(1, 1);
        }
        li a.active,
        li a:hover {
            color: #fff;
            transition: all .3s ease-in-out
        }

        #click {
            display: none;
        }

        .menu {
            display: none;
        }

        @media only screen and (max-width:1024px) {
            nav {
                max-width: 98%;
            }
        }

        @media only screen and (max-width:768px) {
            html {
                font-size: 80%;
            }

            nav {
                max-width: 100%;
            }
        }

        @media only screen and (max-width:480px) {
            html {
                font-size: 85%;
            }

            header {
                height: 100vh;
            }

            li {
                padding: 1rem 1.1rem;
            }

            .menu {
                display: block;
                font-size: 2rem;
                font-weight: bold;
                color: #fff;
            }

            ul {
                width: 100%;
                height: 100vh;
                position: absolute;
                display: flex;
                flex-direction: column;
                text-align: center;
                top: 4rem;
                left: -100%;
                background-color: #000000b5;
                backdrop-filter: blur(10px);
            }

            #click:checked~ul {
                left: 0%;
                transition: all 0.3s ease;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }

        }</style>
</head>
<body>


<div class="bgc">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="heading-container">
        <h2>Welcome to the Remote Health Monitoring System!</h2>
    </div>
</div>

<div class="content-section">
    <div class="image-container">
        <img src="../image/medical-history.png" alt="">
        <img src="../image/doctor.png" alt="">
    </div>
</div>
</body>
</html>