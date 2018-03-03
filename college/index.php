
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
-->    </head>
    <body>
	<div class="pra">
        <div class="wrapper1 col0">
            <div id="topbar">
                <div id="slidepanel">
                    <div class="topbox last">
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
                    <div class="topbox last">
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
                        <li class="left">Log In Here &raquo;</li>
                        <li class="right" id="toggle"><a id="slideit" href="#slidepanel">Open Pannel</a><a id="closeit" style="display: none;" href="#slidepanel">Close Panel</a></li>
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
                <div class="featured_box"><a href="More1.php"><img src="images/demo/logo.png" alt="" /></a>
                    <div class="floater">
                        <h2>Our Institute</h2>
                        <p>Magic Academy started as a tutoring services company by a group of dedicated and experienced School teachers in Dubai in the year 2012. The center has a Tutoring Permit and licensed tutors who are trained and experienced in the UK / IB / US Education boards.

Magic Academy is a premier tuition brand in Dubai known for its quality tutoring at reasonable fees. Quality tutoring => Delivering Results, which means effective teaching techniques that are exam oriented. Magic Academy  has a repository of exam resources, qualified teachers, Technology driven tutoring methodology, Continuous Evaluation techniques and feedback approach that is unparalleled ! 
                            
                        </p>
                        
                    </div>
                </div>
                <div class="featured_box"><a href="More1.php"><img src="images/demo/subject.jpg" alt="" /></a>
                    <div class="floater">
                        <h2>Courses</h2>
                        <p>1) IGCSE subjects (Key stage 4 of UK / Year 10 - 11)<br>						
									2) GCSE subjects (Key Stage 4 of UK / Year 10 - 11) <br>
									3) AS-A level subjects (Advanced Level, UK / Year 12-13)<br>
									4) IB Subjects (International Baccalaureate, Year 12 - 13)<br>
									5) MYP subjects (Year 10-11) <br>
									6) Homeschooling / British council students <br>
									7) CBSE to IB Migration program <br>
									8) Fast Track IB / A level / IGCSE tutoring programs<br> 
									9) Key Stage 2 (Year 3-6) <br>
									10) Key Stage 3 (Year 7 - 9) <br>
                            
                        </p>
                        
                    </div>
                </div>
                <div class="featured_box"><a href="More1.php"><img src="images/demo/vision.jpg" alt="" /></a>
                    <div class="floater">
                        <h2>Vision</h2>
                        <p>Students from reputed schools in Dubai such as Repton, Dubai International Academy (DIA), Dubai American Academy (DAA), Wellington International (Sh Zayed / DSO), Emirates International school (EIS - Jumeirah / Meadows), Dubai College, Jumeirah College, English College, JESS Ranches, Raffles World Academy, Regent School, Dubai British School, Greenfield Community School, Universal American School (UAS), JBS, Chouiefat School, Winchestor, Gems World Academy, Gems Modern Academy, King's Dubai, American School in Dubai (ASD) ... attend our lessons.
                            
                        </p>
                        
                    </div>
                </div>
                <div class="featured_box"><a href="More1.php"><img src="images/demo/team.jpg" alt="" /></a>
                    <div class="floater">
                        <h2>Team</h2>
                        <p>Dr. Rekha Kandwal<br>Renu Kandwal<br>Damini Dhoundiyal
                            
                        </p>
                        
                    </div>
                </div>
               
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col3">
            <div id="homecontent">
                <div class="fl_left">
                    <h2>Co-Founder</h2>
                                <img src="images/demo/rekha.png" height="200" width="200" alt="" />
                                <p>Dr. Rekha Kandwal</p>

                                <img src="images/demo/renu.png" height="200" width="200" alt="" />
                                <p>Renu Kandwal</p>
                            
                        <br class="clear" />
                    

                </div>
                <br class="clear" />
            </div>
        </div>
        <!-- ####################################################################################################### -->
		<br>
        <!-- ####################################################################################################### -->
        <div class="wrapper1 col5">
            <div id="copyright">
                <p class="fl_left">Copyrights © 2018</p>
                <br class="clear" />
            </div>
        </div>
    </div>
	
	
	</body>
</html>