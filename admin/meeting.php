<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oas";
$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error)
 {
   die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['submit']))
{	
	$date=$_POST['dt'];
	$member=$_POST['memno'];
	$agenda=$_POST['ag'];
	$desc=$_POST['dp'];
	$conclusion=$_POST['cl'];
	$dates=date_create($date);
	$maindate=date_format($dates,"d/m/Y");
	
	
	
	$sql="insert into meeting(date,members,agenda,description,conclusion) values('$maindate','$member','$agenda','$desc','$conclusion')";
	   if($conn->query($sql)==TRUE)
	  {
		  echo "<script>alert('Recrod Inserted')</script>";
 	}
	 else
	  {
		echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php include 'header1.php';?>

  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Meeting Agenda</h2>   
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
                            Please Enter meeting details. 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                               <div class="col-md-6">
                                   
                                    <form role="form" action="" method="post">
                                       
                                        
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input type="date" name="dt" class="form-control" required="please input date" />
                                            
                                        </div>
                                         <div class="form-group">
                                            <label>No Of Members:</label>
                                            <input type="text" name="memno" class="form-control" required="please input date" pattern="[0-9]{2}" />
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Agenda:</label>
                                            <input type="text" name="ag" class="form-control" required="please input date"/>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Description:</label>
                                           <textarea name="dp" class="form-control" required="please input date"></textarea>
                                        </div>
                                        
                                       <div class="form-group">
                                            <label>Conclusion:</label>
                                           <textarea name="cl" class="form-control" required="please input date"></textarea>
                                        </div>
                                        
                                        
                                                                       
                                        
                                         <input type="submit" value="SAVE" name="submit" class="btn btn-default">
                                        <input type="reset" value="RESET" class="btn btn-primary">

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

      
<?php include 'footer1.php';?></body>
</html>
