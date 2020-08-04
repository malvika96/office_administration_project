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
 
    $sql = mysqli_query($conn,"select b.name,a.tc_no,a.enrollment,a.enroll_date,s.stream,c.class,d.semester,a.semfive,a.semsix,a.passed_year,a.seat_no,a.dob,a.print_date,e.dept from transferrence a,student_detail b,stream s,type_of_class c,semester_details d,vnsgu_department e where a.stream_id=s.stream_id and a.class_id=c.class_id and a.student_id=b.student_id and a.semester_id=d.semester_id and a.department_id=e.department_id");
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
$columnHeader = "Sr NO"."\t"."Transferences No"."\t"."Student Name"."\t"."Enrollment No"."\t"."Enrollment Date"."\t"."Stream"."\t"."Class"."\t"."Semester"."\t"."Duration of 5th sem"."\t"."Duration of 6th sem"."\t"."Passed Year"."\t"."Seat No"."\t"."Date of Birth"."\t"."Print Date"."\t"."Department Name"."\t";
 
if($exportType=='CSV'){
    // if you wanted export file of csv type then used this code
    header("Content-type: text/x-csv");
    header("Content-Disposition: attachment; filename=Transference Records.csv");
}else{
    // if you wanted to export file of excel type then used this code
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=Transference Records.xls");
}
 
header("Pragma: no-cache");
header("Expires: 0");
 
echo ucwords($columnHeader) . "\n" . $setData . "\n";
?>