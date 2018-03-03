<?php

error_reporting(0);
ob_start();
session_start();
header("Pragma: no-cache");
header("Cache: no-cahce");
include_once "connection/dbconfig.php"; //Connection

$user_id = $_POST['txt_name'];
$fname = $_POST['txt_name'];
$lname = $_POST['txtlname'];
$gender = $_POST['cmbgender'];
$dob = $_POST['txtdb'];
$phone = $_POST['number'];
$email = $_POST['txtemail'];
$address = $_POST['txtaddress'];
$city = $_POST['cmbcity'];

$pin = $_POST['txtpin'];
$state = $_POST['txtstate'];
$country = $_POST['cmbcountry'];

$query = "update signup set  fname='$fname' ,lname='$lname' ,gender='$gender',dob='$dob',mob='$phone',email='$email',address='$address',city='$city',pin='$pin',state='$state',country='$country' where uname='$user_id'";
$r = mysql_query($query);
$num = (int) $r;
if ($num > 0) {
    $_SESSION['MSG'] = "Your information has been successfully updated.!!";
} else {
    $_SESSION['MSG'] = "Your information has not been updated.!!";
}
header("location:MyAccountStudent1.php");
?>

