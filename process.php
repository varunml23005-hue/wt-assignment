<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $address = htmlspecialchars($_POST['address'] ?? '');
    $gender = htmlspecialchars($_POST['gender'] ?? '');
    $dob = htmlspecialchars($_POST['dob'] ?? '');

    // Display the submitted information with styling
    echo "<div class='form-submission-success'>";
    echo "<h2>Registration Successful!</h2>";
    echo "<p>Thank you for registering. Here is the information you submitted:</p>";
    echo "<p><strong>Name:</strong> " . ($name ?: 'N/A') . "</p>";
    echo "<p><strong>Email:</strong> " . ($email ?: 'N/A') . "</p>";
    echo "<p><strong>Phone Number:</strong> " . ($phone ?: 'N/A') . "</p>";
    echo "<p><strong>Address:</strong> " . ($address ?: 'N/A') . "</p>";
    echo "<p><strong>Gender:</strong> " . ($gender ?: 'N/A') . "</p>";
    echo "<p><strong>Date of Birth:</strong> " . ($dob ?: 'N/A') . "</p>";
    echo "</div>";
} else {
    echo "<p class='error'>Invalid request method.</p>";
}
?>