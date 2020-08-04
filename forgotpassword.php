<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oas";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['forgott']))
{
	
	$mail_to=$_POST['email'];
	//$mail_to = $_POST['mail_to'];
	//$mailsub = $_POST['mail_sub'];
	
	$sql="select * from user_master where email='$mail_to'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
	$sql1="select password from user_master where email ='$mail_to'";
	$result1= $conn -> query($sql1);
	$data1= $result1->fetch_assoc();
	$pass=$data1['password'];
	 $pass1=md5($pass);
	$mailsub="Forgott Password";
	
	$mailMsg = "Your Password is :".$pass1;
	require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPDebug=0;
    $mail->SMTPAuth = true;
	$mail->SMTPSecure="tls";
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587;
	$mail->Username = "nannavaremalvika79@gmail.com";
    $mail->Password = "malu&hitu79";
	$mail->SMTPOptions = array(
		'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
	)
	);
	$mail->setFrom('nannavaremalvika79@gmail.com', 'Malvika Nannavare');
    $mail->addAddress($mail_to);
	
	$mail->addReplyTo('nannavaremalvika79@gmail.com', 'Malvika Nannavare');
	$mail->Subject = $mailsub;
	$mail->Body = $mailMsg;

	if($mail->Send())
	{
		echo "<script>alert('Mail Sent')</script>";
	}
	else
	{
		echo "<script>alert('Mail not Sent')</script>";
	}
	}
	
	
	$sql2="select * from faculty_registeration where email='$mail_to'";
	$result2 = $conn->query($sql2);
	if ($result2->num_rows > 0) 
	{
	$sql3="select password from faculty_registeration where email ='$mail_to'";
	$result3= $conn -> query($sql3);
	$data2= $result3->fetch_assoc();
	$pass=md5($data2['password']);
	
	$mailsub="Forgott Password";
	
	$mailMsg = "Your Password is :".$pass;
	require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPDebug=0;
    $mail->SMTPAuth = true;
	$mail->SMTPSecure="tls";
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587;
	$mail->Username = "nannavaremalvika79@gmail.com";
    $mail->Password = "malu&hitu79";
	$mail->SMTPOptions = array(
		'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
	)
	);
	$mail->setFrom('nannavaremalvika79@gmail.com', 'Malvika Nannavare');
    $mail->addAddress($mail_to);
	
	$mail->addReplyTo('nannavaremalvika79@gmail.com', 'Malvika Nannavare');
	$mail->Subject = $mailsub;
	$mail->Body = $mailMsg;

	if($mail->Send())
	{
		echo "<script>alert('Mail Sent')</script>";
	}
	else
	{
		echo "<script>alert('Mail not Sent')</script>";
	}
	
$conn->close();
	}
	else
	{
		echo "<script>alert('Email Not Valid')</script>";
	}
}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <?php include 'header.php';?>
 <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <div class="col-md-12">
                                <div class="error-404-page text-center">
                                    <h3>Forgot Password?</h3>
                                    
                                    <p>Please enter your email address.
                                        <br>You will receive a link to create a new password via email.</p>
                                    <form class="form-search search-404" action="" method="post">
                                        <div class="input-append">
                                            <input type="text" class="span2 search-query" name="email">
                                            <button type="submit" class="btn btn-primary" name="forgott">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- === END CONTENT === -->
                        
                
 
 
 
 
 
 
 
 <?php include 'footer.php';?>
</body>
</html>