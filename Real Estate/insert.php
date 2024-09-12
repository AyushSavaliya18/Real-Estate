<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "project");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize form data
    $fname = filter_var(trim($_POST['fname']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO property (fname, email, message) VALUES (?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sss", $fname, $email, $message);

        // Execute statement
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
} else {
    echo "Invalid request method.";
}

// Close connection
$conn->close();
?>