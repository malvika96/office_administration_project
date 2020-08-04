<?php

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
if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from faculty where faculty_id=?";
		$stmt = $conn->prepare($adn);
		$stmt->bind_param('i',$id);
        $stmt->execute();
    	$stmt->close();
	
	
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
                     <h2>Faculty Record</h2>   
                        <h5>Welcome.... </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"></div></div><div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter"></div></div></div><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 200px;">No</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">First_Name</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Last_Name</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Email</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Role</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Password</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Update/Delete</th></tr>
                                    </thead>
                                    <tbody>  
                                    <?php                                    
                                        $ret="select * from faculty_registeration";
$stmt = $conn->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();

$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>

                                    <tr class="gradeA odd">
                                            <td class="sorting_1"><?php echo $cnt;;?></td>
                                       
                                            <td class=" "><?php echo $row->first_name;?></td>
                                            <td class=" "><?php echo $row->last_name;?></td>
                                            <td class=" "><?php echo $row->email;?></td>
                                            <td class=" "><?php echo $row->role;?></td>
                                            <td class=" "><?php echo $row->password;?></td>
                                                                                        
                                             
                                            <td><a href="updatefaculty.php?faculty_registeration_id=<?php echo $row->faculty_registeration_id;?>" class="btn btn-success fa fa-edit"><b>Edit</b></a>&nbsp;&nbsp;
<a href="viewfacultyreg.php?del=<?php echo $row->faculty_registeration_id;?>" class="btn btn-danger fa fa-pencil" onclick="return confirm('Do you want to delete');"><b>Delete</b></a></td>

                                        </tr>
                                        
                                        <?php $cnt=$cnt+1; }?>
                                        </tbody>
                                </table></div></div></div>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                    <!--End Advanced Tables -->
                </div>
            </div>




<?php include 'footer1.php';?>
</body>
</html>