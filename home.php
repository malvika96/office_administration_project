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
                                                    <a href="#">Welcome  <?php echo $student; ?> &nbsp; <?php echo $student1; ?> </a>
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
                    <div class="container no-padding">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        <div class="row">
                            <!-- Carousel Slideshow -->
                            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                <!-- Carousel Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example" data-slide-to="1"></li>
                                    <li data-target="#carousel-example" data-slide-to="2"></li>
                                </ol>
                                <!-- End Carousel Indicators -->
                                <!-- Carousel Images -->
                                <div class="carousel-inner">
                                <img src="assets/img/slideshow/logo.jpg">
                                </div>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        
                                        <img src="assets/img/slideshow/tak.jpg">
                                    </div>
                                    <div class="item">
                                        <img src="assets/img/slideshow/vnsgu.jpg">
                                    </div>
                                     <div class="item">
                                        <img src="assets/img/slideshow/cover.jpg" >
                                    </div>
                                    
                                </div>

								

                                <!-- End Carousel Images -->
                                <!-- Carousel Controls -->
                                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                                <!-- End Carousel Controls -->
                            </div>
                            
                    <div class="container">
                        <div class="row">
                            <!-- Main Article -->
                            <div class="col-md-6 margin-top-30">
                            
                                <h2 class="item-title">
                                    Takshashilaa College
                                </h2>
                          
                                <p align="justify">Takshashilaa College at VADODARA is founded by Takshashilaa Vidyapith Sansthan with a dream to cater the need of higher education in the city of VADODARA. As you all know, VADODARA is the education Capital of Gujarat and there was a felt need of people of the city. To prepare local students for advance studies in India & abroad, such opening of Takshashilaa college was long standing demand. We have launched a Three Year Full Time Campus Programme with the affiliation of VEER NARMAD SOUTH GUJARAT UNIVERSITY, SURAT in 2002 and completed 15th successful year of B.C.A. (Bachelor of Computer Application) and B.B.A. (Bachelor of Business Administration)</p>
                               
                                <a href="aboutus.php"> <button class="btn btn-primary pull-center" type="submit">View More</a> </button>
              
                                  

                  </div>
                  
             
                   
                  <div class=" col-md-6 row margin-vert-30">
                            <div class="col-md-12">
                                
                                <!-- Top Panels -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-primary invert">
                                            <div class="panel-heading">
                                                <h3 class="panel-title text-center">
                                                    News
                                                </h3>
                                            </div>
                                            <div class="panel-body text-center">
                                            
                                            <marquee direction="down" scrollamount="3" onMouseOver="this.stop();" onMouseOut="this.start();" align="right">
                            <ul>
                            
	                            <?php 
								 $ret="select * from news";
$stmt = $conn->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();

