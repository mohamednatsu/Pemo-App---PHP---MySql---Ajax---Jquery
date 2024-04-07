<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $RePassword = $_POST['RePassword'];

    // Process form data (you can do any processing here)

    // For demonstration purposes, let's just echo the received data
    $servername = "localhost";
    $usernameDB = "root";
    $passwordDB = "";
    $database = "students";

    // Create connection
    $conn = new mysqli($servername, $usernameDB, $passwordDB, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sample user data (replace with your form data or variables)
    // Note: This should be hashed before storing in the database for security reasons

    // Prepare INSERT statement
    $image = "test.img";
    $stmt = $conn->prepare("INSERT INTO student (full_name, user_name, birthdate, phone, address, PASSWORD, confirm_password, user_image, email) VALUES (?,?,?,?,?,?,?,?,?)");

    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }
    
    $success = $stmt->bind_param("sssssssss", $fullName, $username, $date, $phone, $address, $password, $RePassword, $image, $email);

    if ($success === false) {
        die("Error binding parameters: " . $stmt->error);
    }

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
