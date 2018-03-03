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
                <div><a href="#"><img src="images/demo/admin.jpg" height="300px;" width="960px;" alt="" /></a>

                </div>
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col3">
            <div id="homecontent">
                 <form action="changepasswordteacher1.php" method="post">
                                    <table cellpadding="5" cellspacing="5" border="0" class="table_data">
                                        <tr>
                                            <td class="heading" colspan="2"><p>Change Password<p></td>
                                        </tr>
         
                                        <tr>
                                            <td >Old Password:</td>
                                            <td><input type="password"  id="txtoldpwd" name="txtoldpwd" style="width: 250px; height: 25px;" onblur="oldPassword(this.value);"></td>
                                        </tr>
                                        <tr>
                                            <td >New Password:</td>
                                            <td><input type="password"  id="txtnewpwd" name="txtnewpwd" style="width: 250px; height: 25px;"></td>
                                        </tr>
                                        <tr>
                                            <td >Confirm Password:</td>
                                            <td><input type="password"  id="txtconpwd" name="txtconpwd" style="width: 250px; height: 25px;"></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" align="center"><input type="submit" name="btnchangenow" id="btnchangenow" class="button" value="Change Now" onclick="return validate();"/></td>
                                        </tr>

                                    </table>
                                </form>
                        <br class="clear" />
                    </div>
                </div><br><br>
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