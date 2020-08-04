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
	$adn="delete from eng_proficiency where eng_proficiency_id=?";
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
                     <h2>English Proficiance </h2>   
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
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"></div></div><div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter"><label>Search:&nbsp;<input type="search" class="form-control input-sm" aria-controls="dataTables-example" onKeyUp="aa();" id="sea">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button style="background:#F9E704"><a href="exportenglishproficiency.php"><font color="#000000">Export To Excel</font></a></button></div></div></div><div id="data"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 200px;">No</th><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 200px;">REF_No</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Date</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">stream_name</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">student_name</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">start_year</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">End_year</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Action</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Update/Delete</th></tr>
                                    </thead>
                                    <tbody>  
                                    <?php    
									 
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
                                        $ret="select a.eng_proficiency_id,b.name,a.ref_no,a.date,a.stream_name,a.start_year,a.end_year from eng_proficiency a,student_detail b  where a.student_id=b.student_id order by eng_proficiency_id ASC LIMIT $start_from,$record_per_page";
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
                                            <td class=" "><?php echo $row->ref_no;?></td>
                                            <td class=" "><?php echo $row->date;?></td>
                                            <td class=" "><?php echo $row->stream_name;?></td>
                                            <td class=" "><?php echo $row->name;?></td>
                                            <td class=" "><?php echo $row->start_year;?></td>
                                            <td class=" "><?php echo $row->end_year;?></td>
                                             <td><a href="engdesign.php?eng_proficiency_id=<?php echo $row->eng_proficiency_id;?>" class="btn btn-success fa "><b>Print</b></a></td>
                                            <td><a href="updateenglish_proficiance.php?eng_proficiency_id=<?php echo $row->eng_proficiency_id;?>" class="btn btn-success fa fa-edit"><b>Edit</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="viewenglishproficiance.php?del=<?php echo $row->eng_proficiency_id;?>" class="btn btn-danger fa fa-pencil" onclick="return confirm('Do you want to delete');"><b>Delete</b></a></td>

                                        </tr>
                                        
                                        <?php $cnt=$cnt+1; }?>
                                        </tbody>
                                </table></div><div class="row"><div class="col-sm-6">
							<div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all"></div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"></div>
                           <div class="pagination">
		<?php
		$page_query="select * from eng_proficiency ORDER BY eng_proficiency_id ASC";
		$page_result=mysqli_query($conn,$page_query);
		$total_records=mysqli_num_rows($page_result);
		$total_pages=ceil($total_records/$record_per_page);
		$pagLink = "<nav><ul class='pagination'><li class='paginate_button previous disabled' aria-controls='dataTables-example' tabindex='0' id='dataTables-example_previous'><a href='#'>Previous</a></li>"; 
							   
	
		for($i=1;$i<=$total_pages;$i++)
		{
			
			 $pagLink .= "<li class='paginate_button' aria-controls='dataTables-example' tabindex='0'><a href='viewenglishproficiance.php?page=".$i."'>".$i."</a></li>";
			
		};
		echo $pagLink . "<li class='paginate_button next' aria-controls='dataTables-example' tabindex='0' id='dataTables-example_next'><a href='viewenglishproficiance.php?page=".$i."'>Next</a></li></ul></nav>";
		?>
							</div>   
	</div>
							</div>
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
<script type="text/javascript">
function aa()
	{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","searchenglishproficiency.php?nm="+document.getElementById("sea").value,false);
	xmlhttp.send(null);
	document.getElementById("data").innerHTML=xmlhttp.responseText;
	document.getElementById("data").style.visibility='visible';
		
	}
</script>