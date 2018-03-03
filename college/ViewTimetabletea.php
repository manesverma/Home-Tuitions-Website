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
				
				function cycleBackgrounds() {
    var index = 0;
 
    $imageEls = $('.pra .slide'); // Get the images to be cycled.
 
    setInterval(function () {
        // Get the next index.  If at end, restart to the beginning.
        index = index + 1 < $imageEls.length ? index + 1 : 0;
        
        // Show the next
        $imageEls.eq(index).addClass('show');
        
        // Hide the previous
        $imageEls.eq(index - 1).removeClass('show');
    }, 2000);
};
 
// Document Ready.
$(function () {
    cycleBackgrounds();
});
            </script>

            <script src="scw.js" type="text/javascript"></script>
			
        </head>
        <body>
		<!-- ####################################################################################################### -->
			<div class="pra">


		
		
		<!-- ####################################################################################################### -->
        
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
                <div><a href="#"><img src="images/demo/time.jpg" height="300px;" width="960px;" alt="" /></a>

                </div>
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col3">
            <div id="homecontent">
                <div style="width: auto; height: auto; overflow: auto;">
					<p>TIME TABLE</p>
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
                        $result = mysql_query("select * from teacher_timetable");

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
        </div><br><br>
        <!-- ####################################################################################################### -->

        <!-- ####################################################################################################### -->
    <div class="wrapper1 col5">
	<?php include "footer.php" ?>
    </div>
	
    <div class="slide show" style="background-image: url('images/book1.jpg'); "></div>
    <div class="slide" style="background-image: url('images/book2.jpg'); "></div>
    <div class="slide" style="background-image: url('images/book3.jpg'); "></div>
	</div>
	</body>
</html>
<?php
                    } else {

                        header("location:logout.php");
                    }
?>