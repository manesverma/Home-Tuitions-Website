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
        $query2 = "delete from teacher where sid ='$uid'";
        mysql_query($query2);
        header("location:TeacherList.php");
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
            <script type="text/javascript">
                function contact(i)
                {
                    if(i.value.length>0)
                    {
                        i.value = i.value.replace(/[^\d]+/g, '');

                    }
                }
                function CheckForAlphabets(elem)
                {
                    var alphaExp = /^[a-z A-Z]+$/;
                    if(elem.value.match(alphaExp)){
                        return true;
                    }else{
                        alert("give alphabatic name ");
                        return false;
                    }
                }
                function mob()
                {
                    var rl=document.getElementById("number").value;
                    if(rl.toString().length<10)
                    {
                        alert("Contact No. should be of ten digits");
                        return false;
                    }

                }
            </script>
            <script type="text/javascript">
                function valid() {
                    //alert('calling');
                    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                    // var address = document.forms[form_id].elements[txtemail_id].value;
                    var address = document.getElementById('txtemail').value;
                    if(reg.test(address) == false) {
                        alert('Invalid Email Address');
                        return false;
                    }
                }
            </script>
            <script type="text/javascript">

                function pin()
                {
                    var rl=document.getElementById("txtpwd").value;
                    if(rl.toString().length<6)
                    {
                        alert("Pin Number should be of Six digits");
                        return false;
                    }

                }

            </script>
            <script type="text/javascript">



                function valid(){

                    if(document.getElementById('uname').value == ""){
                        alert('User Name Field Cannot be Blank Left !!');
                        return false;
                    }

                    if(document.getElementById('txtname').value == ""){
                        alert('First Name Field Cannot be Blank Left !!');
                        return false;
                    }
                    if(document.getElementById('cmbgender').value == ""){
                        alert('Gender Field Cannot be Blank Left !!');
                        return false;
                    }
                    if(document.getElementById('txtdb').value == ""){
                        alert('Date of Birth Field Cannot be Blank Left !!');
                        return false;
                    }

                    if(document.getElementById('number').value == ""){
                        alert('Number Field Cannot be Blank Left !!');
                        return false;
                    }
                    if(document.getElementById('txtemail').value == ""){
                        alert('Email Field Cannot be Blank Left !!');
                        return false;
                    }
                }

                function validatepassword(){

                    var a = document.getElementById('pwd').value;
                    var b = document.getElementById('cpwd').value;
                    if(a != b){
                        alert('Confirm Password Does Not Matched !!');
                        return false;
                    }

                }
            </script>
            <script src="scw.js" type="text/javascript"></script>
        </head>
        <body><div class="pra1">
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
                <div><a href="#"><img src="images/demo/teacher.jpg" height="300px;" width="960px;" alt="" /></a>

                </div>
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col3">
            <div id="homecontent">
                <div style="width: auto; height: auto; overflow: auto;">
                            <p>Teacher LIst</p>
         
                    <table cellspacing="3">


                        <tr class="white-font">
                             <td align="center">
                                &nbsp;Delete&nbsp;
                            </td>
                               <td align="center">
                                &nbsp;Update&nbsp;
                            </td>
                            <td align="center">
                                &nbsp;Student&nbsp;Id
                            </td>
                            <td align="center">
                                &nbsp;Name
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
                        $result = mysql_query("select * from teacher");

                        while ($row = mysql_fetch_array($result)) {
                        ?>

                            <tr bgcolor="wheat">
          <td><a href="TeacherList.php?uid=<?php echo $row ['sid']; ?>" class="leftlink">Delete</a></td>
  <td><a href="MyAccountTeacher1.php?uid1=<?php echo $row ['uname']; ?>" class="leftlink">Update</a></td>
                                <td align="center"><?php echo $row ['sid']; ?></td>
                                <td align="center"><?php echo $row ['uname']; ?></td>
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