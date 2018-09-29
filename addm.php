<?php
$dbhost="localhost";
            $dbuser="root";
            $dbpass="";
            $dbname="miniproject";
            $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
            if(!$conn){
                die("connection failed ".mysqli_connect_error());
            }
            $Name=$_POST['addName'];
            $Password=$_POST['password'];
            $email=$_POST['email'];
            $sql="INSERT INTO pclogin(Pusername,PCPassword,PCemail) VALUES('$Name','$Password','$email')";
            $result=mysqli_query($conn, $sql ) or die(mysqli_error($conn));
            echo "member added";
?>