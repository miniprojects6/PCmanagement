<?php
$dbhost="localhost";
            $dbuser="root";
            $dbpass="";
            $dbname="miniproject";
            $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
            if(!$conn){
                die("connection failed ".mysqli_connect_error());
            }
            $Name=$_POST['Name'];
            $sql="DELETE FROM pclogin where Pusername='$Name'";
            $result= mysqli_query($conn,$sql) or die(mysqli_error($conn));
            echo $Name."\t deleted";