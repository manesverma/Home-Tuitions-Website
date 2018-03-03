<?php
header("Pragma: no-cache");
header("Cache: no-cahce");
session_start();
$UNAME = null;
$UNAME = $_SESSION["ADMIN"];
if ($UNAME != null) {

    ob_start();
    include('connection/dbconfig.php');
    if (isset($_GET['uid'])) {
        $uid = $_GET['uid'];
        echo $uid;
        $query2 = "delete from signup where sid ='$uid'";
        mysql_query($query2);
        header("location:StudentList.php");
    }
    $MSG = null;
    $MSG = $_SESSION['MSG'];
?>
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <title>CMagic Academy</title>
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

            <script src="scw.js" type="text/javascript"></script>
        </head>
        <body><div class="pra1">
            <div class="wrapper1 col1">
                <div id="header">
                     <?php include "headersub.php" ?>
                    <div id="topnav">
                    <?php include "admin.php" ?>
                </div>
                <br class="clear" />
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col2">
            <div id="featured_slide">
                <div><a href="#"><img src="images/demo/subject.jpg" height="300px;" width="960px;" alt="" /></a>

                </div>
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col2">
            <div id="homecontent">
                <div style="width: auto; height: auto; overflow: auto;">
                
                    <tr>
                        <td>
                            <h1 align="center">
                                <a href="StudentList.php">Student List</a>
                            </h1>
                        </td>
                    </tr>
					<br>
                    <tr>
                        <td>
                            <h1 align="center">
                                <a href="TeacherList.php">Teacher List</a>
                            </h1>
                        </td>
                    </tr>
                  
                </div>
                <br class="clear" />
            </div>
        </div><br>
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