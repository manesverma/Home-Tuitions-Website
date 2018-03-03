<?php
error_reporting(0);
include ( 'includes/header1.php' );
$error = "";
if (@$_POST['register']) {
  $date = date("m d Y");
 $firstname = strip_tags($_POST['firstname']);
 $lastname = strip_tags($_POST['lastname']);
 $username = strip_tags($_POST['username']);
 $email = strip_tags($_POST['email']);
 $password1 = strip_tags(md5($_POST['password']));
 $password2 = strip_tags(md5($_POST['passwordrepeat']));

 $day = strip_tags($_POST['day']);
 $month = strip_tags($_POST['month']);
 $year = strip_tags($_POST['year']);
 $dob = "$day/$month/$year";

 if ($firstname == "") {
  $error = "Firstname cannot be left empty.";
 }
 else if ($lastname == "") {
  $error = "Lastname cannot be left empty.";
 }
 else if ($username == "") {
  $error = "Username cannot be left empty.";
 }
 else if ($email == "") {
  $error = "Email cannot be left empty.";
 }
 else if ($password1 == "") {
  $error = "Password cannot be left empty.";
 }
 else if ($password2 == "") {
  $error = "Repeat Password cannot be left empty.";
 }
 else if ($day == "") {
  $error = "The day you were born cannot be left empty.";
 }
 else if ($month == "") {
  $error = "The month you were born cannot be left empty.";
 }
 else if ($year == "") {
  $error = "The year you were born cannot be left empty.";
 }
 //Check the username doesn't already exist
 $check_username = mysql_query("SELECT username FROM users WHERE username='$username'");
 $numrows_username = mysql_num_rows($check_username);
 if ($numrows_username != 0) {
  $error = 'That username has already been registered.';
 }
 else
 {
  $check_email = mysql_query("SELECT email FROM users WHERE email='$email'");
 $numrows_email = mysql_num_rows($check_email);
 if ($numrows_email != 0) {
  $error = 'That email has already been registered.';
 }
 else
 {
 if ($password1 != $password2) {
 $error = 'The passwords don\'t match!';
 }
 else
 {
 //Register the user
 $register = mysql_query("INSERT INTO users(firstname,lastname,username,email,password,dob,locked) VALUES('$firstname','$lastname','$username','$email','$password1','$dob','no')") or die(mysql_error());
 die('Registered successfully!');
 }
 }
 }
}
?>
<SCRIPT type="text/javascript" src="checkinguser.js"></SCRIPT>
<SCRIPT type="text/javascript">



$(document).ready(function(){

$("#username").change(function() {

var usrN = $("#username").val();

if(usrN.length >= 4)
{
$("#statuspass").html('<img src="images/loadingAnimation.gif">&nbsp;Checking ...');

    $.ajax({
    type: "POST",
    url: "checking.php",
    data: "username="+ usrN,
    success: function(msg){

   $("#statuspass").ajaxComplete(function(event, request, settings){

	if(msg == 'OK')
	{
        $("#username").removeClass('object_error');
		$("#username").addClass("object_ok");
		$(this).html('<img src="images/success.png" align="absmiddle">&nbsp;OK<');
	}
	else
	{
		$("#username").removeClass('object_ok');
		$("#username").addClass("object_error");
		$(this).html(msg);
	}

   });

 }

  });

}
else
	{
	$("#statuspass").html('<font color="red" style="margin-left:125px;">something went wrong <strong></strong> .</font>');
	$("#username").removeClass('object_ok');
	$("#username").addClass("object_error");
	}

});

});

//-->
</SCRIPT>


<SCRIPT type="text/javascript" src="checkinguser.js"></SCRIPT>
<SCRIPT type="text/javascript">



$(document).ready(function(){

$("#email").change(function() {

var usr = $("#email").val();

if(usr.length >= 4)
{
$("#status").html('<img src="images/loadingAnimation.gif">&nbsp;Checking ...');

    $.ajax({
    type: "POST",
    url: "checking.php",
    data: "email="+ usr,
    success: function(msg){

   $("#status").ajaxComplete(function(event, request, settings){

	if(msg == 'OK')
	{
        $("#email").removeClass('object_error');
		$("#email").addClass("object_ok");
		$(this).html(' <img src="images/success.png" align="absmiddle">&nbsp;OK');
	}
	else
	{
		$("#email").removeClass('object_ok');
		$("#email").addClass("object_error");
		$(this).html(msg);
	}

   });

 }

  });

}
else
	{
	$("#status").html('<font color="red" style="margin-left:125px;">something went wrong <strong></strong> .</font>');
	$("#email").removeClass('object_ok');
	$("#email").addClass("object_error");
	}

});

});

