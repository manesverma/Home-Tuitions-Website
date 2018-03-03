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
                    <?php include "tea.php" ?>
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
                <div style="width: 1000px; height: 550px; overflow: auto;">
                    <tr>
                        <td>
                            <h1>Attendance LIst</h1>
                        </td>
                    </tr>
                    <form action="AttendanceNotification1.php"  method="post">
                        <table width="70%"  style="height: 450px; overflow: auto;">

                            <tr>
                                <td>
                                    <fieldset>
                                        <legend class="tabHeading">Attendance Information</legend>
                                        <table cellpadding="5" cellspacing="5">
                                            <tr>
                                                <td class="text"><span style="color: red;"></span>&nbsp;Student&nbsp;Name:</td>

                                                <td class="text-1">  <select name="category" id="category"  style="width: 180px">
                                                        <option value="Select"> - - - - - - - - - Select- - - - - - - - - </option>
                                                        <?php
                                                        include('connection/dbconfig.php');

                                                        $sql = "SELECT * FROM signup";
                                                        $res = mysql_query($sql);
                                                        while ($row1 = mysql_fetch_array($res)) {
                                                            echo '<option value ="' . $row1['uname'] . '">' . $row1['uname'] . '</option>';
                                                        }
                                                        ?>
                                                    </select></td>
                                            </tr>
                           
                                            <tr>
                                                <td class="text"><span style="color: red;"></span>&nbsp;Course&nbsp;Name:</td>
                                                <td class="text">
                                                    <select  id="course"name="course" style="width: 180px">
                                                        <option value="Select"> - - - - - - - - - Select- - - - - - - - - </option>
                                                        <option value="BCA">BCA</option>
                                                        <option value="MCA">MCA</option>
                                                    </select>
                                                </td>
                                            


                                            </tr>
                                            <tr>
                                                    <td class="text">Semester&nbsp;:</td>
                                                <td class="text">
                                                    <select  id="semester"name="semester" >
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
                            <td valign="top">Their Review:</td>
                            <td>
                                <textarea id="textmessage" name="textmessage" style="width: 550px;height: 250px;" class="login"></textarea>
                            </td>
                        </tr>

                                        </table>
                                    </fieldset>
                                </td>
                            </tr>


                            <tr>
                                <td align="center" colspan="2" >
                                    <input type="submit" value="Submit" onclick="return valid();"/>
                                    <input type= "reset" value="Reset">
                                </td>
                            </tr>


                        </table>
                    </form>
                </div>
                <br class="clear" />
            </div>
        </div>
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