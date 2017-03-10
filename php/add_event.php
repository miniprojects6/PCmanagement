<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "add_event";

$name = $_GET["event_name"];
$description = $_GET["event_description"];
$date = $_GET["event_date"]; 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO event_list (name, description, date, recipients)
VALUES ('$name', '$description', '$date', 'Default')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>