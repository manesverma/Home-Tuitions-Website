<?php
header("Pragma: no-cache");
header("Cache: no-cahce");
session_start();
$UNAME = null;
$UNAME = $_SESSION["STU"];
if ($UNAME != null) {

    ob_start();
include('connection/dbconfig.php');

    $MSG = null;
    $MSG = $_SESSION['MSG'];
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
    <body><div class="pra">
       <div class="wrapper1 col1">
            <div id="header">
                <?php include "headersub.php" ?>
                <div id="topnav">
                      <?php include "stu.php" ?>
                </div>
                <br class="clear" />
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col2">
            <div id="featured_slide">
                <div><a href="#"><img src="images/demo/student.jpg" height="300px;" width="960px;" alt="" /></a>

                </div>
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper1 col2">
			<div id="homecontent">
			<H1 align="center"><?php echo "Welcome, Mr.".$_SESSION['STU']."<br><br>"; ?></H1>
			<h1 align="center">
				<a href="MyAccountStudent.php" style="color:#02ACEE;">Profile</a>
			</h1>
			<h1 align="center">
				<a href="ChangePasswordStudent.php" style="color:#02ACEE;">Change Password</a>
			</h1>
			</div>
        </div>
		<!-- ####################################################################################################### -->

        <!-- ####################################################################################################### -->
   <div class="wrapper1 col5">
   <?php include "footer.php" ?>
   </div>
   </div>
    </body>
</html>
<?php
                } else {

                    header("location:logout.php");
                }
?>