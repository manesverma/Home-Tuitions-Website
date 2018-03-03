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
    <html xmlns="http://www.w3.org/1999/xhtml">
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
        <div class="wrapper col3">
            <div id="homecontent">
              <form  action="TimeTableStudent1.php" method="post" enctype="multipart/form-data">
                                        <table width="100%" align="center" style="margin-top: 10%" cellpadding="5" cellspacing="5">
                                            <tr>
                                                <td>
                                                    Course
                                                </td>

                                                <td>

                                                       <select  id="class"name="class" style="width: 180px">
                                                        <option value="Select"> - - - - - - - - - Select- - - - - - - - - </option>
                                                        <option value="BCA">BCA</option>
                                                        <option value="MCA">MCA</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    Semester
                                                </td>
                                                <td>
                                                    

                                                     <select  id="Sec"name="Sec" onchange="showUser(this.value)">
                                                        <option value="Select"> - - - - - - - - - Select- - - - - - - - - </option>
                                                        <option value="SEM-1">SEM-1</option>
                                                        <option value="SEM-2">SEM-2</option>
                                                        <option value="SEM-3">SEM-3</option>
                                                        <option value="SEM-4">SEM-4</option>
                                                        <option value="SEM-5">SEM-5</option>
                                                        <option value="SEM-6">SEM-6</option>
                                                        <option value="SEM-7">SEM-7</option>
                                                        <option value="SEM-8">SEM-8</option>
                                                    </select>
     </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    Date
                                                </td>
                                                <td>
                                                    <input type="text" name="Date" id="Date"  size="25"  readonly onclick="scwShow(this,event)" >
                                                </td>

                                                <td>Attached File:</td>
                                                <td><input type="file" id="attachedfile" name="attachedfile" size="62" class="login"></td>

                                            </tr>




                                            <tr>
                                                <td height="50px">

                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2" align="right">

                                                    <input type="submit" name="btnsend" id="btnsend" class="button" value="Submit">
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                        <br class="clear" />
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