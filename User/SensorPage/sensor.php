<?php
session_start();
include('../../conn.php');
include('navbar.php');

// Retrieve the maximum ID from the heartrate table
$query = "SELECT MAX(id) AS max_id FROM heartrate";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$maxId = $row['max_id'];

// Retrieve the rate value from the row with the maximum ID
$query = "SELECT rate FROM heartrate WHERE id = $maxId";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$heartRate = $row['rate'];


// Retrieve the maximum ID from the temperature_sensor table
$query = "SELECT MAX(id) AS max_id FROM temperature_sensor";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$maxId = $row['max_id'];

// Retrieve the rate value from the row with the maximum ID
$query = "SELECT Celsius FROM temperature_sensor WHERE id = $maxId";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$Celsius = $row['Celsius'];

// Retrieve the maximum ID from the GSR sensor table
$query = "SELECT MAX(id) AS max_id FROM sensor";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$maxId = $row['max_id'];

// Retrieve the rate value from the row with the maximum ID
$query = "SELECT gsr FROM sensor WHERE id = $maxId";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$gsr = $row['gsr'];


?>




<!DOCTYPE html>
<html>

<head>
    <title>Sensor Data Dashboard</title>
    <script src="https://kit.fontawesome.com/61b76a306e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="sensor.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@200;300;400;500;600;700;800&family=Roboto:wght@100;300;400&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Outfit', sans-serif;
        }

        body {
            background-image: url('/modern-1.jpg');
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

        }
    </style>



</head>
<?php

// Retrieve the maximum ID from the heartrate table
$query = "SELECT MAX(id) AS max_id FROM heartrate";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$maxId = $row['max_id'];

// Retrieve the rate value from the row with the maximum ID
$query = "SELECT rate FROM heartrate WHERE id = $maxId";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$heartRate = $row['rate'] / 60;

// Retrieve the maximum ID from the temperature_sensor table
$query = "SELECT MAX(id) AS max_id FROM temperature_sensor";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$maxId = $row['max_id'];

// Retrieve the rate value from the row with the maximum ID
$query = "SELECT Celsius FROM temperature_sensor WHERE id = $maxId";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$Celsius = $row['Celsius'];

// Retrieve the maximum ID from the GSR sensor table
$query = "SELECT MAX(id) AS max_id FROM sensor";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$maxId = $row['max_id'];

// Retrieve the rate value from the row with the maximum ID
$query = "SELECT gsr FROM sensor WHERE id = $maxId";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$gsr = $row['gsr'];



// Check if the form is submitted

if (isset($_POST['upload'])) {
    // Retrieve the sensor values from the form
    $temperature = $_POST['temperature'];
    $heartRate = $_POST['heartRate'];
    $gsr = $_POST['gsr'];

    // Retrieve the userName from the session
    $userName = $_SESSION['userName'];

    // Insert the sensor data into the history_sensor table
    $query = "INSERT INTO history_sensor (userName, datetime, tem_C, heartrate, gsr) VALUES ('$userName', CURRENT_TIMESTAMP, '$temperature', '$heartRate', '$gsr')";
    mysqli_query($conn, $query);


}
?>

<div id="ajaxResponseContainer">
    <!-- AJAX response content will be inserted here -->
</div>
<body>
<br><br><br><br><br><br><br>

<h1 id="text">Sensor Data Dashboard</h1>

<div class="sensor-container">
    <div class="sensor-card">
        <h2><i class="fa-solid fa-temperature-low" style="color: #74C0FC;"></i></h2>
        <h2>Temperature Sensor</h2>
        <p><strong>Temperature:</strong> <span id="temperature"><?php echo $Celsius; ?></span> &#8451;</p>
    </div>
    <div class="sensor-card">
        <h2><i class="fa-solid fa-heart-pulse" style="color: #ae2319;"></i></h2>
        <h2>Heart Rate Sensor</h2>
        <p><strong>Heart Rate:</strong> <span id="heart-rate"><?php echo $heartRate; ?></span> BPM</p>
    </div>
    <div class="sensor-card">
        <h2><i class="fa-solid fa-person" style="color: #d99012;"></i></h2>
        <h2>Human Resistance Sensor</h2>
        <p><strong>Resistance:</strong> <span id="human-resistance"><?php echo $gsr; ?></span> Ohms</p>
    </div>
</div>

<div class="upload-container">
    <form method="post">
        <input type="hidden" name="temperature" id="temperature" value="<?php echo $Celsius; ?>">
        <input type="hidden" name="heartRate" id="heart-rate" value="<?php echo $heartRate; ?>">
        <input type="hidden" name="gsr" id="human-resistance" value="<?php echo $gsr; ?>">
        <button class="upload" name="upload" id="upload"><i class="fa-solid fa-upload"></i></button>
    </form>
</div>
<?php
$query = "SELECT * FROM history_sensor WHERE userName = ?";

$userName = $_SESSION['userName'];
// Prepare the statement
$stmt = $conn->prepare($query);

// Bind the username from the session to the statement
$stmt->bind_param("s", $userName);

// Execute the query
$stmt->execute();

// Get the results
$result = $stmt->get_result();

// Check if there are any results
if ($result->num_rows > 0) {

    echo '<table class="table" id="historySensor">';
    echo'<thead>';
    echo'<tr>';
    echo'<th colspan="6" id="TITLE">History Record</th>';
    echo' </tr>';
    echo'<tr>';
    echo' <th>Id</th>';
    echo'<th>Date & Time</th> ';
    echo'<th>Temperature</th> ';
    echo'<th>HeartRate</th> ';
    echo'<th>GSR</th> ';
    echo'</tr> ';
    echo' </thead> ';
    echo' <tbody>';
    echo' ';
    echo' ';


    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row["id"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["datetime"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["tem_C"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["heartrate"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["gsr"]) . '</td>';
        echo '</tr>';
    }
        echo '</tbody>';
        echo '</table>';
}else {
    echo "0 results";
}
// Close statement
$stmt->close();
$conn->close();
?>
</body>

</html>