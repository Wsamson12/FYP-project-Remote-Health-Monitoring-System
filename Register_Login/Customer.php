<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="Customer.css">
    <title>Customer Login Page </title>
    <style>
        input[type='password'] {
            font-size: 20px; /* Increase text size for password fields */
        }
    </style>
</head>

<body>
<?php
session_start();
require_once('../conn.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signUp'])) {
    $userName = $_POST['name'];
    $Email = $_POST['email'];
    $tel = $_POST['tel'];
    $password = $_POST['pw'];

    // Get the maximum userID
    $maxIDQuery = "SELECT MAX(userID) FROM `users`";
    $result = mysqli_query($conn, $maxIDQuery);
    $row = mysqli_fetch_array($result);
    $maxID = $row[0];

    // Determine the new userID
    $newUserID = ($maxID === NULL) ? 1 : $maxID + 1;

    // Insert new user into the database
    $sql = "INSERT INTO users (userID, userName, Email, tel, password) VALUES (?, ?, ?, ?, ?)";

    // Prepare statement
    $stmt = mysqli_prepare($conn, $sql);
    // Bind parameters
    mysqli_stmt_bind_param($stmt, 'issss', $newUserID, $userName, $Email, $tel, $password);
    // Execute query
    mysqli_stmt_execute($stmt) or die(mysqli_error($conn));

    // Close statement
    mysqli_stmt_close($stmt);
    // Redirect or handle the successful registration as needed
}
?>
<?php
require_once('../conn.php'); // Make sure this path is correct

// Check if we have a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signIn'])) {
    $userName = $_POST['name'];
    $password = $_POST['pw'];

    // Prepare SQL to prevent SQL injection
    $sql = "SELECT * FROM users WHERE userName = ? AND password = ?";

    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ss", $userName, $password);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Store the result so we can check if the account exists in the database.
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) == 1) {
        // Account exists, now we verify the password.
        // Assuming you want to start a new session with user details
        $_SESSION['userName'] = $userName;
        // Redirect to user home page
        header("Location: ../User/home.php");
        exit();
    } else {
        // Username or password is incorrect
        echo '<script>alert("Incorrect username or password!");</script>';
    }

    // Close statement
    mysqli_stmt_close($stmt);
}
?>
    <h1>Remote Health Monitoring System</h1>
    <h1>Login Page</h1>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="POST">
                <h1>Create Account</h1>
                <span>use your username and email for registeration</span>
                <input type="text" id="name" name="name" placeholder="Username" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="text" id="tel" name="tel" placeholder="Tel" required>
                <input type="password" name="pw" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <button id="sign-up" name="signUp">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in" >
            <form method="post" action="Customer.php">
                <h1>Public</h1>
                <h1>Sign In</h1>
                <span>use your username password</span>
                <input type="text"  name="name" placeholder="Username">
                <input type="password" name="pw" placeholder="Password">
                <a href="#">Forget Your Password?</a>
                <button id="sign-in" name="signIn">Sign In</button>
                <button>reset</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details</p>
                    <button class="hidden" id="register">Sign Up</button>
                    <a href="Doctor.php"><button class="restaurant">Doctor Login</button></a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="Customer.js"></script>
</body>
</html>