<?php
$con=mysqli_connect("localhost","root","","miniproject");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_GET['id'];

$result=mysqli_query($con,"SELECT * FROM tempstud WHERE Rollno='CS'");
$row=mysqli_fetch_assoc($result);
mysqli_query($con,"INSERT INTO student(Name, Class, Branch, Year_Adm, Adm_No, Roll_No,Reg_No, Gender, DOB, Age, Email, Contact_no, Address, Father, Fthr_Contact, Fthr_email, Mother, Mthr_Contact, Mthr_email, Gaurdian, G_contact, Mark10, Year10, Board10, Mark12, Year12, Board12, Sem1_2, Sem3, Sem4, Sem5, Sem6, Sem7, Sem8, Cgpa, Diploma, University, Gate_score, Year_pass) VALUES ('$row["Name"]', '$row["Class"]', 'CS', '0000', '0000/00', '$row["Rollno"]', '000000000', 'male', '00/00/0000', '0', '$row["Email"]', '0000000000', 'abc', '000000', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0', '2012', 'CBSE', '0', '2014', 'CBSE', '0', '0', '0', '0', '0', NULL, NULL, '0', NULL, NULL, NULL, '2018')");
mysqli_query($con,"INSERT INTO studlogin(Username,Password,Emailid) VALUES('$row["Rollno"]','$row["Password"]','$row["Email" ]')")
mysqli_query($con,"DELETE FROM tempstud WHERE id='$id'");

mysqli_close($con);
header("Location: index.php");
?> 