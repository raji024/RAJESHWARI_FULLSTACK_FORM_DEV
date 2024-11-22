<?php
// Database connection variables
$host = 'localhost'; // Host name
$username = 'root';  // Default username for XAMPP
$password = '';      // Default password for XAMPP
$dbname = 'raji_db'; // Database name

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname,3308);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form submission handling
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $event = $_POST['event'];
    $topic = $_POST['topic'] ?? ''; // Optional field
    $payment = $_POST['payment'];
    $registered_at = date('Y-m-d H:i:s'); // Get current timestamp

    // Insert data into the table
    $sql = "INSERT INTO event_registration (name, email, phone, event, topic, payment, registered_at) 
            VALUES ('$name', '$email', '$phone', '$event', '$topic', '$payment', '$registered_at')";

if ($conn->query($sql) === TRUE) {
  // JavaScript for alert and redirect after alert is dismissed
  echo "<script>
          alert('Registration successful!');
          window.location.href = 'index.html';  // Redirect after alert
        </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>

