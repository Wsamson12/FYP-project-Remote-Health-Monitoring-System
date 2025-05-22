<?php
require_once '../conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Extract the information from the post request
    $id = $_POST['id'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $visitMethod = $_POST['visitMethod'];
    $doctorName = $_POST['docname'];

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("UPDATE appointment SET name=?, date=?, time=?, VisitMethod=? WHERE id=? AND doctorName=?");
    $stmt->bind_param("ssssis", $name, $date, $time, $visitMethod, $id, $doctorName);

    // Execute the update statement
    if ($stmt->execute()) {
        // Success: Redirect to the Appointment Records page with a success message
        header("Location: AppRecord.php?msg=Record+updated+successfully");
    } else {
        // Error: Redirect to the Appointment Records page with an error message
        header("Location: AppRecord.php?msg=Failed+to+update+record");
    }

    // Check if the update was successful
    if ($stmt->affected_rows > 0) {
        echo "Update record is successful";
    } else {
        echo "Fail to update record";
    }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();

    // Redirect to the Appointment Records page
    header("Location: AppRecord.php?msg=Record+successfully+updated");
    exit;
} else {
    header("Location: AppRecord.php?msg=Invalid+request");
    exit;
}
?>