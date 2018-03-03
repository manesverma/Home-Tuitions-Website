<?php


error_reporting(0);
ob_start();
session_start();
header("Pragma: no-cache");
header("Cache: no-cahce");
include_once "connection/dbconfig.php"; //Connection

$uname = $_POST["name"];
$pass = $_POST["pass"];

// Select the database to use
mysql_select_db("dbcollegeportal",$con);

$result = mysql_query("SELECT uname, pwd FROM admin WHERE uname = $uname");

$row = mysql_fetch_array($result);

if($row["name"]==$email && $row["pass"]==$pass)
header("location:Adminhome.php");
else
    echo"Sorry, your credentials are not valid, Please try again.";
header("location:index.php");
?>