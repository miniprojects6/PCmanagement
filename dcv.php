<?php

     include("php/dbconnect.php");
    $Userid   = $_POST[roll];  




// get the .pdf

$query= "SELECT * FROM resume WHERE Userid= '$Userid' ";
$result = mysqli_query($conn, $query ) or die(mysqli_error($conn)); 
$row = mysqli_fetch_assoc($result);
$id= $row['Userid'];
$content= $row['CV'];

header("Content-type: application/pdf");
header('Content-disposition: attachment; filename="resume.pdf"');
print($content);





    



?>