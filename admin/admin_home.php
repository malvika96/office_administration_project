<?php
if(!isset($_SESSION)) { session_start(); } 
$admin=$_SESSION["name"];
 
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
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                       <h5>Welcome... &nbsp;&nbsp;<?php echo $admin; ?> </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  
                    <div class="row">
                      
			
              <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                            <img src="assets/icons/img18.jfif" width="69" height="69">
                            <h3>Notification</h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                            <a href="viewstudentrequest.php"><font color=#FFFFFF>View request forms</font></a>
                            
                        </div>
                    </div>
                    
             
			</div>
             <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                        <img src="assets/icons/img19.jfif" width="69" height="69">
                           
                            
                            <h3>Contacts</h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                        
                          <a href="viewcontacts.php"><font color=#FFFFFF>View Contacts</font></a>
                          
                      
                            
                        </div>
                    </div>
                    
             
			</div>
             <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                        <img src="assets/icons/img20.jfif" width="69" height="69">
                            
                            <h3>Feedback</h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                         <a href="viewfeedback.php"><font color=#FFFFFF> View Feedback</font></a>
                           
                            
                        </div>
                    </div>
                    
             
			</div>
             <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                         <img src="assets/icons/img21.jfif" width="69" height="69">
                        
                           
                            <h3>Agenda</h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                       
                           <a href="viewmeeting.php"><font color=#FFFFFF> View Meeting Agenda</font></a>
                            
                        </div>
                    </div>
                   	</div>
                    </div>

                <div class="row">
                      
			
              <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                            <img src="assets/icons/img16.jfif" width="69" height="69">
                            <h3>Gallery</h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                            <a href="viewgallery.php"><font color=#FFFFFF>View Gallery </font></a>
                            
                        </div>
                    </div>
                    
             
			</div>
             <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                        <img src="assets/icons/img7.jfif" width="69" height="69">
                           
                            
                            <h3>Bonafied Purpose</h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                        
                          <a href="viewbonafiedpurpose.php"><font color=#FFFFFF>View Bonafied Purpose </font></a>
                          
                      
                            
                        </div>
                    </div>
                    
             
			</div>
             <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                        <img src="assets/icons/img3.jfif" width="69" height="69">
                            
                            <h3>Faculty Registration </h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                         <a href="viewfacultyreg.php"><font color=#FFFFFF> View Faculty Registration </font></a>
                           
                            
                        </div>
                    </div>
                    
             
			</div>
             <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                         <img src="assets/icons/img1.jfif" width="69" height="69">
                        
                           
                            <h3>Student</h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                       
                           <a href="view_studentdetails.php"><font color=#FFFFFF> View Student Details</font></a>
                            
                        </div>
                    </div>
                </div>
                </div>
               
                    <div class="row">
             <div class="col-md-3 col-sm-12 col-xs-12"> 
            <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                            <img src="assets/icons/img2.jfif" width="69" height="69">
                            <h3>Notice</h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                         <a href="viewnotice.php"><font color=#FFFFFF>View Notice </font></a>
                           
                            
                        </div>
                    </div>                         
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12"> 
            <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                        <img src="assets/icons/img4.jfif" width="69" height="69">
                           
                            <h3>Circulars</h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                          <a href="viewcirculars.php"><font color=#FFFFFF> View Circulars</font></a>
                           
                            
                            
                        </div>
                    </div>                         
                        </div>
                       <div class="col-md-3 col-sm-12 col-xs-12"> 
            <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                         <img src="assets/icons/img5.jfif" width="69" height="69">
                            <h3>Certificates </h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                        <a href="certificates.php"><font color=#FFFFFF>view Certificates</font></a>
                            
                            
                        </div>
                    </div>                         
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12"> 
            <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                        <img src="assets/icons/img8.jfif" width="69" height="69">
                          
                            <h3>Stream </h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                          <a href="view_stream.php"><font color=#FFFFFF>view stream</font></a>
                            
                           
                            
                        </div>
                    </div>                         
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">               
                    <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                        <img src="assets/icons/img9.jfif" width="69" height="69">
                        
                            <h3>Class </h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                        <a href="view_type_of_class.php"><font color=#FFFFFF> View Class</font></a>
                          
                            
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                        <img src="assets/icons/img10.jfif" width="69" height="69">
                           
                            <h3>Semester</h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                        <a href="view_semester.php"><font color=#FFFFFF>  View Semester</font></a>
                           
                            
                        </div>
                    </div>
                    </div>
                    
                <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                        <img src="assets/icons/img17.jfif" width="69" height="69">
                           
                            <h3>News</h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                        <a href="viewnews.php"><font color=#FFFFFF> View News</font></a>
                           
                            
                        </div>
                    </div>
                    </div>
                   <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                        <img src="assets/icons/img2.jfif" width="69" height="69">
                           
                            <h3>Faculty Notice</h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                        <a href="viewfacultynotice.php"><font color=#FFFFFF>Faculty Notice</font></a>
                           
                            
                        </div>
                    </div>
                    </div>
                
                    </div> 
                      <div class="row">
         <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-orange">
                        <div class="panel-body">
                    <img src="assets/icons/img4.jfif" width="69" height="69">
                        
                            <h3>Faculty Circular</h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                        <a href="viewfacultycircular.php"><font color=#FFFFFF> View Faculty Circular</font></a>
                          
                            
                        </div>
                    </div>
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
