<?php
// update_profile.php

// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wellness_synergy";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$user_id = $_POST['user_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$height = $_POST['height'];

// Prepare and execute SQL statement
$sql = "UPDATE users SET name = ?, email = ?, birthdate = ?, address = ?, phone_number = ?, height = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssi", $name, $email, $dob, $address, $phone, $height, $user_id);

if ($stmt->execute()) {
    header("Location: profile.php"); // Redirect back to profile page
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
<?php
// update_profile.php

// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$user_id = $_POST['user_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$height = $_POST['height'];

// Prepare and execute SQL statement
$sql = "UPDATE users SET name = ?, email = ?, birthdate = ?, address = ?, phone_number = ?, height = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssi", $name, $email, $dob, $address, $phone, $height, $user_id);

if ($stmt->execute()) {
    header("Location: profile.php"); // Redirect back to profile page
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
