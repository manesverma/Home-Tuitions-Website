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
            <script type="text/javascript">
                function showUser(str)
                {
                    if (str=="")
                    {
                        document.getElementById("txtHint").innerHTML="";
                        return;
                    }
                    if (window.XMLHttpRequest)
                    {// code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp=new XMLHttpRequest();
                    }
                    else
                    {// code for IE6, IE5
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange=function()
                    {
                        if (xmlhttp.readyState==4 && xmlhttp.status==200)
                        {
                            document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET","Getattandance1.php?q="+str,true);
                    xmlhttp.send();
                }
            </script>
            <script src="scw.js" type="text/javascript"></script>
        </head>
        <body><div class="pra1">
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
                <div style="width: auto; height: auto; overflow: auto;">
                    <form action="Attendance1.php"  method="post">
                        <table style="height: auto; overflow: auto;" class="table_data">

                            <tr>
                                <td>
                                    <fieldset>
                                        <p>Attendance Information</p>
                                        <table cellpadding="5" cellspacing="5">

                                            <tr>
                                                <td class="text"><span style="color: red;"></span>&nbsp;Course&nbsp;Name:</td>
                                                <td class="text">
                                                    <select  id="course"name="course" style="width: 180px">
                                                        <option value="Select"> - - - - - - - - - Select- - - - - - - - - </option>
                                                        <option value="Physics">Physics</option>
                                                        <option value="Chemistry">Chemistry</option>
														<option value="Maths">Maths</option>
                                                    </select>
                                                </td>
                                                <?php
													$course = null;
													$course = $_POST['course'];
                                                ?>
                                                <td class="text"><span style="color: red;">*</span> Batch&nbsp;:</td>
                                                <td class="text">
                                                    <select  id="semester"name="semester" onchange="showUser(this.value)">
                                                        <option value="Select"> - - - - - - - - - Select- - - - - - - - - </option>
                                                        <option value="Batch-1">Batch-1</option>
                                                        <option value="Batch-2">Batch-2</option>
                                                        <option value="Batch-3">Batch-3</option>
                                                        <option value="Batch-4">Batch-4</option>
                                                        <option value="Batch-5">Batch-5</option>
                                                    </select>
                                                </td>
                                                
                                            </tr>
											<?php
													$sem = null;
													$sem = $_POST['semester'];
													echo "<td>" . $row['sem'] . "</td>";
                                                ?>
                                            <tr>
                                                <td class="text"><span style="color: red;"></span>&nbsp;Student&nbsp;Name:</td>
                                                <td><input type="text" size="25"  id="category" name="category" ></td>
                                                <td class="text"><span style="color: red;"></span>&nbsp;Status&nbsp;:</td>
                                                <td class="text">
                                                    <select  id="statuspa"name="statuspa" style="width: 180px">
                                                        <option value="Select"> - - - - - - - - - Select- - - - - - - - - </option>
                                                        <option value="P">P</option>
                                                        <option value="A">A</option>
                                                    </select>
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
        </div><br><br>
     <div class="wrapper1 col5">
	 <?php include "footer.php" ?>
    </div>
	</div></body>
</html>
<?php
                                                    } else {

                                                        header("location:logout.php");
                                                    }
?>