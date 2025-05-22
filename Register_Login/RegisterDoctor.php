<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/61b76a306e.js" crossorigin="anonymous"></script>
    <script src="DoctorNext.js"></script>
    <script src="password.js"></script>
    <script src="inputValidation.js"></script>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="termsConditions.css">
    <script src="function.js"></script>
</head>
<script>
    function navigate() {
        var dropdown = document.getElementById("role");
        var selectedOption = dropdown.options[dropdown.selectedIndex].value;

        if (selectedOption !== "") {
            window.location.href = selectedOption;
        }
    }

    // Function to toggle between registration form and password form
    function toggleForms() {
        var registrationForm = document.getElementById('registrationForm');
        var passwordForm = document.getElementById('passwordForm');
        var nextButton = document.getElementById('next');

        // When the Next button is clicked
        document.getElementById('nextButton').addEventListener('click', function(event){
            event.preventDefault(); // Prevent the form from submitting

            // Hide the registration form and show the password form
            registrationForm.style.display = 'none';
            passwordForm.classList.remove('hidden');
        });
    }

    // Call the function to activate form toggling
    toggleForms();

</script
<body>
<?
require_once("../conn.php");
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the maximum doctorID from the table
    $query = "SELECT MAX(doctorID) as maxID FROM doctor";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $maxId = $row['maxID'];
    $newId = (int)$maxId + 1; // Increment the doctorID

    // Get the form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $types = mysqli_real_escape_string($conn, $_POST['types']);
    $tel = mysqli_real_escape_string($conn, $_POST['tel']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']); // Consider hashing the password

    // Prepare an insert statement
    $query = "INSERT INTO doctor (doctorID, name, types, tel, email, password) VALUES (doctorID, name, types, tel, email, password)";

    if($stmt = mysqli_prepare($conn, $query)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ississ", $newId, $name, $types, $tel, $email, $password);

        // Execute the statement
        if(mysqli_stmt_execute($stmt)){
            echo "Record created successfully.";
        } else {
            echo "ERROR: Could not execute query: $query. " . mysqli_error($conn);
        }
    } else {
        echo "ERROR: Could not prepare query: $query. " . mysqli_error($conn);
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

// Close connection
mysqli_close($conn);
?>
<div class="form">
    <h1>Doctor Register</h1>

    <!-- personal information form -->
    <form id="registrationForm" method="post" action="RegisterDoctor.php">
        <div class="field username-field">
            <div class="input">
                <input type="text" name="name" id="username" pattern="[A-Z][a-z]*" required placeholder="start with an uppercase letter and contain lowercase letters">
                <label for="username">Username:</label>
            </div>
            <span class="error username-error">
          <p class="error-text"><i class="fa-solid fa-circle-exclamation" style="color: #e61405;"></i> start from uppercase and contain lowercases</p>
        </span>
        </div>
        <div class="field types-field" id="types-field">
            <label for="types">Doctor Type:</label>
            <div class="input" name="types">
                <input list="types" />
                <datalist id="types">
                    <option value="General medical practitioner" />
                    <option value="Cardiologist" />
                    <option value="Gynocologist" />
                    <option value="Pediatrician" />
                </datalist>

            </div>

        </span>
        </div>
        <div class="field email-password">
            <div class="input">
                <input type="email" name="email" id="email" required>
                <label for="email">Email:</label>
            </div>
            <span class="error email-error">
          <p class="error-text"> <i class="fa-solid fa-circle-exclamation" style="color: #e61405;"></i> Please enter a valid email</p>
        </span>

        </div>

        <div class="field tel-field">
            <div class="input">
                <input type="text" name="tel" id="tel" required pattern="^852-\d{8}" value="852-">
                <label for="tel">Tel:</label>
            </div>
            <span class="error tel-error">
          <p class="error-text"> <i class="fa-solid fa-circle-exclamation" style="color: #e61405;"></i> tel format: 852- 8 numbers.</p>
        </span>
        </div>
        <div class="field role-field">
            <div class="input">
                User Type:
                <select id="role" onchange="navigate()">
                    <option value="" disabled selected>Select your role</option>
                    <option value="RegisterUser.php">Public</option>
                    <option value="Doctor" selected>Doctor</option>
                </select>
            </div>
            <span class="error role-error">
      <p class="error-text"> <i class="fa-solid fa-circle-exclamation" style="color: #e61405;"></i> Please select a role</p>
    </span>
        </div>
        already have an account? <a href="../index.html">Login</a>

        <button type="button" id="next"><i class="fa-solid fa-arrow-right"></i> Next</button>
    </form>

    <!-- password form -->
    <form id="passwordForm" class="hidden" method="post" action="RegisterDoctor.php">
        <div class="field create-password">
            <div class="input">
                <input type="password" name="password" id="password" minlength="8" required>
                <label for="password">Password:</label>
                <span class="eye" onclick="Actpassword('password')">
            <i id="password-hide" class="fa-regular fa-eye-slash"></i>
            <i id="password-show" class="fa-regular fa-eye" style="display: none;"></i>
          </span>
            </div>

            <span class="error password-error">
          <i class="bx bx-error-circle error-icon"></i>
          <p class="Starterror-text">
            <i class="fa-solid fa-circle-exclamation" style="color: #e61405;"></i> Start with an uppercase letter.
          </p>
          <p class="Minerror-text">
            <i class="fa-solid fa-circle-exclamation" style="color: #e61405;"></i> Minimum one lowercase letter and one digit.
          </p>
          <p class="Lengtherror-text">
            <i class="fa-solid fa-circle-exclamation" style="color: #e61405;"></i> Length must be between 8 to 10 characters.
          </p>
        </span>
        </div>

        <div class="field confirm-password">
            <div class="input">
                <input type="password" id="confirmPassword" required>
                <label for="confirmPassword">Confirm Password:</label>
                <span class="eye" onclick="Actpassword('confirmPassword')">
            <i id="confirmPassword-hide" class="fa-regular fa-eye-slash"></i>
            <i id="confirmPassword-show" class="fa-regular fa-eye" style="display: none;"></i>
          </span>
            </div>

            <div id="passwordError" class="error-message">Passwords do not match.</div>
            <span class="error cPassword-error">
          <p class="error-text"> <i class="fa-solid fa-circle-exclamation" style="color: #e61405;"></i> Passwords don't match</p>
        </span>
        </div>
        <input type="checkbox" required>I agree to the <a id="termsLink" href="#">terms and conditions</a>
        <br>
        <button id="back"><i class="fa-solid fa-arrow-left"></i> Back</button>
        <button type="submit" id="register">Register</button>
    </form>
</div>

<!-- Terms and conditions overlay -->
<div class="overlay">
    <div class="modal">
        <span class="modal-close">&times;</span>
        <h2>Terms and Conditions</h2>
        <p>1. Account Registration</p>
        <p>
            1.1. To use our food delivery platform, you must register an account with accurate and complete information.</p>
        <p>
            1.2. You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account.</p>
        <p>
            1.3. You must promptly notify us of any unauthorized use of your account or any other security breach.</p>
        <p>2. Placing Orders</p>
        <p> 2.1. By placing an order through our platform, you agree to provide accurate and up-to-date information, including your delivery address and contact details. </p>
        <p> 2.2. You are responsible for reviewing and confirming your order details before submitting the order.</p>
        <p> 2.3. Once an order is placed, it is considered final and cannot be modified or canceled, except as permitted by our cancellation policy.</p>

        <p>3. Delivery</p>
        <p>3.1. We strive to deliver orders promptly and within the estimated delivery time. However, delivery times may vary depending on various factors, including traffic conditions and order volume.</p>
        <p> 3.2. You agree to provide clear and accurate delivery instructions to ensure smooth delivery of your order.</p>
        <p> 3.3. In the event of any issues or delays in delivery, we will make reasonable efforts to inform you and resolve the situation.</p>
        <p> 4. Payment</p>
        <p>4.1. Payment for orders placed through our platform must be made using the available payment methods.</p>
        <p> 4.2. All prices displayed on our platform are in the local currency and include applicable taxes and fees, unless otherwise stated.</p>
        <p> 4.3. We reserve the right to update prices, fees, and payment methods at any time without prior notice.</p>

        <p>5. User Conduct</p>
        <p> 5.1. You agree to use our food delivery platform responsibly and in compliance with all applicable laws and regulations.</p>
        <p>5.2. You shall not engage in any fraudulent, unlawful, or abusive activities while using our services.</p>
        <p>
            5.3. Any misuse or unauthorized use of our platform may result in the suspension or termination of your account.</p>
        <p>6. Intellectual Property</p>
        <p> 6.1. All content, trademarks, logos, and intellectual property rights on our platform are owned or licensed by us.</p>
        <p>6.2. You may not reproduce, distribute, modify, or create derivative works of any content from our platform without our prior written consent.</p>

        <p>7. Limitation of Liability</p>
        <p> 7.1. We strive to provide accurate information and a seamless experience. However, we do not guarantee the availability, accuracy, or completeness of our platform or the services provided.</p>
        <p>
            7.2. In no event shall we be liable for any direct, indirect, incidental, consequential, or punitive damages arising out of or in connection with your use of our platform.</p>
        <p>8. Modifications to Terms and Conditions
            8.1. We reserve the right to modify these terms and conditions at any time without prior notice.</p>
        <p>
            8.2. It is your responsibility to review these terms periodically for any changes.</p>
        <p>By using our food delivery platform, you acknowledge that you have read, understood, and agreed to these terms and conditions. If you have any questions or concerns, please contact our customer support.</p>
        <p>Please note that this is just a sample terms and conditions content, and it's important to consult with legal professionals to ensure that your specific terms and conditions comply with applicable laws and regulations.</p>

    </div>
</div>


</body>

</html>
