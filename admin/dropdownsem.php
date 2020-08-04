<?php
$con=new mysqli("localhost","root","","oas");
$class=$_GET["class_id"];

if($class!="")
{
$res=mysqli_query($con,"select * from semester_details where class_id=$class");
echo "<select id='class' name='sem' class='form-control'>";
echo "<option>";echo '--select--'; echo "</option>";
while($row=mysqli_fetch_array($res))
{
	
	echo "<option value='$row[semester_id]'>";echo $row["semester"]; echo "</option>";	
}
echo "</select>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>