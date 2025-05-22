<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="Navbar/navbar.css">
    <link rel="stylesheet" href="tableUser.css">
    <style>
        .button-34 {
            background: #5E5DF0;
            border-radius: 999px;
            box-shadow: #5E5DF0 0 10px 20px -10px;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
            font-size: 16px;
            font-weight: 700;
            line-height: 24px;
            opacity: 1;
            outline: 0 solid transparent;
            padding: 8px 18px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            width: fit-content;
            word-break: break-word;
            border: 0;
        }
        .hidden {
            display: none;
        }
        .search-box-wrapper {
            position: relative;
            text-align: center;
            margin-top: 20px;
        }

        .search-box {
            padding: 8px 35px 8px 15px; /* Make room for the icon */
            border-radius: 4px;
            border: 1px solid #ddd;
            font-size: 16px;
        }
    </style>


</head>
<body>
<?php
include('Navbar/navbar.php');
require_once ("../conn.php");
?>

<br>
<br>
<br>
<br>
<br>
<br>

<div style="text-align: center;">
    <button class="button-34" role="button" id="patient">Patient List</button>
    <button class="button-34" role="button" id="sensor">Sensor Record</button>
</div>

<div class="search-box-wrapper" id="searchBoxContainer">
    <input type="text" class="search-box" id="searchBox" placeholder="Search by patient name...">
</div>

<?php
echo "<br>";
?>

<?php
// Query to select all users
$queryUsers = "SELECT * FROM `users`";
$resultUsers = $conn->query($queryUsers);

// Check if there are any results
if ($resultUsers->num_rows > 0) {
    echo '<table class="table" id="userTable">';
    echo '<thead>';
    echo '<tr>';
    echo '<th colspan="4" id="TITLE">Patient List</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<th>Id</th>';
    echo '<th>Name</th>';
    echo '<th>Email</th>';
    echo '<th>Tel</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Output data of each row
    while($row = $resultUsers->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row["userID"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["userName"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["Email"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["tel"]) . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} else {
    echo "0 results";
}
?>


<?php
// Query to select all sensor records
$queryHistory = "SELECT * FROM `history_sensor`";
$resultHistory = $conn->query($queryHistory);

// Check if there are any results
if ($resultHistory->num_rows > 0) {



    echo '<table class="table hidden" id="sensorTable">';
    echo '<thead>';
    echo '<tr>';
    echo '<th colspan="6" id="TITLE">Sensor Record</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<th>Id</th>';
    echo '<th>Name</th>';
    echo '<th>Date & Time</th>';
    echo '<th>Temperature</th>';
    echo '<th>Heart Rate</th>';
    echo '<th>GSR</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Output data of each row
    while($row = $resultHistory->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row["id"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["userName"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["datetime"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["tem_C"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["heartrate"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["gsr"]). '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} else {
    echo "0 results";
}
?>

<script>
    const patientButton = document.getElementById('patient');
    const sensorButton = document.getElementById('sensor');
    const userTable = document.getElementById('userTable');
    const sensorTable = document.getElementById('sensorTable');
    const searchBoxContainer = document.getElementById('searchBoxContainer'); // Get the search box container

    patientButton.addEventListener('click', function() {
        userTable.classList.remove('hidden');
        sensorTable.classList.add('hidden');
        searchBoxContainer.style.display = 'none'; // Hide the search box when "Patient List" is clicked
    });

    sensorButton.addEventListener('click', function() {
        userTable.classList.add('hidden');
        sensorTable.classList.remove('hidden');
        searchBoxContainer.style.display = 'block'; // Show the search box when "Sensor Record" is clicked
    });

    document.getElementById('searchBox').addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        const rows = sensorTable.getElementsByTagName('tr');

        for (let i = 1; i < rows.length; i++) { // Start from 1 to skip the header row
            const userNameCell = rows[i].getElementsByTagName('td')[1]; // Assuming the userName is the second cell
            if (userNameCell) {
                const userName = userNameCell.textContent.toLowerCase() || userNameCell.innerText.toLowerCase();
                if (userName.indexOf(searchTerm) > -1) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = 'none';
                }
            }
        }

        // If search box is empty, show all records again
        if (searchTerm === '') {
            for (let i = 1; i < rows.length; i++) {
                rows[i].style.display = '';
            }
        }
    });
</script>
</body>
</html>