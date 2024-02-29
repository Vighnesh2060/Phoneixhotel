<?php
// Database configuration
$hostname = "localhost";  // Replace with your database hostname
$username = "root";  // Replace with your database username
$password = "";  // Replace with your database password
$database = "phonixhotel";  // Replace with your database name

// Create a new MySQLi object
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful, you can perform database operations here

// Retrieve the form data
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $people = $_GET['people'];
    $time = $_GET['time'];
    $date = $_GET['date'];
    $phoneNumber = $_GET['number'];

    // Prepare the SQL statement
    $sql = "INSERT INTO `book` (`name`, `email`, `people`, `time`, `date`, `number`) 
            VALUES ('$name', '$email', '$people', '$time', '$date', '$phoneNumber')";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        echo '<script>
        setTimeout(function() {
            window.location.href = "index.html";
        }, 3000);
    </script>';
    exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
