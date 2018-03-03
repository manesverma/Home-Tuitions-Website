<?php

ob_start();
session_start();
header("Pragma: no-cache");
header("Cache: no-cahce");
$utype = "";

$user_id = $_SESSION['TEA'];

include_once "connection/dbconfig.php"; //Connection */

if (isset($_GET['oldpwd'])) { //check old password is wrong or not
    //check old password is wrong or not
    $oldpwd = $_GET['oldpwd'];
    $pwd = "";
    $sqlquery = "";

    $sqlquery = "select password from teacher where uname = '$user_id'";
    $result = mysql_query($sqlquery);
    while ($row = mysql_fetch_array($result)) {
        $pwd = $row ['password'];
    }

    if ($oldpwd != $pwd) {
        echo 'Old password is wrong.!!Please, Enter correct password';
    } else {
        echo 'na';
    }
} else if (isset($_POST['btnchangenow'])) { //change new password
    //change new password
    //old password
    $oldpwd = $_POST['txtoldpwd'];


    if ($oldpwd == '') {
        $_SESSION['MSG'] = "Old password field cannot be left blank.!!";
    }

    //new password
    $newpwd = $_POST['txtnewpwd'];

    if ($newpwd == '') {
        $_SESSION['MSG'] = "New password field cannot be left blank.!!";
    }

    //confirm password
    $conpwd = $_POST['txtconpwd'];


    if ($oldpwd == '') {
        $_SESSION['MSG'] = "Confirm password field cannot be left blank.!!";
    }


    $sql = "update teacher set pwd='$newpwd' where uname='$user_id' and pwd='$oldpwd'";
    $result = mysql_query($sql);
    $valueInsert = (int) $result;

    if ($valueInsert > 0) {
        $_SESSION['MSG'] = "New password has been successfully changed.!!";
    } else {
        $_SESSION['MSG'] = "New password has not been changed.!!";
    }

    header("location:ChangePasswordTeacher.php");
}
?>
