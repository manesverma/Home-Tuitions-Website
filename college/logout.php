<?php
 // you have to open the session first
 session_start();

 //remove all the variables in the session
 session_unset();

 // destroy the session
 session_destroy();

 ?>

<html>
    <head>
        <title>Magic Academy</title>
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
    <body><div class="pra3">
		 <div class="wrapper1 col0">
            <div id="topbar">
                <div id="slidepanel">
                    <div class="topbox">
                        <h2>Student Login Here</h2>
                        <form id="frm" action="StudentLogin.php" method="post">
                            <fieldset style="height: auto;width: 300px;padding: 10px;">
                                <legend>Login</legend>
                                <table align="center" cellpadding="5" cellspacing="5">
                                    <tr>
                                        <td>User Name:</td>
                                        <td><input type="text" id="txtemailid" name="txtemailid" style="font-size: 15px; width: 180px; height: 30px;"></td>
                                    </tr>
                                    <tr>
                                        <td>Password:</td>
                                        <td><input type="password" id="txtpass" name="txtpass" style="font-size: 15px; font-weight: bold; height: 30px; width: 180px;"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="right">
                                            <input type="submit" value="Login" name="btnlogin" id="btnlogin" class="button">
                                        </td>
                                    </tr>
                                </table>

                            </fieldset>
                        </form>
                    </div>
                    <div class="topbox">
                        <h2>Teachers Login Here</h2>
                        <form id="frm" action="TeacherLogin.php" method="post">
                            <fieldset style="height: auto;width: 300px;padding: 10px;">
                                <legend>Login</legend>
                                <table align="center" cellpadding="5" cellspacing="5">

                                    <tr>
                                        <td>User Name:</td>
                                        <td><input type="text" id="txtemailid" name="txtemailid" style="font-size: 15px; width: 180px; height: 30px;"></td>
                                    </tr>
                                    <tr>
                                        <td>Password:</td>
                                        <td><input type="password" id="txtpass" name="txtpass" style="font-size: 15px; font-weight: bold; height: 30px; width: 180px;"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="right">
                                            <input type="submit" value="Login" name="btnlogin" id="btnlogin" class="button">
                                        </td>
                                    </tr>
                                </table>

                            </fieldset>
                        </form>
                    </div>
                    <div class="topbox">
                        <h2>Administration Login Here</h2>
                        <form id="frm" action="AdminLogin.php" method="post">
                            <fieldset style="height: auto;width: 300px;padding: 10px;">
                                <legend>Login</legend>
                                <table align="center" cellpadding="5" cellspacing="5">

                                    <tr>
                                        <td>User Name:</td>
                                        <td><input type="text" id="txtemailid" name="txtemailid" style="font-size: 15px; width: 180px; height: 30px;"></td>
                                    </tr>
                                    <tr>
                                        <td>Password:</td>
                                        <td><input type="password" id="txtpass" name="txtpass" style="font-size: 15px; font-weight: bold; height: 30px; width: 180px;"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="right">
                                            <input type="submit" value="Login" name="btnlogin" id="btnlogin" class="button">
                                        </td>
                                    </tr>
                                </table>

                            </fieldset>
                        </form>
                    </div>
                    <br class="clear" />
                </div>
                <div id="loginpanel">
                    <ul>
                        <!--<li class="left">Log In Here &raquo;</li> -->
                        <li class="right" id="toggle"><a id="slideit" href="#slidepanel">Login Here</a><a id="closeit" style="display: none;" href="#slidepanel">Close Panel</a></li>
                    </ul>
                </div>
                <br class="clear" />
            </div>
        </div>
        <!-- ####################################################################################################### -->
       <div class="wrapper1 col1">
            <div id="header">
                 <?php include "headersub.php" ?>
                <div id="topnav">
                      <?php include "header.php" ?>
                </div>
                <br class="clear" />
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col2">
            <div id="featured_slide">
                <div><a href="#"><img src="images/demo/logout.jpg" height="300px;" width="960px;" alt="" /></a>

                </div>
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col3">
            <div id="homecontent">
                <!-- <table width="100%"> 
                                <tr><td>&nbsp;</td></tr>
                                <tr>
                                    <td class="fontcontent" width="100%" align="center">
                                        Session Time Expired !!
                                    </td>
                                </tr>
                                <tr><td>&nbsp;</td></tr>
                                <tr>
                                    <td class="fontcontent" width="100%" align="center">
                                        Please Login Again !!
                                    </td>
                                </tr>
                                <tr><td>&nbsp;</td></tr>
                                <tr>
                                    <td class="fontcontent" width="100%" align="center">
                                        <a href="index.php" class="Newsfont">CLICK HERE</a>
                                    </td>
                                </tr>
                            </table> -->
					<h1 align="center"> Thank You!!! </h1>
                <br class="clear" />
            </div>
        </div><br><br>
		<div class="wrapper1 col5">
     <?php include "footer.php" ?>
	 </div>
	 </div>
    </body>
</html>
