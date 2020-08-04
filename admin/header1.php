<?php
if(!isset($_SESSION)) { session_start(); } 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
 <?php
if($_SESSION['admin']=="")
{
	header("location:../home.php");
}
	?>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  <a href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="admin_home.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a href="news.php"><i class="fa fa-edit fa-3x"></i>News</a>
                    </li>
                     
                     <li>
                        <a href="notice.php"><i class="fa fa-edit fa-3x"></i> Notice</a>
                    </li>
                   				
					 <li >
                        <a  href="circulars.php"><i class="fa fa-edit fa-3x"></i> Circular </a>
                     </li>
                      <li>
                        <a href="faculty_notice.php"><i class="fa fa-edit fa-3x"></i>Faculty Notice</a>
                    </li>
                   				
					 <li >
                        <a  href="faculty_circular.php"><i class="fa fa-edit fa-3x"></i>Faculty Circular </a>
                     </li>
                     <li >
                        <a  href="meeting.php"><i class="fa fa-edit fa-3x"></i>Meeting Agenda </a>
                     </li>
                     <li >
                        <a  href="facultyreg.php"><i class="fa fa-edit fa-3x"></i>Faculty Registration </a>
                     </li>
                     <li >
                        <a  href="stream.php"><i class="fa fa-edit fa-3x"></i> Stream </a>
                     </li>
                     <li >
                        <a  href="type_of_class.php"><i class="fa fa-edit fa-3x"></i> Class</a>
                     </li>
                     <li >
                        <a  href="semester_details.php"><i class="fa fa-edit fa-3x"></i> Semester  </a>
                     </li>
                    
                     <li >
                        <a  href="student_detail.php"><i class="fa fa-edit fa-3x"></i> Student Form </a>
                     </li>
                     <li >
                        <a  href="vnsgudepartment.php"><i class="fa fa-edit fa-3x"></i> VNSGU Department </a>
                     </li>
                     
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Cartificates<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="bonafied.php">Bonofide</a>
                            </li>
                            <li>
                                <a href="transferrence.php">Transfer</a>
                            </li>
                            <li>
                                <a href="recommendation.php">Recommodation Latter</a>
                            </li>
                            
                            <li>
                                <a href="english_proficiency">English Proficiency Letter</a>
                            </li>
                           
                  	
                           
                        </ul>
                      </li> 
                      <li>
                        <a  href="uploadphoto.php"><i class="fa fa-desktop fa-3x"></i>Gallery</a>
                    </li> 
                    <li>
                        <a  href="confirmpassword.php"><i class="fa fa-edit fa-3x"></i>Change Password</a>
                    </li>   
                  
                </ul>
               
            </div>
            
        </nav>  
