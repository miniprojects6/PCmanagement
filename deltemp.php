 <?php
 			$dbhost="localhost";
            $dbuser="root";
            $dbpass="";
            $dbname="miniproject";
            $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
            if(!$conn){
                die("connection failed ".mysqli_connect_error());
            }
            $roll=$_POST["rollno"];
            $sql="DELETE FROM tempstud WHERE Rollno = '$roll'";
            $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
?>            