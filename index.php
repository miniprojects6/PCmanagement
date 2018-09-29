<?php
        session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MEC PLACEMENT CELL</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="S Meena Padnekar">
    <meta name="keywords" content="Placement Cell, Mec,PC">
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- CALANDER -->
    
    <link rel="stylesheet" href="css/jquery.e-calendar.css"/>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->
          	<style type="text/css">
          		<style>
							
							ul {list-style-type: none;}
							

							.month {
							    padding: 70px 25px;
							    width: 100%;
							    background: #1abc9c;
							}

							.month ul {
							    margin: 0;
							    padding: 0;
							}

							.month ul li {
							    color: white;
							    font-size: 20px;
							    text-transform: uppercase;
							    letter-spacing: 3px;
							}

							.month .prev {
							    float: left;
							    padding-top: 10px;
							}

							.month .next {
							    float: right;
							    padding-top: 10px;
							}

							.weekdays {
							    margin: 0;
							    padding: 10px 0;
							    background-color: #ddd;
							}

							.weekdays li {
							    display: inline-block;
							    width: 13.6%;
							    color: #666;
							    text-align: center;
							}

							.days {
							    padding: 10px 0;
							    background: #eee;
							    margin: 0;
							}

							.days li {
							    list-style-type: none;
							    display: inline-block;
							    width: 13.6%;
							    text-align: center;
							    margin-bottom: 5px;
							    font-size:12px;
							    color: #777;
							}

							.days li .active {
							    padding: 5px;
							    background: #1abc9c;
							    color: white !important
							}

							/* Add media queries for smaller screens */
							@media screen and (max-width:720px) {
							    .weekdays li, .days li {width: 13.1%;}
							}

							@media screen and (max-width: 420px) {
							    .weekdays li, .days li {width: 12.5%;}
							    .days li .active {padding: 2px;}
							}

							@media screen and (max-width: 290px) {
							    .weekdays li, .days li {width: 12.2%;}
							}
