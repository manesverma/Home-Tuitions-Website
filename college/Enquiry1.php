<?php
ob_start();
include('connection/dbconfig.php');
 {
	$uname = $_POST['uname'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$enquiry = $_POST['enquiry'];
	
	//echo $uname,$contact,$email,$enquiry;
	
$query = "insert into enquiry (uname,contact,email,enquiry) values('$uname','$contact','$email','$enquiry');";

$r = mysql_query($query);
$num = (int) $r;

if ($num > 0) {
    header("location:submitform1.php");
} else {
    header("location:error1.php");
}
}
?>
