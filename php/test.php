<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "miniproject";

   
$conn = new mysqli($servername, $username, $password, $dbname);

   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   


   $query  = "SELECT * FROM event_list WHERE recipients_branch='CS'OR recipients_branch='EC'"; 
    $result = mysqli_query($conn, $query ) or die(mysqli_error($conn));

    




   
  
?>




