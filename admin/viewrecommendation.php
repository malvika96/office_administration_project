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
if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from recommendation where recommendation_id=?";
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
                     <h2> Recommendation Letter </h2>   
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
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"></div></div><div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter"><label>Search:&nbsp;<input type="search" class="form-control input-sm" aria-controls="dataTables-example" onKeyUp="aa();" id="sea">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><button style="background:#F9E704"><a href="exporrecom.php"><font color="#000000">Export To Excel</font></a></button></div></div></div><div id="data"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 200px;">No</th><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 200px;">REF_No</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Date</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Student_name</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">stream</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Stream Name</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Subject1</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Subject2</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Faculty Name</th> <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Action</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">Update/Delete</th></tr>
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
									$ret="select a.recommendation_id,a.ref_no,a.date,d.name,s.stream,a.stream_name,a.subject1,a.subject2,a.faculty_name from recommendation a,stream s,student_detail d where a.stream_id=s.stream_id and a.student_id=d.student_id";                                   
                                      
										$stmt = $conn->prepare($ret);
										//$stmt->bind_param('i',$aid);
										$stmt->execute(); //ok
										$res=$stmt->get_result();

										$cnt=1;
										while($row=$res->fetch_object())
	 	 									{
	  								?>

                                    <tr class="odd gradeA">
                                            <td class="sorting_1"><?php echo $cnt;;?></td>
                                            <td class=" "><?php echo $row->ref_no;?></td>
                                            <td class=" "><?php echo $row->date;?></td>
                                            <td class=" "><?php echo $row->name;?></td>
                                            <td class=" "><?php echo $row->stream;?></td>
                                            <td class=" "><?php echo $row->stream_name;?></td>
                                            <td class=" "><?php echo $row->subject1;?></td>
                                            <td class=" "><?php echo $row->subject2;?></td>
                                            
                                            <td class=" "><?php echo $row->faculty_name;?></td>
                                             <td><a href="recommodation-letter design.php?recommendation_id=<?php echo $row->recommendation_id;?>" class="btn btn-success fa"><b>Print</b></a></td>
                                            <td><a href="updaterecommendation.php?recommendation_id=<?php echo $row->recommendation_id;?>" class="btn btn-success fa fa-edit"><b>Edit</b></a>&nbsp;&nbsp;
<a href="viewrecommendation.php?del=<?php echo $row->recommendation_id;?>" class="btn btn-danger fa fa-pencil" onclick="return confirm('Do you want to delete');"><b>Delete</b></a></td>

                                        </tr>
                                        
                                        <?php $cnt=$cnt+1; }?>
                                        </tbody>
                                </table></div><div class="row"><div class="col-sm-6">
							<div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all"></div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"></div>
                           <div class="pagination">
		<?php
		$page_query="select * from recommendation ORDER BY recommendation_id ASC";
		$page_result=mysqli_query($conn,$page_query);
		$total_records=mysqli_num_rows($page_result);
		$total_pages=ceil($total_records/$record_per_page);
		$pagLink = "<nav><ul class='pagination'><li class='paginate_button previous disabled' aria-controls='dataTables-example' tabindex='0' id='dataTables-example_previous'><a href='#'>Previous</a></li>"; 
							   
	
		for($i=1;$i<=$total_pages;$i++)
		{
			
			 $pagLink .= "<li class='paginate_button' aria-controls='dataTables-example' tabindex='0'><a href='viewrecommendation.php?page=".$i."'>".$i."</a></li>";
			
		};
		echo $pagLink . "<li class='paginate_button next' aria-controls='dataTables-example' tabindex='0' id='dataTables-example_next'><a href='viewrecommendation.php?page=".$i."'>Next</a></li></ul></nav>";
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
	xmlhttp.open("GET","searchrecomodation.php?nm="+document.getElementById("sea").value,false);
	xmlhttp.send(null);
	document.getElementById("data").innerHTML=xmlhttp.responseText;
	document.getElementById("data").style.visibility='visible';
		
	}
</script>