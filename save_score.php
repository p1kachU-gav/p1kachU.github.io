<?php
$servername = "localhost";
$username = "root"; // Change if necessary
$password = "";     // Change if necessary
$dbname = "guess_game";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from POST request
$username = $_POST['username'];
$attempts = $_POST['attempts'];

// Insert into database
$sql = "INSERT INTO scores (username, attempts) VALUES ('$username', '$attempts')";

if ($conn->query($sql) === TRUE) {
    echo "Score saved!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
