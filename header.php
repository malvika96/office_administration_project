<?php
if(!isset($_SESSION)) { session_start(); } 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--><a href="home.php"></a>
<html lang="en">
    <!--<![endif]-->
    <head>
        <title>Admin Home	</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans:300,400" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source Sans Pro:300,400" />
    </head>
    <body>
        <div id="body_bg">
            <div id="container_header" class="container">
                <div id="header" class="row">
                    <div class="col-md-12 margin-top-15">
                                           </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="primary-container-group">
                <!-- Background -->
                <div class="primary-container-background">
                    <div class="primary-container"></div>
                    <div class="clearfix"></div>
                </div>
                <!--End Background -->
                <div class="primary-container">
                    <div id="container_hornav" class="container no-padding">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html">
                              <font size="+2" color="#FFFFFF"><b> Office Administration System</b></font>
                                
                            </a>
                        </div>
                        <!-- End Logo -->
                        <!-- Slogan -->
                        <!-- End Slogan -->
                        <!-- Top Menu -->
                        <?php
if(!isset($_SESSION['student'])) 
{
?>
                        <div class="row">
                            <div class="hornav-block">
                                <div id="hornav" class="pull-right">
                                    <ul id="hornavmenu" class="nav navbar-nav">
                                        <li>
                                            <a href="home.php">Home</a>
                                        </li>
                                        <li>
                                            <span>Forms</span>
                                            <ul>
                                                <li>
                                                    <a href="requestformclg.php">College Forms</a>
                                                </li>
                                                <li>
                                                    <a href="vnsgu_forms.php">VNSGU Forms</a>
                                                 
                                                </li>
                                            </ul>
                                        </li>
                                        
                                        
                                        <li>
                                            <span>News</span>
                                            <ul>
                                                <li>
                                                    <a href="noticeloginpage.php">Notice</a>
                                                </li>
                                                <li>
                                                    <a href="circularloginpage.php">Circulars</a>
                                                 
                                                </li>
                                            </ul>
                                        </li>
                                        
                                        <li>
                                            <a href="gallery.php">Gallery</a>
                                        </li>
						
                        				<li>
                                            <a href="aboutus.php">About Us</a>
                                        </li>

										<li>
                                            <a href="login.php">Login</a>
                                        </li>

										<li>
                                            <a href="contacts.php">Contacts</a>
                                        </li>

                                        
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <?php } else {
							$student=$_SESSION["firstname"];
							$student1=$_SESSION["lastname"];
							?>
                             <div class="row">
                            <div class="hornav-block">
                                <div id="hornav" class="pull-right">
                                    <ul id="hornavmenu" class="nav navbar-nav">
                                        <li>
                                            <a href="home.php">Home</a>
                                        </li>
                                        <li>
                                            <span>Forms</span>
                                            <ul>
                                                
                                                
                                                <li>
                                                    <a href="vnsgu_forms.php">VNSGU Forms</a>
                                                 
                                                </li>
                                                <li>
                                                    <a href="studentrequest.php">Request Form</a>
                                                </li>
                                                <li>
                                                    <a href="student_status.php">Status Form</a>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                        
                                        <li>
                                            <span>News</span>
                                            <ul>
                                                <li>
                                                    <a href="notice.php">Notice</a>
                                                </li>
                                                <li>
                                                    <a href="circular.php">Circulars</a>
                                                 
                                                </li>
                                            </ul>
                                        </li>
                                        
                                        <li>
                                            <a href="gallery.php">Gallery</a>
                                        </li>
						
                        				<li>
                                            <a href="aboutus.php">About Us</a>
                                        </li>

										
										<li>
                                            <a href="contacts.php">Contact</a>
                                        </li>
										<li>
                                            <span>Logout</span>
                                            <ul>
                                                <li>
                                                    <a href="#">Welcome <?php echo $student; ?> &nbsp; <?php echo $student1; ?> </a>
                                                </li>
                                                 <li>
                                                    <a href="comfornpwd.php">Change Password </a>
                                                </li>
                                                <li>
                                                    <a href="logout.php">Logout</a>
                                                 
                                                </li>
                                            </ul>
                                        </li>
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <?php } ?>
                        <!-- End Top Menu -->
                    </div>