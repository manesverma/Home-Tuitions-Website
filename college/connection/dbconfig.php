<?php

$hostname = "localhost:3306"; //sql port no
$username = "root"; //user name
$password = ""; //password

$dbhandle = mysql_connect($hostname, $username, $password)
        or die("Unable to connect to MySQL");

//select a database
$selected = mysql_select_db("neel", $dbhandle) //database name
        or die("Could not select examples");

error_reporting(0);
?>
