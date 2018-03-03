<?php

ob_start(); //start obeject
session_start(); //start sessiong

include('connection/dbconfig.php');


//click on submit button
if (isset($_POST['btnlogin'])) {

    //variable and validation
    $error_msg = '';
    $row_effected = 0;
    $status = false;
    $loginas = STUDENT; //email id
    if ($loginas == '') {
        $error_msg.="Please, Select login as field.!!";
    }

    $email = $_POST['txtemailid']; //email id

    if ($email == '') {
        $error_msg.="Email id field cannot be left blank.!!";
    }

    $password = $_POST['txtpass']; //password

    if ($password == '') {
        $error_msg.="Password field cannot be left blank.!!";
    }

    if ($loginas == "STUDENT") {

        //login for patient
        $query = "select uname,pwd from signup where uname='$email' and pwd = '$password'";
        $result = mysql_query($query);
        while ($row = mysql_fetch_array($result)) {
            $name = $row ['uname'];
            $status = true;

        }
        if ($status == true) {
             $_SESSION['STU'] = $name;
            header("location:Studenthome.php");
        } else {
            $_SESSION['MSG'] = "Email id and password are wrong.!!";
            header("location:index.php");
        }
    }

} else {
    $_SESSION['MSG'] = $error_msg; //set message in sessiong
    header("location:index.php");
}
?>