//-->
</SCRIPT>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>College Education System</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
        <script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
        <script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>
        <!-- Homepage Only Scripts -->
        <script type="text/javascript" src="layout/scripts/jquery.cycle.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#featured_slide').after('<div id="fsn"><ul id="fs_pagination">').cycle({
                    timeout: 5000,
                    fx: 'fade',
                    pager: '#fs_pagination',
                    pause: 1,
                    pauseOnPagerHover: 0
                });
            });
        </script>

    </head>
    <body>
        <div class="wrapper col0">
            <div id="topbar">
                <div id="slidepanel">
                    <div class="topbox last">
                        <h2>Student Login Here</h2>
                        <form action="#" method="post">
                            <fieldset>
                                <legend>Pupils Login Form</legend>
                                <label for="pupilname">Username:
                                    <input type="text" name="pupilname" id="pupilname" value="" />
                                </label>
                                <label for="pupilpass">Password:
                                    <input type="password" name="pupilpass" id="pupilpass" value="" />
                                </label>
                                <label for="pupilremember">
                                    <input class="checkbox" type="checkbox" name="pupilremember" id="pupilremember" checked="checked" />
                                    Remember me</label>
                                <p>
                                    <input type="submit" name="pupillogin" id="pupillogin" value="Login" />
                                    &nbsp;
                                    <input type="reset" name="pupilreset" id="pupilreset" value="Reset" />
                                </p>
                            </fieldset>
                        </form>
                    </div>
                    <div class="topbox">
                        <h2>Teachers Login Here</h2>
                        <form action="#" method="post">
                            <fieldset>
                                <legend>Teachers Login Form</legend>
                                <label for="teachername">Username:
                                    <input type="text" name="teachername" id="teachername" value="" />
                                </label>
                                <label for="teacherpass">Password:
                                    <input type="password" name="teacherpass" id="teacherpass" value="" />
                                </label>
                                <label for="teacherremember">
                                    <input class="checkbox" type="checkbox" name="teacherremember" id="teacherremember" checked="checked" />
                                    Remember me</label>
                                <p>
                                    <input type="submit" name="teacherlogin" id="teacherlogin" value="Login" />
                                    &nbsp;
                                    <input type="reset" name="teacherreset" id="teacherreset" value="Reset" />
                                </p>
                            </fieldset>
                        </form>
                    </div>
                    <div class="topbox last">
                        <h2>Administration Login Here</h2>
                        <form action="#" method="post">
                            <fieldset>
                                <legend>Pupils Login Form</legend>
                                <label for="pupilname">Username:
                                    <input type="text" name="pupilname" id="pupilname" value="" />
                                </label>
                                <label for="pupilpass">Password:
                                    <input type="password" name="pupilpass" id="pupilpass" value="" />
                                </label>
                                <label for="pupilremember">
                                    <input class="checkbox" type="checkbox" name="pupilremember" id="pupilremember" checked="checked" />
                                    Remember me</label>
                                <p>
                                    <input type="submit" name="pupillogin" id="pupillogin" value="Login" />
                                    &nbsp;
                                    <input type="reset" name="pupilreset" id="pupilreset" value="Reset" />
                                </p>
                            </fieldset>
                        </form>
                    </div>
                    <br class="clear" />
                </div>
                <div id="loginpanel">
                    <ul>
                        <li class="left">Log In Here &raquo;</li>
                        <li class="right" id="toggle"><a id="slideit" href="#slidepanel">Administration</a><a id="closeit" style="display: none;" href="#slidepanel">Close Panel</a></li>
                    </ul>
                </div>
                <br class="clear" />
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col1">
            <div id="header">
                <div id="logo">
                    <h1><a href="index.html">College Education </a></h1>
                    <p>Copyrights © 2014 Lal Bahadur Shastri Institute Of Management. All Rights Reserved.</p>
                </div>
                <div id="topnav">
                      <?php include "header.php" ?>
                </div>
                <br class="clear" />
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col2">
            <div id="featured_slide">
                <div><a href="#"><img src="images/demo/23hbanner_Image1-Copy.jpg" height="300px;" width="960px;" alt="" /></a>

                </div>
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col3">
            <div id="homecontent">

<form action='StuentJoin.php' method='POST'>
<input type='text' name='firstname' placeholder='Firstname ...'class="form-control" onclick='value=""'required/><p />
<input type='text' name='lastname'  placeholder='Lastname ...'class="form-control" onclick='value=""'required/><p />
<input type='text' name="username" id="username"  placeholder='Username ...'class="form-control" onclick='value=""'required/><span id="statuspass"></span><p />
 <input type="email" placeholder="Email..." name="email" id="email"class="form-control" required><span id="status"></span></p>

  <input type="password"class="form-control" placeholder="New Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required oninvalid="setCustomValidity('Password must contain at least 6 characters, including UPPER/lowercase and numbers')" onChange="try{setCustomValidity('')}catch(e){}">

<!--<input type='text' name='password'  placeholder='Password ...' class="form-control"onclick='value=""'/><p />
-->
<!--<input type="password" name="passwordrepeat"  />
-->
<input type="password" name="passwordrepeat"  placeholder='Repeat Password ...' class="form-control"onclick='value=""' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required oninvalid="setCustomValidity('Password must contain at least 6 characters, including UPPER/lowercase and numbers')" onChange="try{setCustomValidity('')}catch(e){}"/><p />
<!--<input type='text' name='day' value='' size='3' maxlength='2'onclick='value=""'required/>
--><select name='day'required>

<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
</option></select>
<!--<input type='text' name='month' value='' size='6' maxlength='2'onclick='value=""'required/>
--><select name='month' required>

<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
</option></select>
<!--<input type='text' name='year' value='' size='4' maxlength='4' onclick='value=""'required/><p />
-->

<select name='year' required>

<option>2001</option>
<option>2002</option>
<option>2003</option>
<option>2004</option>
<option>2005</option>

</option></select>
<br />
<input type='submit' name='register' class="btn-warning" value='Create Your Account Now!'  style="font-family:'Courier New', Courier, monospace; width:370px;height:40px;font-weight:bold;" />
<?php echo $error; ?>
</form>
                <br class="clear" />
            </div>
        </div>
        <!-- ####################################################################################################### -->

        <!-- ####################################################################################################### -->
        <div class="wrapper col5">
            <div id="copyright">
                <p class="fl_left">Copyrights © 2014 Lal Bahadur Shastri Institute Of Management. All Rights Reserved.</p>
                <br class="clear" />
            </div>
        </div>
    </body>
</html>