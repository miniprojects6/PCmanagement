 <?php
 			$dbhost="localhost";
            $dbuser="root";
            $dbpass="";
            $dbname="miniproject";
            $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
            if(!$conn){
                die("connection failed ".mysqli_connect_error());
            }
            $name=$_POST["compname"];
            $details=$_POST["cdetails"];
            $contact=$_POST["contact"];
            $post=$_POST["post"];
            $year=$_POST["year"];
            $branch=$_POST["branch"];
            $cgpa=$_POST["cgpa"];
            $date=$_POST["date"];
            $no=$_POST["noselect"];
            $sql="INSERT INTO company(CName,Cdetails,Contact,Post,Branch,Cgpa,NoSelected,Year,VisitDate) VALUES('$name','$details','$contact','$post','$branch','$cgpa','$no','$year','$date')";
            $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));

?>            