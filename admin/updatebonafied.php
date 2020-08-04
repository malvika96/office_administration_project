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
	//$name=$_POST['nm'];
	$gndrhs=$_POST['gndrhs'];
	$stream=$_POST['stream'];
	$class=$_POST['class'];
	$rno=$_POST['rno'];
	$ay=$_POST['ay'];
	$pob=$_POST['pob'];
	$Id=$_GET['bono_id'];
	$dates=date_create($date);
	$maindate=date_format($dates,"d/m/Y");

	
	$sql="update bonafied set re_no='$reno',date='$maindate',gender1='$gndrhs',stream_id='$stream',class_id='$class',roll_no='$rno',academic_year='$ay',bonafied_purpose_id='$pob' where bono_id='$Id' ";
	   if($conn->query($sql)==TRUE)
	  {
		 header ("Location: viewbonafied.php");
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
                     <h2>Bonafied  Forms </h2>   
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
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
                               <div class="col-md-6">
                                   
                                    <form role="form" action="" method="post">
                                     <?php	
												$Id=$_GET['bono_id'];
												$ret="select a.bono_id,b.name,s.stream,c.class,p.purpose_of_bonafied,a.re_no,a.gender1,a.date,a.roll_no,a.academic_year from bonafied a,student_detail b,stream s,bonafied_purpose p,type_of_class c where a.student_id=b.student_id and a.stream_id=s.stream_id and a.class_id=c.class_id and a.bonafied_purpose_id=p.bonafied_purpose_id and bono_id=?";
	
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
                                            <input type="text" name="refno" class="form-control" value="<?php echo $row->re_no;?>"/>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input type="date" name="dt" class="form-control" value="<?php echo $row->date;?>"/>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                        <label >Student Name</label>
                                            <label class="form-control"><?php echo $row->name;?></label>
                                                                                        
                                                
                                        </div>
                                         <div class="form-group">
                                            <label>Select As Gender:</label>
                                             <select name="gndrhs" class="form-control">
                                            	 
                                                		<option>his</option>
                                                        <option>her</option>
                                              </select> 
                                          
                                        </div>
                                        
                                        <div class="form-group">
                                           <label>Stream:</label>
                                            
                                          <select name="stream" class="form-control" id="stream" onChange="change_country()" required="required">
                                            <option value=""><?php echo $row->stream; ?></option>	
                                            
                                                  <?php
												  $servername = "localhost";
												  $username = "root";
												  $password = "";		
												  $dbname = "oas";																																						
												  $conn = new mysqli($servername, $username, $password, $dbname);

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
                                            <label>class:</label>
                                            <select name="class" class="form-control" id="class" required="required" >
                                            <option value=""><?php echo $row->class;?></option>
                                           </select>
                                           
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Roll Number:</label>
                                               <input type="text" name="rno" class="form-control" value="<?php echo $row->roll_no;?>" />
                                           
                                            
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Academic Year:</label>
                                            <input type="text" name="ay" class="form-control" value="<?php echo $row->academic_year;?>" />
                                            
                                        </div>
        								<div class="form-group">
                                            
                                            <label>Purpose Of Bonafied:</label>
                                            <select name="pob" class="form-control" id="pob" required="required" >
                                                <option value=""><?php echo $row->purpose_of_bonafied;?></option>
                                                  <?php
												  $servername3 = "localhost";
												  $username3 = "root";
												  $password3 = "";		
												  $dbname3 = "oas";																																						
												  $conn3 = new mysqli($servername, $username, $password, $dbname);

											   $query="select * from `bonafied_purpose`";
											   $result=$conn->query($query);
											   
											   while($clss=mysqli_fetch_row($result))
											   {
												   echo "<option value=".$clss[0].">".$clss[1]."</option>";
											   }
											   ?>
                                            </select>
                                                                       
                                        
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
<script type="text/javascript">
function change_country()
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","dropdownclass.php?stream_id="+document.getElementById("stream").value,false);
	xmlhttp.send(null);
	document.getElementById("class").innerHTML=xmlhttp.responseText;
	
	
}
</script>