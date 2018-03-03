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

            <script src="scw.js" type="text/javascript"></script>
        </head>
        <body><div class="pra3">
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
                <div><a href="#"><img src="images/demo/time.jpg" height="300px;" width="960px;" alt="" /></a>

                </div>
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col3">
            <div id="homecontent">
                <div style="width: auto; height: auto; overflow: auto;">
                    <tr>
                        <td align="center">
                            <h1>Time Table</h1>
                        </td>
                    </tr>


                    <table cellspacing="3">


                        <tr class="white-font">
                             <td align="center">
                                &nbsp;Day
                            </td>
                            <td align="center">
                                &nbsp;10:00-11:00
                            </td>
                            <td align="center">
                                &nbsp;11:00-12:00
                            </td>
                             <td align="center">
                                &nbsp;12:00-1:00
                            </td>
                            <td align="center">
                                &nbsp;1:00-2:00
                            </td>
                            <td align="center">
                                &nbsp;2:00-3:00
                            </td>
                              <td align="center">
                                &nbsp;3:00-4:00
                            </td>
                            <td align="center">
                                &nbsp;4:00-5:00
                            </td>
                            <td align="center">
                                &nbsp;5:00-6:00
                            </td>
                            <td align="center">
                                &nbsp;6:00-7:00
                            </td>
                            <td align="center">
                                &nbsp;7:00-8:00
                            </td>
                        </tr>
                        <?php
                        include('connection/dbconfig.php');
                        $result = mysql_query("select * from student_timetable");

                        while ($row = mysql_fetch_array($result)) {
                        ?>

                            <tr bgcolor="wheat">
								<?php 
									if($row['day']==1) 
										$row['day'] = "Monday";
									if($row['day']==2) 
										$row['day'] = "Tuesday";
									if($row['day']==3) 
										$row['day'] = "Wednesday";
									if($row['day']==4) 
										$row['day'] = "Thursday";
									if($row['day']==5) 
										$row['day'] = "Friday";
									if($row['day']==6) 
										$row['day'] = "Saturday";
								?>
								<td align="left"><?php echo $row ['day']; ?></td>
                                <td align="center"><?php echo $row ['10to11']; ?></td>
                                <td align="center"><?php echo $row ['11to12']; ?></td>
                                <td align="center"><?php echo $row ['12to1']; ?></td>
                                <td  align="center"><?php echo $row ['1to2']; ?></td>
                                <td align="center"><?php echo $row ['2to3']; ?></td>
                                <td  align="center"><?php echo $row ['3to4']; ?></td>
                                <td align="center"><?php echo $row ['4to5']; ?></td>
								<td align="center"><?php echo $row ['5to6']; ?></td>
                                <td align="center"><?php echo $row ['6to7']; ?></td>
                                <td  align="center"><?php echo $row ['7to8']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>

                    </table>
                </div>
                <br class="clear" />
            </div>
        </div>
        <!-- ####################################################################################################### -->
      <br><br>
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