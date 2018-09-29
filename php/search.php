
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 $selectedbranch= $_POST["filter_class"] ;
 $selecteddiv= $_POST["filter_div"] ;
 $selectedgpa= $_POST["filter_gpa"] ;

  // $query = sprintf("SELECT *  FROM tablename WHERE column = %s  AND column2 <= %s AND column3 = >%s",$input1,$input2,input3);
 $query  = "SELECT * FROM student WHERE Branch='{$selectedbranch}' AND Class LIKE"%'$selecteddiv'" /*'{$selecteddiv}'*/ AND Cgpa >='{$selectedgpa}' "; 
    $result = mysqli_query($conn, $query ) or die(mysqli_error($conn));

    foreach ($result as $row): 
                                                    $sname= $row['Name'];
                                                    $sbranch= $row['Branch'];
                                                    $sdiv= $row['Class'];
                                                    $srollno= $row['Roll_No'];
                                                    $scgpa= $row['Cgpa'];
                                                    echo  "<table id=\"details_table\" class=\"table table-hover\">";
                                                    echo " <tr>";
                                                            echo "<td style=\"width:90px;\">"; echo $sname; echo "</td>";
                                                            echo "<td style=\"width:90px;>"; echo $sbranch; echo"</td>";  
                                                            echo "<td style=\"width:90px;>"; echo $sdiv;  echo"</td>";
                                                            echo "<td style=\"width:90px;> <span class=\"label label-success\"> ";echo $srollno; echo "</span></td>";
                                                            echo "<td>";echo $scgpa; echo "</td>";
                                                    echo "</tr>";
                                                    echo "</table>";


                                                   endforeach; 

?>



                                 


                                               

                                                
                                            
                                     
