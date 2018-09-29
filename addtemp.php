<?php
 			$dbhost="localhost";
            $dbuser="root";
            $dbpass="";
            $dbname="miniproject";
            $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
            if(!$conn){
                die("connection failed ".mysqli_connect_error());
            }
            $roll=$_POST["roll"];
            $query="SELECT * FROM tempstud Where Rollno='$roll'";
           $result = mysqli_query($conn, $query ) or die(mysqli_error($conn));
           while( $row=mysqli_fetch_assoc($result)){

                      $Username=$row['Rollno'];
            $Pass=$row['Password'];
            $name=$row['Name'];
            $class=$row['Class'];
            $mail=$row['Email'];
           echo $Username."  added";
           // echo "string";
           mysqli_query($conn,"INSERT INTO student(Name, Class, Branch, Year_Adm, Adm_No, Roll_No,Reg_No, Gender, DOB, Age, Email, Contact_no, Address, Father, Fthr_Contact, Fthr_email, Mother, Mthr_Contact, Mthr_email, Gaurdian, G_contact, Mark10, Year10, Board10, Mark12, Year12, Board12, Sem1_2, Sem3, Sem4, Sem5, Sem6, Sem7, Sem8, Cgpa, Diploma, University, Gate_score, Year_pass) VALUES ('$name', '$class', 'CS', '0000', '0000/00', '$roll', '000000000', 'male', '00/00/0000', '0', '$mail', '0000000000', 'abc', '000000', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0', '2012', 'CBSE', '0', '2014', 'CBSE', '0', '0', '0', '0', '0', NULL, NULL, '0', NULL, NULL, NULL, '2018')");
            $sql2="INSERT INTO studlogin (Username,Password,Emailid) Values('$Username','$Pass','$mail')";
            $query1=mysqli_query($conn,$sql2) or die(mysql_error($conn));

            ////echo "string";
            }
            $sql="DELETE FROM tempstud WHERE Rollno = '$roll'";
            $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
?>            