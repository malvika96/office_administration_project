<?php
if(!isset($_SESSION)) { session_start(); } 
$faculty=$_SESSION["name"];

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Admin</title>
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
if($_SESSION['faculty']=="")
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
                <a class="navbar-brand" href="index.html">Faculty</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>    
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="faculty_home.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a   href="facultyprofile.php"><i class="fa fa-edit fa-3x"></i>Profile</a>
                    </li>
                    <li>
                        <a   href="conformpwd.php"><i class="fa fa-edit fa-3x"></i>Change Password</a>
                    </li>
                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Faculty Dashboard</h2>   
                        <h5>Welcome... &nbsp;&nbsp;<?php echo $faculty; ?> </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
        
                      
			
              <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                            <img src="assets/icons/img2.jfif" width="69" height="69">
                            <h3>Notice</h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                            <a href="viewfacultynotice2.php"><font color=#FFFFFF>View Notice</font></a>
                            
                        </div>
                    </div>
                    
             
			</div>
             <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                        <img src="assets/icons/img4.jfif" width="69" height="69">
                           
                            
                            <h3>Circular</h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                        
                          <a href="viewfacultycircular2.php"><font color=#FFFFFF>View Circular</font></a>
                          
                      
                            
                        </div>
                    </div>
                    
             
			</div>
             <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                        <img src="assets/icons/img3.jfif" width="69" height="69">
                            
                            <h3>Agenda</h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                         <a href="viewfacultymeeting2.php"><font color=#FFFFFF> View Meeting Agenda</font></a>
                           
                            
                        </div>
                    </div>
                    </div>
                     
                     <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                        <img src="assets/icons/img5.png" width="69" height="69">
                          
                            <h3>Profile</h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                         <a href="viewfacultyprofile.php"><font color=#FFFFFF> View Profile</font></a>
                           
                            
                        </div>
                    </div>
                    
             
			</div>
             
                    </div>

             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
