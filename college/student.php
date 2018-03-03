<?php

ob_start();
include('connection/dbconfig.php');
session_start();

$sid = $_POST['txthidden'];
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
$subject = $_POST['maintainclass'];
$fname = $_POST['txtname'];
$lname = $_POST['txtlname'];
$gender = $_POST['cmbgender'];
$dob = $_POST['txtdb'];
$dd = $_POST['dd'];
$mm = $_POST['mm'];
$yy = $_POST['yy'];
$mob = $_POST['number'];
$email = $_POST['txtemail'];
$address = $_POST['txtaddress'];
$city = $_POST['cmbcity'];
$pin = $_POST['txtpin'];
$state = $_POST['txtstate'];
$country = $_POST['cmbcountry'];
$tname = $_POST['category'];

$query = "insert into signup (sid,uname,pwd,subject,fname,lname,gender,dd,mm,yy,mob,email,address,city,pin,state,country,tname) values('$sid','$uname','$pwd','$subject','$fname','$lname','$gender','$dd','$mm','$yy','$mob','$email','$address','$city','$pin','$state','$country','$tname')";

$r = mysql_query($query);

$num = (int) $r;

if ($num > 0) {


    header("location:submitform1.php");
} else {

    header("location:error1.php");
}
?>
