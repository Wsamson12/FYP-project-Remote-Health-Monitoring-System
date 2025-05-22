<?php
require_once '../conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare the delete statement
    $stmt = $conn->prepare("DELETE FROM `appointment` WHERE `id` = ?");
    $stmt->bind_param("i", $id);

    // Execute the query
    if ($stmt->execute()) {
        // If successful
        echo 'success';
    } else {
        // If failed
        echo 'error';
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo 'Invalid request';
}
?>