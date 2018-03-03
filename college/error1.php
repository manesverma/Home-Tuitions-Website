
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
                <div><a href="#"><img src="images/demo/submit.jpg" height="300px;" width="960px;" alt="" /></a>

                </div>
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col3">
            <div id="homecontent">
                <form id="frm" action="sourcecode/registration.php" method="post">
                    <table width="960" cellspacing="5" cellpadding="5" align="center" bgcolor="white" height="300" >
                        <tr>
                            <td align="center"class="head">
                             Your Data was not Submitted!!!!
                            </td>
                        </tr>


                    </table>
                </form>
                <br class="clear" />
            </div>
        </div><div class="wrapper1 col5">
   <?php include "footer.php" ?>
   </div>
	</div>
   </body>
</html>