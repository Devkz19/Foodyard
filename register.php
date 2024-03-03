<?php

// Database configuration
$dbHost = 'localhost'; 
$dbUsername = 'root'; 
$dbPassword = ''; 
$dbName = 'foodtrack'; 

// Create a connection to the database
$mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check if the connection was successful
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Optionally, you can set the character set to UTF-8
$mysqli->set_charset("utf8");

// Function to sanitize and validate input
function sanitize_input($input)
{
    // Use appropriate sanitization and validation techniques
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize user input
    $fullname = sanitize_input($_POST['fullname']);
    $email = sanitize_input($_POST['email']);
    $username = sanitize_input($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security
    $mobile = sanitize_input($_POST['mobile']);

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO registration (fullname, email, username, password, mobile) VALUES (?, ?, ?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssss", $fullname, $email, $username, $password, $mobile);

    // Execute the statement
    if ($stmt->execute()) {
        // Registration successful
        echo "Registration successful. Please login <a href='login.html'>here</a>.";
    } else {
        // Registration failed
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close database connection
$mysqli->close();

?>
