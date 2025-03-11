<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guess_game";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get scores ordered by attempts (lowest first)
$sql = "SELECT username, attempts FROM scores ORDER BY attempts ASC";
$result = $conn->query($sql);

$scores = [];
while ($row = $result->fetch_assoc()) {
    $scores[] = $row;
}

echo json_encode($scores);
$conn->close();
?>
