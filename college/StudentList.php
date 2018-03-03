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
                <div><a href="#"><img src="images/demo/student.jpg" height="300px;" width="960px;" alt="" /></a>

                </div>
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col3">
            <div id="homecontent">
                <div style="width: auto; height: auto; overflow: auto;">
                    
                            <p>Student LIst</p>
                    
                    <table cellspacing="3">


                        <tr class="white-font">
                             <td align="center">
                                &nbsp;Delete&nbsp;
                            </td>
                            <td align="center">
                                &nbsp;Student&nbsp;Id
                            </td>
                            <td align="center">
                                &nbsp;Name
                            </td>


                             <td align="center">
                                &nbsp;Course&nbsp;
                            </td>
                            
                            <td align="center">
                                &nbsp;Teacher&nbsp;Name
                            </td>
                              <td align="center">
                                &nbsp;First&nbsp;Name
                            </td>
                            <td align="center">
                                &nbsp;Last&nbsp;Name
                            </td>


                            <td align="center">
                                &nbsp;Gender
                            </td>
                            <td align="center">
                                &nbsp;DOB
                            </td>
                            <td align="center">
                                &nbsp;Mobile
                            </td>
                            <td align="center">
                                &nbsp;Email
                            </td>
                            <td align="center">
                                &nbsp;Address
                            </td>
                            <td align="center">
                                &nbsp; City
                            </td>
                            <td align="center">
                                &nbsp;Pin
                            </td>
                            <td align="center">
                                &nbsp;State
                            </td>
                            <td align="center">
                                &nbsp;Country
                            </td>




                        </tr>
                        <?php
                        include('connection/dbconfig.php');
                        $result = mysql_query("select * from signup");

                        while ($row = mysql_fetch_array($result)) {
                        ?>

                            <tr bgcolor="wheat">
								<td><a href="StudentList.php?uid=<?php echo $row ['sid']; ?>" class="leftlink">Delete</a></td>
								<td><a href="MyAccountStudent1.php?uid1=<?php echo $row ['uname']; ?>" class="leftlink">Update</a></td>

                                <td align="center"><?php echo $row ['sid']; ?></td>
                                <td align="center"><?php echo $row ['uname']; ?></td>


                                
                                
                                <td align="center"><?php echo $row ['tname']; ?></td>


                                <td  align="center"><?php echo $row ['fname']; ?></td>
                                <td align="center"><?php echo $row ['lname']; ?></td>

                                <td align="center"><?php echo $row ['gender']; ?></td>
								<?php $dob=$row['dd']."/".$row['mm']."/".$row['yy']; ?>
                                <td align="center"><?php echo $dob; ?></td>
                                <td  align="center"><?php echo $row ['mob']; ?></td>
                                <td align="center"><?php echo $row ['email']; ?></td>

                                <td align="center"><?php echo $row ['address']; ?></td>
                                <td align="center"><?php echo $row ['city']; ?></td>
                                <td  align="center"><?php echo $row ['pin']; ?></td>
                                <td align="center"><?php echo $row ['state']; ?></td>
                                <td align="center"><?php echo $row ['country']; ?></td>


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
	</div>
	</body>
</html>
<?php
                    } else {

                        header("location:logout.php");
                    }
?>