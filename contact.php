<?php
$servername = "localhost"; // Replace with your server name if different
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "phonixhotel"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the form data
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Sanitize and validate the inputs (you can add your own validation logic here)

    // Perform the database operation (e.g., insert into a table)
    $sql = "INSERT INTO contact (fullname, email, message) VALUES ('$fullname', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Operation successful
        echo '<script>
        setTimeout(function() {
            window.location.href = "index.html";
        }, 3000);
    </script>';
    } else {
        // Error occurred during the operation
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
