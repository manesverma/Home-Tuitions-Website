<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include('connection/dbconfig.php');

error_reporting(0);
ob_start();
session_start();

$a1 = $_POST['class'];
$a2 = $_POST['Sec'];
$a3 = $_POST['Date'];

$current_file = $_FILES['attachedfile']['name'];
$extension = substr(strrchr($current_file, '.'), 1);
$time = date("fYhis");
$file = "attachement_" . $time . "." . $extension;
$path = "attachement/" . $file;
$action = copy($_FILES['attachedfile']['tmp_name'], $path);
if (!$action) {
    $file = "";
}

if (isset($_POST['btnsend'])) {
//insert into msgbox table
    $query = "insert into studenttimetable(a1,a2,a3,attachement) values('$a1','$a2','$a3','$file')";
    $r = mysql_query($query);
    $num = (int) $r;
    if ($num > 0) {
        $_SESSION['MSG'] = " Time Table has been successfully submited.!!";
    } else {
        $_SESSION['MSG'] = "Your Notes has not been submited.!!";
    }
    echo "<script>window.location.href=('TimeTableStudent.php')</script>";
}

//header("location:../compose.php");
?>
