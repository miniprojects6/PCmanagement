<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject";


$name = $_POST["event_name"];
$description = $_POST["event_description"];
$date = $_POST["event_date"]; 
$recipient_gpa =$_POST["select_GPA"];
$recipient_branch =$_POST["select_branch"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO event_list (name, description, date, recipients_gpa, recipients_branch)
VALUES ('$name', '$description', '$date', '$recipient_gpa', '$recipient_branch')";

if ($conn->query($sql) === TRUE) {
	 header('Location: ../basic_form.html');	
    echo "EVENT CREATED SUCCESSFULLY";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>