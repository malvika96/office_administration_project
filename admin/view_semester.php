
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
	$adn="delete from semester_details where semester_id=?";
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
                     <h2>Semester Table</h2>   
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
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"><div id="dataTables-example_filter" class="dataTables_filter"></div></div></div><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 200px;">No</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Stream</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Class</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Semester</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Update/Delete</th></tr>
                                    </thead>
                                    <tbody>  
                                    <?php                                    
                                        $ret="select a.semester_id,b.stream,c.class,a.semester from semester_details a,stream b,type_of_class c where 			a.stream_id=b.stream_id and a.class_id=c.class_id";
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
                                            <td class=" "><?php echo $row->stream;?></td>
                                            <td class=" "><?php echo $row->class;?></td>
                                            <td class=" "><?php echo $row->semester;?></td>
                                             
                                            <td><a href="updatesemester.php?semester_id=<?php echo $row->semester_id;?>" class="btn btn-success fa fa-edit"><b>Edit</b></a>&nbsp;&nbsp;
<a href="view_semester.php?del=<?php echo $row->semester_id;?>" class="btn btn-danger fa fa-pencil" onclick="return confirm('Do you want to delete');"><b>Delete</b></a></td>

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