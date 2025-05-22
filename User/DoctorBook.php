<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/61b76a306e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="doctorinfo.css">
    <link rel="stylesheet" href="AppointmentForm.css">

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

        }
    </style>
</head>

<body>
<?php

require_once ("../conn.php");
include('Navbar/navbar.php');
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
// Query to select all doctors
$query = "SELECT `doctorID`, `name`, `types`, `tel`, `email` FROM `doctor`";
$result = $conn->query($query);

// Check if there are any results
if ($result->num_rows > 0) {
    // Start table and include the header row
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th colspan="6" id="TITLE">Doctor List</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<th>Id</th>';
    echo '<th>Name</th>';
    echo '<th>Types</th>';
    echo '<th>Tel</th>';
    echo '<th>Email</th>';
    echo '<th>Appointment</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row["doctorID"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["name"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["types"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["tel"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["email"]) . '</td>';
        echo '<td><button id="Appointment" onclick="openForm(\'' . htmlspecialchars($row["name"], ENT_QUOTES) . '\')">
        <i class="fa-solid fa-square-plus"></i></button></td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} else {
    echo "0 results";
}


?>
<?php

// Check if the name is set in the session and not empty
if (isset($_SESSION['userName']) && !empty($_SESSION['userName'])) {
    $loggedInUserName = $_SESSION['userName']; // Retrieve the name from the session
} else {
    $loggedInUserName = ''; // If not set, default to an empty string
}
?>
<!--submit form-->
<?php
// ...rest of your PHP code...

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize the input data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $date= mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $visitMethod = mysqli_real_escape_string($conn, $_POST['visitMethod']);
    $doctorName = mysqli_real_escape_string($conn, $_POST['doctorName']);

    // Retrieve the maximum doctorID and add 1 to it to create a new ID
    $result = mysqli_query($conn, "SELECT MAX(id) FROM appointment");
    $row = mysqli_fetch_array($result);
    $newId = str_pad((int) $row[0] + 1, 10, "0", STR_PAD_LEFT); // 假设doctorID是一个数字，需要转换成字符串

    // SQL query to insert data into the doctor table with the new doctorID
    $sql = "INSERT INTO appointment (id, name, date, time, VisitMethod, doctorName) VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare the SQL statement
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ssssss", $newId, $name, $date, $time, $visitMethod, $doctorName);
        // Execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Close the statement if you're done with it
            mysqli_stmt_close($stmt);
            // Use echo to print out the JavaScript code for the alert
            echo "<script>alert('New record created successfully');</script>";
            // Redirect to another page after the alert if needed
            echo "<script>window.location.href='DoctorBook.php';</script>";
        } else {
            // Output an error message in an alert box
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>
<br>
<br>
<br>
<br>
<br>
<!-- Appointment Form Modal -->
<div id="appointmentForm" class="modal">
    <!-- Modal Content -->
    <div class="modal-content">
        <span class="close" onclick="closeForm()">&times;</span>
        <form  method="post" action="../User/DoctorBook.php">
            <!-- Form Fields -->
            <h2>Appointment</h2>

            <div class="form-field">
                <label for="name">Name:</label>
                <!-- Echo the logged in user's name as the value if it's available -->
                <input type="text" name="name" value="<?php echo htmlspecialchars($loggedInUserName); ?>" readonly>
            </div>
            <div class="form-field">
                <label for="date">Date:</label>
                <!-- Use PHP to set the min attribute to today's date -->
                <input type="date" name="date" required min="<?php echo date('Y-m-d'); ?>">
            </div>
            <div class="form-field">
                <label for="time">Time:</label>
                <input type="time" name="time" required>
            </div>
            <div class="form-field">
                <label for="docName">Doctor Name:</label>
                <input type="text" id="doctorName" name="doctorName" readonly>
            </div>
            <div class="form-field">
                <label for="method">Visit Method:</label>
                <select id="method" name="visitMethod">
                    <option value="" disabled selected>Select method</option>
                    <option value="online">online</option>
                    <option value="face to face">face to face</option>
                </select>
            </div>
            <!-- Add new form fields here -->
            <button type="submit" id="submit">Submit</button>
            <button type="reset" id="clear">Clear</button>
        </form>
    </div>
</div>
<script>
    // Script to open and close the appointment form
    function openForm(doctorName) {
        document.getElementById('doctorName').value = doctorName;
        document.getElementById('appointmentForm').style.display = 'block';
    }

    function closeForm() {
        document.getElementById('appointmentForm').style.display = 'none';
    }

</script>
</body>

</html>