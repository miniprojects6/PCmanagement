<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject";


$name = $_POST["message_name"];
$description = $_POST["message_description"];
$date = $_POST["message_date"]; 
$recipient_gpa =$_POST["select_msg_GPA"];
$recipient_branch =$_POST["select_msg_branch"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO messages (Subject, Date, Description, Recipient1, Recipient2)
VALUES ('$name', '$date',	'$description', '$recipient_gpa', '$recipient_branch')";

if ($conn->query($sql) === TRUE) {
    echo "EVENT CREATED SUCCESSFULLY";
    header('Location: ../basic_form.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>