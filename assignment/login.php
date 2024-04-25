<?php
session_start(); // Start session (if not already started)

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate username/email and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to database (replace with your database credentials)
    $conn = new mysqli('localhost', 'root', '', 'assignment');
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Prepare SQL statement to retrieve user record by username/email
    $stmt = $conn->prepare('SELECT *  FROM users WHERE username = ? OR email = ?');
    $stmt->bind_param('ss', $username, $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists and retrieve user data
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        // Verify password hash
        if (password_verify($password, $user['password'])) {
            // Password is correct, store user data in session
           $_SESSION['username'] = $user['username'];
           $_SESSION['email'] = $user['email'];
           $_SESSION['profile_picture'] = $user['profile_picture'];
    

            echo "success";
        } else {
            // Password is incorrect
            $error_message = 'Invalid username/email or password.';
        }
    } else {
        // User not found
        $error_message = 'Invalid username/email or password.';
    }

    // Close database connection
    $stmt->close();
    $conn->close();
}
?>