</style>
          	</style>
          <style type="text/css">

          </style>
      </head>
      <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                PLACEMENT CELL
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                       
                            
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                               
                                 <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Account</li>

                                <li class="divider"></li>

                                    <li>
                                        

                                        <li class="divider"></li>

                                        <li>
                                            <a href="logout.php"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
                <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                            <div class="user-panel">
                               
                                <div class="pull-left info">
                                    <p> <?php

                                    
                                        $var= $_SESSION['pusername'];
                                        echo $_SESSION['pusername'];
                                ?></p>

                                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                                </div>
                            </div>
                            
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            <ul class="sidebar-menu">
                                <li class="active">
                                    <a href="index.php">
                                        <i class="fa fa-home"></i> <span>Home</span>
                                    </a>
                                </li>
                               <!--  <li>
                                    <a href="general.html">
                                        <i class="fa fa-gavel"></i> <span>General</span>
                                    </a>
                                </li> -->

                                <li>
                                    <a href="basic_form.html">
                                        <i class="fa fa-envelope"></i> <span>Notification</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="simple.php">
                                        <i class="fa fa-search"></i> <span>Search</span>
                                    </a>
                                </li>
                                 <li>
                            <a href="downloadresume.php">
                             <i class="fa fa-cloud-download"></i> <span>Download Resume</span>
                            </a>
                        </li>
                                 <li>
                            <a href="Add.php">
                             <i class="fa fa-user"></i> <span>Add Members</span>
                            </a>
                        </li>
                         <li>
                            <a href="Company.php">
                             <i class="fa fa-folder"></i> <span>Company Registration </span>
                            </a>
                        </li>

                            </ul>
                        </section>
                        <!-- /.sidebar -->
                    </aside>

                    <aside class="right-side">

                <!-- Main content -->
                

                    <!-- Main row -->
                    <div class="row">

                        <div class="col-md-8">
                            <!--Calander start-->
                            <section class="panel">
                                <header class="panel-heading">
                                    Calander
                                </header>
                                 <div class="panel-body">
                                            <div class="month">      
                                                      <ul style="list-style: none;">
                                                        <li class="prev"><</li>
                                                        <li class="next">></li>
                                                        <li style="text-align:center">
                                                          May<br>
                                                          <span style="font-size:18px">2017</span>
                                                        </li>
                                                      </ul>
                                            </div>

                                                    <ul class="weekdays">
                                                      <li>Mo</li>
                                                      <li>Tu</li>
                                                      <li>We</li>
                                                      <li>Th</li>
                                                      <li>Fr</li>
                                                      <li>Sa</li>
                                                      <li>Su</li>
                                                    </ul>

                                                    <ul class="days">  
                                                      <li>1</li>
                                                      <li><span class="active">2</span></li>
                                                      <li>3</li>
                                                      <li>4</li>
                                                      <li>5</li>
                                                      <li>6</li>
                                                      <li>7</li>
                                                      <li>8</li>
                                                      <li>9</li>
                                                      <li>10</li>
                                                      <li>11</li>
                                                      <li>12</li>
                                                      <li>13</li>
                                                      <li>14</li>
                                                      <li>15</li>
                                                      <li>16</li>
                                                      <li>17</li>
                                                      <li>18</li>
                                                      <li>19</li>
                                                      <li>20</li>
                                                      <li>21</li>
                                                      <li>22</li>
                                                      <li>23</li>
                                                      <li>24</li>
                                                      <li>25</li>
                                                      <li>26</li>
                                                      <li>27</li>
                                                      <li>28</li>
                                                      <li>29</li>
                                                      <li>30</li>
                                                      <li>31</li>
                                                    </ul>
                                                    </div>

                                                  
                                        </section>
                                        <!--Calander end-->

                                    </div>
                                    <div class="col-lg-4">

                                        <!--chat start-->
                                        <section class="panel">
                                            <header class="panel-heading">
                                                Notifications
                                            </header>
                                                <div class="panel-body" id="noti-box" >
                                                <?php
                                                include("php/test.php");

                                                  ?>

                                                    
                                                    <?php foreach ($result as $row): 


                                                     
                                                    //$query  = "SELECT * FROM event_list WHERE recipients_gpa < 8.2"; 
                                                     // $result = mysqli_query($conn, $query ) or die(mysqli_error($conn));        
                                                       
                                                       
                                                    // while($row = mysqli_fetch_assoc($result)) {    
                                                      
                                                   echo " <div class=\"alert alert-block alert-danger\" style=\"background-color: #4bcdb6;  \" >  ";
                                                    echo "    <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\"> ";
                                                          echo "  <i class=\"fa fa-times\"></i> ";
                                                       echo " </button> ";
                                                        
                                                            $event = $row['name'];
                                                            $description= $row['description'];
                                                            $date= $row['date'];
                                                         echo $event; echo "<br>";
                                                          echo $description; echo "<br>";
                                                           echo $date; echo "<br>";
                                                    echo "</div>"


                                                      
                                                     // }
                                                     ?>
                                                    
                                                    <?php endforeach; ?>

                                                </div>
                                                <a class="btn btn-success btn-sm pull-left btn-updatenotification" href="index.php" >Update</a>
                                        </section>



                      </div>


                  </div>
                    <div class="row">

                        <div class="col-md-12">
                            


          </div><!--end col-6 -->
          

                    </div>
                    <div class="row">
                        
                     
              </div>
              <!-- row end -->
                </section><!-- /.content -->
                <div class="footer-main">
                    Copyright &<span style="text-color:blue;"><a href="http://www.mec.ac.in">Govt. Model Engineering College</span> ,2017
                </div>
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>

        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

        <script src="js/plugins/chart.js" type="text/javascript"></script>

        <!-- datepicker
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
        <!-- Bootstrap WYSIHTML5
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- calendar -->
        <script src="js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

        <!-- Director App -->
        <script src="js/Director/app.js" type="text/javascript"></script>

        <!-- Director dashboard demo (This is only for demo purposes) -->
        <script src="js/Director/dashboard.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/jquery.e-calendar.js"></script>
        <script type="text/javascript" src="index.js"></script>

        <!-- Director for demo purposes -->
        <script type="text/javascript">
            $('input').on('ifChecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().addClass('highlight');
                $(this).parents('li').addClass("task-done");
                console.log('ok');
            });
            $('input').on('ifUnchecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().removeClass('highlight');
                $(this).parents('li').removeClass("task-done");
                console.log('not');
            });

        </script>
        <script>
            $('#noti-box').slimScroll({
                height: '400px',
                size: '5px',
                BorderRadius: '5px'
            });

            $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
                checkboxClass: 'icheckbox_flat-grey',
                radioClass: 'iradio_flat-grey'
            });
</script>
<script type="text/javascript">
    $(function() {
                "use strict";
                //BAR CHART
                var data = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [65, 59, 80, 81, 56, 55, 40]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: [28, 48, 40, 19, 86, 27, 90]
                        }
                    ]
                };
            new Chart(document.getElementById("linechart").getContext("2d")).Line(data,{
                responsive : true,
                maintainAspectRatio: false,
            });

            });
            // Chart.defaults.global.responsive = true;
</script>
<script type="text/javascript">
    function update_notification(){

            alert("hello");
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "add_event";

                $name;
                $description;
                $date;
                $recepient;

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 

                $sql = "SELECT FROM event_list (name, description, date, recipients)    VALUES ('$name', '$description', '$date', '$recepient')";

                if ($conn->query($sql) === TRUE) {
                    echo "EVENT CREATED SUCCESSFULLY";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            ?>



    };
</script>

</body>
</html>