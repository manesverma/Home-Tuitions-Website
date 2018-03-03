<?php
header("Pragma: no-cache");
header("Cache: no-cahce");
session_start();
$UNAME = null;
$UNAME = $_SESSION["TEA"];
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
                <div><a href="#"><img src="images/demo/attendance.jpg" height="300px;" width="960px;" alt="" /></a>

                </div>
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col3">
            <div id="homecontent">
                  <table cellspacing="3">
                        <tr class="white-font">
                            <td align="center">
                                &nbsp;Student&nbsp;Name
                            </td>
                            <td align="center">
                                &nbsp;Status
                            </td>
                            <td align="center">
                                &nbsp;Course&nbsp;
                            </td>
                            <td align="center">
                                &nbsp;Semester
                            </td>
                              <td align="center">
                                &nbsp;Date
                            </td>
                            <td align="center">
                                &nbsp;Teacher&nbsp;Name
                            </td>
                        </tr>
                        <?php
                        include('connection/dbconfig.php');
						$name = $_POST['users'];
                        $result = mysql_query("select * from attandance where sname = '$name'");
                        while ($row = mysql_fetch_array($result)) {
                        ?>

                            <tr bgcolor="wheat">

                                <td align="center"><?php echo $row ['sname']; ?></td>
                                <td align="center"><?php echo $row ['pstatus']; ?></td>


                                <td align="center"><?php echo $row ['subject']; ?></td>
                                <td  align="center"><?php echo $row ['batch']; ?></td>
                                     <td  align="center"><?php echo $row ['date']; ?></td>
                                <td align="center"><?php echo $row ['tname']; ?></td>

                            </tr>
                        <?php
                        }
                        ?>

                    </table>
                        <br class="clear" />
                    </div>
                </div>
                <!-- ####################################################################################################### -->

                <!-- ####################################################################################################### -->
             <div class="wrapper1 col5>
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