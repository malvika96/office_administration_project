<?php
$nm=$_GET["nm"];
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
$record_per_page=10;
$page='';
if(isset($_GET["page"]))
{
	$page=$_GET["page"];
}
else
{
	$page=1;
}
$start_from=($page-1)*$record_per_page;
$ret="select a.bono_id,b.name,a.gender1,s.stream,c.class,p.purpose_of_bonafied,a.re_no,a.date,a.roll_no,a.academic_year from bonafied a,student_detail b,type_of_class c,stream s,bonafied_purpose p where a.student_id=b.student_id and a.stream_id=s.stream_id and a.class_id=c.class_id and a.bonafied_purpose_id=p.bonafied_purpose_id  and b.name like('$nm%')";

$stmt = $conn->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();

$cnt=1;
echo "</br>";
echo "<table  class='table table-striped table-bordered table-hover dataTable no-footer' id='dataTables-example' aria-describedby='dataTables-example_info'>";
echo"<tr role='row'>";
                                        	echo "<th class='sorting_asc' tabindex='0' aria-controls='dataTables-example' rowspan='1' colspan='1' aria-label='Rendering engine: activate to sort column ascending' aria-sort='ascending' style='width:10px;'>"; echo 'Sno.'; echo "</th>";
											
											echo "<th>"; echo 'References'; echo "</th>";
											echo "<th>"; echo 'Date'; echo "</th>";
											echo "<th>"; echo 'Name'; echo "</th>";
											echo "<th>"; echo 'Gender'; echo "</th>";
											echo "<th>"; echo 'Stream'; echo "</th>";
											echo "<th>"; echo 'Class'; echo "</th>";
											echo "<th>"; echo 'Roll Number'; echo "</th>";
											echo "<th>"; echo 'Academic Year'; echo "</th>";
											echo "<th>"; echo 'Purpose'; echo "</th>";
										
															echo "<th class='sorting_asc' tabindex='0' aria-controls='dataTables-example' rowspan='1' colspan='1' aria-label='Rendering engine: activate to sort column ascending' aria-sort='ascending' style='width:170px;'>"; echo 'Update/Delete'; echo "</th>";


echo"</tr>";
echo"</thead>";
 echo "<tbody>";                                  
                                           
while($row=$res->fetch_object())
	  {
echo "<tr class='gradeA odd'>";
echo "<td>"; echo $row->bono_id; echo "</td>";
echo "<td>"; echo $row->re_no; echo "</td>";
echo "<td>"; echo $row->date; echo "</td>";
echo "<td>"; echo $row->name; echo "</td>";
echo "<td>"; echo $row->gender1; echo "</td>";
echo "<td>"; echo $row->stream; echo "</td>";
echo "<td>";echo $row->class; echo "</td>";
echo "<td>";echo $row->roll_no; echo "</td>";
echo "<td>";echo $row->academic_year; echo "</td>";
echo "<td>";echo $row->purpose_of_bonafied; echo "</td>";
                                          
                                            
	
echo "<td><a href='updatebonafied.php?bono_id=$row->bono_id' class='btn btn-success fa fa-edit'><b>Edit</b></a>"; echo "&nbsp;&nbsp" ;
echo"<a href='viewbonafied.php?del=$row->bono_id' class='btn btn-danger fa fa-pencil' onclick='return confirm('Do you want to delete');'><b>Delete</b></a>"; echo "</td>";
									
	$cnt=$cnt+1;

}
echo "</tbody>";
echo "</table>";

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>