<?php
        session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MEC PLACEMENT CELL</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="description" content="Developed By M Abdur Rokib Promy">
        <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- google font -->
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <!-- Theme style -->
        <link href="css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
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
                        <!-- Messages: style can be found in dropdown.less-->
                        
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span> <i class="caret"></i></span>
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
                            <p>NAME</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    
                    <ul class="sidebar-menu">
                        <li>
                            <a href="index.php">
                                <i class="fa fa-home"></i> <span>Home</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="general.html">
                                <i class="fa fa-gavel"></i> <span>General</span>
                            </a>
                        </li> -->

                        <li>
                            <a href="basic_form.html">
                                <i class="fa fa-envelope"></i> <span>Notifications</span>
                            </a>
                        </li>

                        <li >
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
                         <li class="active">
                            <a href="Company.php">
                             <i class="fa fa-folder"></i> <span>Company Registration </span>
                            </a>
                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">

                <!-- Main content -->
                
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    COMPANY DETAILS

                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->
                                <div class="panel-body table-responsive">
                                <div >
                                    <div class="box-header">
                                        Add  Company Details
                                    </div>                  
                                    <div class="container-fluid">
                                        <form action="addco.php" method="POST">
                                            <div >
                                            <label>
                                                Company Name
                                            </label>
                                            <input type="text" name="compname" placeholder="Company Name">
                                            </div>
                                            <div class="row">
                                            <div class="col-md-4">
                                                <label>
                                                    Details
                                                </label>
                                                <input type="text" name="cdetails" >
                                            </div>
                                            <div class="col-md-8">
                                                <label>
                                                    Contact
                                                </label>
                                                <input type="text" name="contact">
                                            </div>
                                            </div>
                                            <div >
                                                <label>
                                                    Post
                                                </label>
                                                <input type="text" name="post">
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="box-header" >
                                                   <h5><br> Criteria</h5></div>                                                </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        Branch 
                                                    </label>
                                                    <input type="text" name="branch">
                                                </div>
                                                <div class="col-md-8">
                                                    <label>
                                                        Minimum CGPA 
                                                    </label>
                                                    <input type="float" name="cgpa">
                                                </div>
                                            </div>
                                            <div>
                                                <label>
                                                    Year
                                                </label>
                                                <input type="Year" name="year">
                                            </div>
                                            <div >
                                                <label>
                                                    Date of Visit
                                                </label>
                                                <input type="date" name="date">
                                            </div>
                                            <div >
                                                <label>
                                                    Number selected
                                                </label>
                                                <input type="int" name="noselect">
                                            </div>
                                            <div align="Right">
                                            <button type="submit">Add</button>
                                            </div>
                                        </form>
                                    </div>                  
                                </div>
                                
                                </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                </section><!-- /.content -->
                <div class="footer-main">
                    Copyright &copy <span style="text-color:blue;"><a href="http://www.mec.ac.in">Govt. Model Engineering College</span> , 2017
                </div>
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/showtable.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Director App -->
        <script src="js/Director/app.js" type="text/javascript"></script>
        
        
        
    </body>
</html>
