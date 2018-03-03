<?php
header("Pragma: no-cache");
header("Cache: no-cahce");
session_start();
$UNAME = null;
$UNAME = $_SESSION["ADMIN"];
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
        <body><div class="pra">
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
                <div><a href="#"><img src="images/demo/time.jpg" height="300px;" width="960px;" alt="" /></a>

                </div>
            </div>
        </div>
        <!-- ####################################################################################################### -->
		<div class="wrapper1 col3">
			<div id="homecontent"  style="width:1200px;">
				<div style="width: auto; height: auto; overflow: auto;">
				<form method="post">
					<table border="3" cellpadding="10px" cellspacing="10px" class="table_data">
						<tr>
							<td>
							</td>
							<td>
								<h4 align="center">10:00 - 11:00</h4>
							</td>
							<td>
								<h4 align="center">11:00 - 12:00</h4>
							</td>
							<td>
								<h4 align="center">12:00 - 1:00</h4>
							</td>
							<td>
								<h4 align="center">1:00 - 2:00</h4>
							</td>
							<td>
								<h4 align="center">2:00 - 3:00</h4>
							</td>
							<td>
								<h4 align="center">3:00 - 4:00</h4>
							</td>
							<td>
								<h4 align="center">4:00 - 5:00</h4>
							</td>
							<td>
								<h4 align="center">5:00 - 6:00</h4>
							</td>
							<td>
								<h4 align="center">6:00 - 7:00</h4>
							</td>
							<td>
								<h4 align="center">7:00 - 8:00</h4>
							</td>
							<td>
							</td>
						</tr>
						
						<tr>
							<td>
								<h3>Monday</h3>
							</td>
							<td>
								<input type="text" name="m10to11" value="-"> 
							</td>
							<td>
								<input type="text" name="m11to12" value="-">
							</td>
							<td>
								<input type="text" name="m12to1" value="-"> 
							</td>
							<td>
								<input type="text" name="m1to2" value="-">
							</td>
							<td>
								<input type="text" name="m2to3" value="-"> 
							</td>
							<td>
								<input type="text" name="m3to4" value="-">
							</td>
							<td>
								<input type="text" name="m4to5" value="-"> 
							</td>
							<td>
								<input type="text" name="m5to6" value="-">
							</td>
							<td>
								<input type="text" name="m6to7" value="-"> 
							</td>
							<td>
								<input type="text" name="m7to8" value="-">
							</td>
							<td>
								<button type="submit" value="monday" name="monday">Update</button>
								<?php
									if(isset($_POST['monday'])) {
										$query = "update student_timetable set 10to11='$_POST[m10to11]', 11to12='$_POST[m11to12]', 12to1='$_POST[m12to1]', 1to2='$_POST[m1to2]', 2to3='$_POST[m2to3]', 3to4='$_POST[m3to4]', 4to5='$_POST[m4to5]', 5to6='$_POST[m5to6]', 6to7='$_POST[m6to7]', 7to8='$_POST[m7to8]' where day = 1 ";
										if(mysql_query($query))
											echo "ho gaya";
										else
											echo "nahi hua";
									}
								?>
							</td>
						</tr>
						<tr>
							<td>
								<h3>Tuesday</h3>
							</td>
							<td>
								<input type="text" name="t10to11" value="-"> 
							</td>
							<td>
								<input type="text" name="t11to12" value="-">
							</td>
							<td>
								<input type="text" name="t12to1" value="-"> 
							</td>
							<td>
								<input type="text" name="t1to2" value="-">
							</td>
							<td>
								<input type="text" name="t2to3" value="-"> 
							</td>
							<td>
								<input type="text" name="t3to4" value="-">
							</td>
							<td>
								<input type="text" name="t4to5" value="-"> 
							</td>
							<td>
								<input type="text" name="t5to6" value="-">
							</td>
							<td>
								<input type="text" name="t6to7" value="-"> 
							</td>
							<td>
								<input type="text" name="t7to8" value="-">
							</td>
							<td>
								<button type="submit" value="tuesday" name="tuesday">Update</button>
								<?php
									if(isset($_POST['tuesday'])) {
										$query = "update student_timetable set 10to11='$_POST[t10to11]', 11to12='$_POST[t11to12]', 12to1='$_POST[t12to1]', 1to2='$_POST[t1to2]', 2to3='$_POST[t2to3]', 3to4='$_POST[t3to4]', 4to5='$_POST[t4to5]', 5to6='$_POST[t5to6]', 6to7='$_POST[t6to7]', 7to8='$_POST[t7to8]' where day = 2 ";
										if(mysql_query($query))
											echo "ho gaya";
										else
											echo "nahi hua";
									}
								?>
							</td>
						</tr>
						<tr>
							<td>
								<h3>Wednesday</h3>
							</td>
							
							<td>
								<input type="text" name="w10to11" value="-"> 
							</td>
							<td>
								<input type="text" name="w11to12" value="-">
							</td>
							<td>
								<input type="text" name="w12to1" value="-"> 
							</td>
							<td>
								<input type="text" name="w1to2" value="-">
							</td>
							<td>
								<input type="text" name="w2to3" value="-"> 
							</td>
							<td>
								<input type="text" name="w3to4" value="-">
							</td>
							<td>
								<input type="text" name="w4to5" value="-"> 
							</td>
							<td>
								<input type="text" name="w5to6" value="-">
							</td>
							<td>
								<input type="text" name="w6to7" value="-"> 
							</td>
							<td>
								<input type="text" name="w7to8" value="-">
							</td>
							<td>
								<button type="submit" value="monday" name="monday">Update</button>
								<?php
									if(isset($_POST['monday'])) {
										$query = "update student_timetable set 10to11='$_POST[w10to11]', 11to12='$_POST[w11to12]', 12to1='$_POST[w12to1]', 1to2='$_POST[w1to2]', 2to3='$_POST[w2to3]', 3to4='$_POST[w3to4]', 4to5='$_POST[w4to5]', 5to6='$_POST[w5to6]', 6to7='$_POST[w6to7]', 7to8='$_POST[w7to8]' where day = 3 ";
										if(mysql_query($query))
											echo "ho gaya";
										else
											echo "nahi hua";
									}
								?>
							</td>
						</tr>
						<tr>
							<td>
								<h3>Thursday</h3>
							</td>
							<td>
								<input type="text" name="th10to11" value="-"> 
							</td>
							<td>
								<input type="text" name="th11to12" value="-">
							</td>
							<td>
								<input type="text" name="th12to1" value="-"> 
							</td>
							<td>
								<input type="text" name="th1to2" value="-">
							</td>
							<td>
								<input type="text" name="th2to3" value="-"> 
							</td>
							<td>
								<input type="text" name="th3to4" value="-">
							</td>
							<td>
								<input type="text" name="th4to5" value="-"> 
							</td>
							<td>
								<input type="text" name="th5to6" value="-">
							</td>
							<td>
								<input type="text" name="th6to7" value="-"> 
							</td>
							<td>
								<input type="text" name="th7to8" value="-">
							</td>
							<td>
								<button type="submit" value="monday" name="monday">Update</button>
								<?php
									if(isset($_POST['monday'])) {
										$query = "update student_timetable set 10to11='$_POST[th10to11]', 11to12='$_POST[th11to12]', 12to1='$_POST[th12to1]', 1to2='$_POST[th1to2]', 2to3='$_POST[th2to3]', 3to4='$_POST[th3to4]', 4to5='$_POST[th4to5]', 5to6='$_POST[th5to6]', 6to7='$_POST[th6to7]', 7to8='$_POST[th7to8]' where day = 4 ";
										if(mysql_query($query))
											echo "ho gaya";
										else
											echo "nahi hua";
									}
								?>
							</td>
						</tr>
						<tr>
							<td>
								<h3>Friday</h3>
							</td>
							<td>
								<input type="text" name="f10to11" value="-"> 
							</td>
							<td>
								<input type="text" name="f11to12" value="-">
							</td>
							<td>
								<input type="text" name="f12to1" value="-"> 
							</td>
							<td>
								<input type="text" name="f1to2" value="-">
							</td>
							<td>
								<input type="text" name="f2to3" value="-"> 
							</td>
							<td>
								<input type="text" name="f3to4" value="-">
							</td>
							<td>
								<input type="text" name="f4to5" value="-"> 
							</td>
							<td>
								<input type="text" name="f5to6" value="-">
							</td>
							<td>
								<input type="text" name="f6to7" value="-"> 
							</td>
							<td>
								<input type="text" name="f7to8" value="-">
							</td>
							<td>
								<button type="submit" value="monday" name="monday">Update</button>
								<?php
									if(isset($_POST['monday'])) {
										$query = "update student_timetable set 10to11='$_POST[f10to11]', 11to12='$_POST[f11to12]', 12to1='$_POST[f12to1]', 1to2='$_POST[f1to2]', 2to3='$_POST[f2to3]', 3to4='$_POST[f3to4]', 4to5='$_POST[f4to5]', 5to6='$_POST[f5to6]', 6to7='$_POST[f6to7]', 7to8='$_POST[f7to8]' where day = 5 ";
										if(mysql_query($query))
											echo "ho gaya";
										else
											echo "nahi hua";
									}
								?>
							</td>
						</tr>
						<tr>
							<td>
								<h3>Saturday</h3>
							</td>
							<td>
								<input type="text" name="s10to11" value="-"> 
							</td>
							<td>
								<input type="text" name="s11to12" value="-">
							</td>
							<td>
								<input type="text" name="s12to1" value="-"> 
							</td>
							<td>
								<input type="text" name="s1to2" value="-">
							</td>
							<td>
								<input type="text" name="s2to3" value="-"> 
							</td>
							<td>
								<input type="text" name="s3to4" value="-">
							</td>
							<td>
								<input type="text" name="s4to5" value="-"> 
							</td>
							<td>
								<input type="text" name="s5to6" value="-">
							</td>
							<td>
								<input type="text" name="s6to7" value="-"> 
							</td>
							<td>
								<input type="text" name="s7to8" value="-">
							</td>
							<td>
								<button type="submit" value="monday" name="monday">Update</button>
								<?php
									if(isset($_POST['monday'])) {
										$query = "update student_timetable set 10to11='$_POST[s10to11]', 11to12='$_POST[s11to12]', 12to1='$_POST[s12to1]', 1to2='$_POST[s1to2]', 2to3='$_POST[s2to3]', 3to4='$_POST[s3to4]', 4to5='$_POST[s4to5]', 5to6='$_POST[s5to6]', 6to7='$_POST[s6to7]', 7to8='$_POST[s7to8]' where day = 6 ";
										if(mysql_query($query))
											echo "ho gaya";
										else
											echo "nahi hua";
									}
								?>
							</td>
						</tr>
					
					</table>
				</form>
			</div>	
		</div>
		</div>
			<br class="clear" />
                <!-- ####################################################################################################### -->

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