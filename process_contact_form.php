<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

// Database connection parameters
$servername = "localhost"; 
$username = "adminuser"; 
$password = 'm1Rl7K$rtCAh'; 
$dbname = "alivean";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form inputs
    $name = $conn->real_escape_string(trim($_POST['name']));
    $email = $conn->real_escape_string(trim($_POST['mail']));
    $phone = isset($_POST['phone']) ? $conn->real_escape_string(trim($_POST['phone'])) : ''; // Optional field
    $message = $conn->real_escape_string(trim($_POST['message']));

    // Basic validation to ensure required fields are filled
    if (empty($name) || empty($email) || empty($message)) {
        echo "<script>alert('Please fill in all required fields.'); window.history.back();</script>";
        exit();
    }

    // Optional: Validate the email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format.'); window.history.back();</script>";
        exit();
    }

    // Insert form data into the database
    $sql = "INSERT INTO tbl_contactus (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Successful insert
        echo "<script>alert('Your message has been sent successfully!'); window.location.href = 'contact_us.php';</script>";
    } else {
        // Error occurred
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.history.back();</script>";
    }
}

// Close the database connection
$conn->close();
?>
