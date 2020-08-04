<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{
	$reno=$_POST['refno'];
	$date=$_POST['dt'];
	
	$gndr=$_POST['gndr'];
	$gndrhs=$_POST['gndrhs'];
	$stream=$_POST['stream'];
	$snm=$_POST['fsn'];
	$sub1=$_POST['sub1'];
	$sub2=$_POST['sub2'];
	
	$fnm=$_POST['fnm'];
	$Id=$_GET['recommendation_id'];
	$dates=date_create($date);
	$maindate=date_format($dates,"d/m/Y");

		
	
	
	$sql="update recommendation set ref_no='$reno',date='$maindate',gender='$gndr',gender1='$gndrhs',stream_id='$stream',stream_name='$snm',subject1='$sub1',subject2='$sub2',faculty_name='$fnm' where recommendation_id='$Id'";
	   if($conn->query($sql)==TRUE)
	  {
		 header ("Location: viewrecommendation.php");
 	}
	 else
	  {
		echo "invalid";
  }
$conn->close();
	
}
?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php include 'header1.php';?>

  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Recommendation Letter Form </h2>   
                        <h5>Welcome...</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-8">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please Enter Details Of Recommendation Letter. 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                               <div class="col-md-6">
                                   
                                    <form role="form" action="" method="post">
                                    <?php	
												$Id=$_GET['recommendation_id'];
	$ret="select a.ref_no,a.date,d.name,a.gender,a.gender1,s.stream,a.stream_name,a.subject1,a.subject2,a.faculty_name from recommendation a,stream s,student_detail d where a.stream_id=s.stream_id and a.student_id=d.student_id and a.recommendation_id=?";
		$stmt= $conn->prepare($ret) ;
	 $stmt->bind_param('i',$Id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
                                        <div class="form-group">
                                            <label>References Number:</label>
                                            <input type="text" name="refno" class="form-control" value="<?php echo $row->ref_no;?>" />
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input type="date" name="dt" class="form-control" value="<?php echo $row->date;?>"  />
                                            
                                        </div>
                                        
                                                                                
                                        <div class="form-group">
                                            <label>Student Name:</label>
                                            <label class="form-control"><?php echo $row->name;?></label>
                                           
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Gender:</label>
                                            <select name="gndr" class="form-control">
                                            <option value=""><?php echo $row->gender;?></option>
                                                <option>he</option>
                                                <option>she</option>
                                                
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Select As Gender:</label>
                                            <select name="gndrhs" class="form-control">
                                             <option value=""><?php echo $row->gender1;?></option>
                                                <option>his</option>
                                                <option>her</option>
                                                
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Stream:</label>
                                            <select name="stream" class="form-control" id="stream"  required="required">
                                               <option value=""><?php echo $row->stream;?></option>
                                                  <?php
												  
											   $query="select * from `stream`";
											   $result=$conn->query($query);
											   
											   while($clss=mysqli_fetch_row($result))
											   {
												   echo "<option value=".$clss[0].">".$clss[1]."</option>";
											   }
											   ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Full Stream Name:</label>
                                        	 <input type="text" name="fsn" class="form-control" value="<?php echo $row->stream_name;?>"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Enter Subjects:</label>
                                            <br>
                                            <div class="row">
                							<div class="col-md-6">
                                            <label>Subject1:</label>
                                            <input type="text" name="sub1" class="form-control" value="<?php echo $row->subject1;?>"/>
                                            </div>
                                            <div class="col-md-6">
                                            <label>Subject2:</label>
                                            <input type="text" name="sub2" class="form-control" value="<?php echo $row->subject2;?>"/>
                                            </div>
                                           
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Faculty Name:</label>
                                            <input type="text" name="fnm" class="form-control"  value="<?php echo $row->faculty_name;?>"/>
                                        </div>
                                        
                                                                       
                                        
                                         <input type="submit" value="submit" name="submit" class="btn btn-default">
                                        <input type="reset" value="RESET" class="btn btn-primary">
								<?php } ?>
                                    </form>
								</div>
            
                                
                               
                                   
                                   
                            
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                
                
               
   
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->

      
<?php include 'footer1.php';?>
</body>
</html>