$cnt=1;
while($row=$res->fetch_object())

	  {
	  	?>
												
                                <li><?php echo $row->discription;?></li>
                                
                                <?php $cnt++;} ?>
							
                            </ul>
											
                                            <br><br><br><br><br><br><br>
                                            </marquee>
                                               </div>
                                            
                                        </div>
                                    </div>
                                                                   
                                <!-- End Bottom Panels -->
                            </div>
                        
                        <!-- === END CONTENT === -->
                        </div>
					                
                  
                  
                  
                  </div>
                 
                  </div>
                  </div>
                  
            
                            <div class="clearfix"></div>
                            <!-- End Main Article -->
                            

                            </div>
                            <div class="clearfix"></div>
                            <!-- End Main Article -->
                        </div>
                  
                    <div class="container no-padding gridgallery">
                        <!-- Portfolio Header Text -->
                        <div class="row">
                            <div class="col-md-13 padding-vert-30">
                                <h2 class="subtitle text-center">Different images of events held in TAKSHASHILAa COLLEGE. </h2>
                                
                            </div>
                        </div>
                        <!-- End Portfolio Header Text -->
                        <!-- Portfolio Images -->
                        <div class="portfolio-group">
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/img1.jpg" alt="image1">
                                            <figcaption>
                                                <h3>Alumini Event</h3>
                                                
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/img2.jpg" alt="image2">
                                            <figcaption>
                                                <h3>Sport Event</h3>
                                               
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/img3.jpg" alt="image3">
                                            <figcaption>
                                                <h3>Indoor Games</h3>
                                                
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/img4.jpg" alt="image4">
                                            <figcaption>
                                                <h3>Freshers Party</h3>
                                               
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/img5.jpg" alt="image5">
                                            <figcaption>
                                                <h3>Librery</h3>
                                               
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/img6.JPG" height="165" width="240" alt="image6">
                                            <figcaption>
                                                <h3>Staff Members</h3>
                                               
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/img9.jpg"  height="165" width="240" alt="image7">
                                            <figcaption>
                                                <h3>Saptdhara Event</h3>
                                                
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/img8.jpg" height="165" width="240" alt="image8">
                                            <figcaption>
                                                <h3>Seminar</h3>
                                                 </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Portfolio Images -->
                        <!-- Portfolio Footer Text -->
                        <div class="row">
                            <div class="col-12-md">
                                <p class="text-center padding-bottom-30" style="max-width:690px; margin:0 auto;">Events like Seminar,Farewell Party,Freshers Party,Sports Day,Days Celebration Etc... are conducted every Academic Year. </p>
                            </div>
                        </div>
                        <!-- End Portfolio Footer Text -->
                        <!-- === END CONTENT === -->
                        <!-- === BEGIN FOOTER === -->
                    </div>
                    <div id="base" class="container padding-vert-30">
                        <div class="row">
                        		
                            <div class="col-md-6"><br><br><br>
                                 <!-- Header Social Icons -->
                                 
                        
                        	<p>
                               		 <label><h3 class="margin-bottom-10">Follow Us</h3></label>
                               
                            </p>	
                            <ul class="social-icons circle pull-left">
                            
                            <li class="social-twitter">
                                <a href="#" target="_blank" title="Twitter"></a>
                            </li>
                            <li class="social-facebook">
                                <a href="https://www.facebook.com/pg/Takshashila-A-College-of-VNSGUniversity-1614393815268084/posts/?ref=page_internal" target="_blank" title="Facebook"></a>
                            </li>
                            
                        </ul>
                        <!-- End Header Social Icons -->

                                <div class="clearfix"></div>
                            </div>
                           
                            <!-- Contact Details -->
                            <div class="col-md-3">
                                <h3 class="margin-bottom-10">Contact Details</h3>
                                <p> Opp. Paragraj Society, Harni-Warsia Ring Road,
 									Vadodara-390 006.
								    <br>Tele:(Fax) 0265-2532411, 9016298339   
 									<br>Mobile & Whatsapp: 9898415985, 9825350891 
                                </p>
                                <p>Email:
                                    <a href="takshashilaacollege@gmail.com">takshashilaacollege@gmail.com
</a>
                                    <br />Website:
                                    <a href="www.takshashilaacollege.com">www.takshashilaacollege.com</a>
                                </p>
                            </div>
                            <!-- End Contact Details -->
                            <!-- Sample Menu -->
                            <div class="col-md-3">
                                <h3 class="margin-bottom-10">Menu</h3>
                                <ul class="menu">
                                  
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
                                        <li>
                                            <a href="feedback.php">Feedbcak</a>
                                        </li>

                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <!-- End Sample Menu -->
                            <div class="clearfix"></div>
                        </div>
                    </div>
<!-- Footer Menu -->
                    <div id="footermenu" class="container">
                        <div class="row">
                            <ul class="list-unstyled list-inline">
                                 
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- End Footer Menu -->
                </div>
            </div>
            <div class="container padding-vert-30">
                <div class="row">
                    <div id="copyright">
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- JS -->
        <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/scripts.js"></script>
        <!-- Isotope - Portfolio Sorting -->
        <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
        <!-- Mobile Menu - Slicknav -->
        <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
        <!-- Animate on Scroll-->
        <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
        <!-- Modernizr -->
        <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
        <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->