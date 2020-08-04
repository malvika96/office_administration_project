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
 
$exportType = '';
 
//$exportType = 'CSV'; 
 
    $sql = mysqli_query($conn,"select a.re_no,b.name,a.gender1,s.stream,c.class,p.purpose_of_bonafied,a.date,a.roll_no,a.academic_year from bonafied a,student_detail b,type_of_class c,stream s,bonafied_purpose p where a.student_id=b.student_id and a.stream_id=s.stream_id and a.class_id=c.class_id and a.bonafied_purpose_id=p.bonafied_purpose_id");
    $conn->close();
 
$srNo=1;
$rowData ='';
$setData='';
 
while($rec = mysqli_fetch_row($sql))
{
    $rowData = '"' . $srNo . '"' . "\t";
    foreach($rec as $value)
    {
        $value = '"' . $value . '"' . "\t";
        $rowData .= $value;
    }
    $setData .= trim($rowData)."\n";
    $srNo++;
}
$columnHeader ='';
$columnHeader = "Sr NO"."\t"."References No"."\t"."Date"."\t"."Student_id"."\t"."Gender1"."\t"."Class"."\t"."Streem"."\t"."Roll No"."\t"."Academic Year"."\t"."Purpose Of Bonafied"."\t";
 
if($exportType=='CSV'){
    // if you wanted export file of csv type then used this code
    header("Content-type: text/x-csv");
    header("Content-Disposition: attachment; filename=Bonafied.csv");
}else{
    // if you wanted to export file of excel type then used this code
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=Bonafied.xls");
}
 
header("Pragma: no-cache");
header("Expires: 0");
 
echo ucwords($columnHeader) . "\n" . $setData . "\n";
?>