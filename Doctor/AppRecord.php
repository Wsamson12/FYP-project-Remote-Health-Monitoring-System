<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appointment Records</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/61b76a306e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="AppRecord.css">
    <link rel="stylesheet" href="editform.css">
    <link rel="stylesheet" type="text/css" href="Navbar/navbar.css">
</head>
<body>
<?php
require_once ("../conn.php");
include('Navbar/navbar.php');

// Check if the user is logged in, otherwise redirect to login page


echo "<br><br><br><br><br>";

// Query to select appointments for the logged in doctor only
$query = "SELECT `id`, `name`, `date`, `time`, `VisitMethod`, `doctorName` FROM `appointment` WHERE `doctorName` = ?";

// Prepare the statement
$stmt = $conn->prepare($query);

// Bind the username from the session to the statement
$stmt->bind_param("s", $_SESSION['name']);

// Execute the query
$stmt->execute();

// Get the results
$result = $stmt->get_result();

// Check if there are any results
if ($result->num_rows > 0) {
    // Start table and include the header row
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th colspan="8" id="TITLE">Appointment List</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<th>Id</th>';
    echo '<th>Name</th>';
    echo '<th>Date</th>';
    echo '<th>Time</th>';
    echo '<th>Visit Method</th>';
    echo '<th>Doctor Name</th>';
    echo '<th>Edit</th>';
    echo '<th>Delete</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row["id"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["name"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["date"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["time"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["VisitMethod"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["doctorName"]) . '</td>';
        echo '<td> <a href="javascript:void(0);" data-id="'. htmlspecialchars($row["id"]) .'" class="edit-btn">
        <button id="edit" class="edit-btn" >
        <i class="fa-solid fa-pen-to-square"></i>
        </button> </a></td>';
        echo '<td><button data-id="' . htmlspecialchars($row["id"]) . '" class="delete-btn" id="delete">
        <i class="fa-solid fa-trash"></i></button></td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} else {
    echo "0 results";
}

// Close statement
$stmt->close();
?>
<?php
if (isset($_GET['msg']) && !empty($_GET['msg'])) {
    // Sanitize the message for safe output
    $message = htmlspecialchars($_GET['msg']);
    // Use the message in a JavaScript alert
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<br>
<!-- appointmentForm -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeForm()">x</span>
        <form id="appointmentForm" action="updateAppointment.php" method="post">
            <h2>Edit Appointment</h2>
            <br>
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" name="id" required readonly>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" required readonly>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" required min="<?php echo date('Y-m-d'); ?>">
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" name="time" required>
            </div>
            <div class="form-group">
                <label for="visitMethod">Visit Method:</label>
                <select name="visitMethod" required>
                    <option value="" disabled selected>- Please Select</option>
                    <option value="online">online</option>
                    <option value="face to face">face to face</option>
                </select>
            </div>
            <div class="form-group">
                <label for="docname">Doctor Name:</label>
                <input type="text" name="docname" required readonly>
            </div>
            <div class="form-group">
                <input type="submit" id="submit" value="Submit">
                <input type="reset" id="clear" value="Clear">
            </div>
        </form>
    </div>
</div>
<script>

    // This function fills the form with the data from the clicked row
    function fillFormWithData(rowData) {
        // Format the time string to match the input's expected format (HH:mm or HH:mm:ss)
        // by splitting the string by the colon and taking only the first two segments (hours and minutes)
        var timeString = rowData.time.split(':');
        var formattedTime = timeString[0] + ':' + timeString[1]; // HH:mm format

        // Set the value of the form fields with the data from the row
        $('#appointmentForm input[name="id"]').val(rowData.id);
        $('#appointmentForm input[name="name"]').val(rowData.name);
        $('#appointmentForm input[name="date"]').val(rowData.date);
        $('#appointmentForm input[name="time"]').val(formattedTime);
        $('#appointmentForm select[name="visitMethod"]').val(rowData.VisitMethod);
        $('#appointmentForm input[name="docname"]').val(rowData.doctorName);
    }

    $(document).ready(function() {
        // Attach a click event listener to all edit buttons
        $('.edit-btn').click(function() {
            // Find the closest table row and get its data
            var id = $(this).data('id');
            var $row = $(this).closest('tr');
            $('#appointmentForm input[name="id"]').val(id);
            var rowData = {
                id: $row.find('td:eq(0)').text(), // eq(0) is the first cell - ID
                name: $row.find('td:eq(1)').text(),
                date: $row.find('td:eq(2)').text(),
                time: $row.find('td:eq(3)').text().trim(), // Use trim() to remove any whitespace
                VisitMethod: $row.find('td:eq(4)').text(),
                doctorName: $row.find('td:eq(5)').text()
            };

            // Fill the form with the data
            fillFormWithData(rowData);

            // Show the form and set background to be darker
            $('#modal').show();

            // Prevent scrolling
            $('body').css('overflow', 'hidden');
        });

        $('.delete-btn').on('click', function() {
            // Confirm deletion
            var confirmDeletion = confirm("Do you want to delete?");
            if (confirmDeletion) {
                // User confirmed deletion, proceed with the deletion process
                var id = $(this).data('id');
                // Make an AJAX call to a PHP file that handles deletion
                $.ajax({
                    url: 'deleteAppointment.php', // The PHP file that handles the deletion
                    type: 'POST',
                    data: {id: id},
                    success: function(response) {
                        // Check the response from your PHP script
                        // If the deletion was successful, you may want to check for a specific response
                        if(response == 'success') {
                            // Refresh the page to update the table
                            location.reload();
                        } else {
                            // Handle any errors here
                            alert('Deletion failed: ' + response);
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle any AJAX errors here
                        alert('AJAX error: ' + error);
                    }
                });
            }
        });
        // Close form logic
        $('.close-btn').on('click', function() {
            $('#modal').fadeOut();
            $('body').css('overflow', 'auto'); // Allow scrolling
        });
    });

    // This is the closeForm function used in the close button's onclick attribute
    function closeForm() {
        $('#modal').fadeOut();
        $('body').css('overflow', 'auto'); // Allow scrolling
    }

</script>
</body>
</html>