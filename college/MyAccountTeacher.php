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
                <div><a href="#"><img src="images/demo/teacher.jpg" height="300px;" width="960px;" alt="" /></a>

                </div>
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper1 col2">
            <div id="homecontent">
                <form action="profilesettingteacher.php" method="post">
                            <p>Account Setting</p>
                        <?php
                                $query = "select * from teacher where uname = '$UNAME'";
                                $result = mysql_query($query);
                                while ($row = mysql_fetch_array($result)) {
                        ?>
                                   <fieldset>
                                                <legend class="tabHeading">Personal Information</legend>
                                                <table cellpadding="5" cellspacing="5" class="table_data">
                                                    <tr>
                                                        <td>Username:</td>
                                                        <td><input type="text" id="txt_name" name="txt_name" value="<?php echo $row ['uname']; ?>" class="login"></td>
														<td></td>
														<td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text">First&nbsp;Name:</td>
                                                        <td><input type="text" size="25"  id="txtname" name="txtname" value="<?php echo $row ['fname']; ?>" ></td>
                                                        <td class="text">Last&nbsp;Name&nbsp;:</td>
                                                        <td> <input type= text size="25"  id="txtlname" name="txtlname" value="<?php echo $row ['lname']; ?>" ></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text">
                                                            Gender
                                                        </td>
                                                        <td class="text">
                                                            <select  id="cmbgender"name="cmbgender" style="width: 180px">
                                                                <option value="Select"> - - - - - - - - - Select- - - - - - - - - </option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="<?php echo $row ['gender']; ?>" selected><?php echo $row ['gender']; ?></option>

                                                            </select>
                                                        </td>
                                                        <td class="text">Date&nbsp;of&nbsp;Birth</td>
                                                        <td> 
															<select name="dd">
															<option value="<?php echo $row ['dd']; ?>" selected><?php echo $row ['dd']; ?></option>
													<option value="dd">dd</option>
													<option value="01">01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
													<option value="07">07</option>
													<option value="08">08</option>
													<option value="09">09</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
													<option value="25">25</option>
													<option value="26">26</option>
													<option value="27">27</option>
													<option value="28">28</option>
													<option value="29">29</option>
													<option value="30">30</option>
													<option value="31">31</option>
												</select>
															<select name="mm">
															<option value="<?php echo $row ['mm']; ?>" selected><?php echo $row ['mm']; ?></option>
													<option value="mm">mm</option>
													<option value="01">01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
													<option value="07">07</option>
													<option value="08">08</option>
													<option value="09">09</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
												</select>
															<select name="yy">
															<option value="<?php echo $row ['dd']; ?>" selected><?php echo $row ['dd']; ?></option>
													<option value="yy">yy</option>
													<option value="1950">1950</option>
													<option value="1951">1951</option>
													<option value="1952">1952</option>
													<option value="1953">1953</option>
													<option value="1954">1954</option>
													<option value="1955">1955</option>
													<option value="1956">1956</option>
													<option value="1957">1957</option>
													<option value="1958">1958</option>
													<option value="1959">1959</option>
													<option value="1960">1960</option>
													<option value="1961">1961</option>
													<option value="1962">1962</option>
													<option value="1963">1963</option>
													<option value="1964">1964</option>
													<option value="1965">1965</option>
													<option value="1966">1966</option>
													<option value="1967">1967</option>
													<option value="1968">1968</option>
													<option value="1969">1969</option>
													<option value="1970">1970</option>
													<option value="1971">1971</option>
													<option value="1972">1972</option>
													<option value="1973">1973</option>
													<option value="1974">1974</option>
													<option value="1975">1975</option>
													<option value="1976">1976</option>
													<option value="1977">1977</option>
													<option value="1978">1978</option>
													<option value="1979">1979</option>
													<option value="1980">1980</option>
													<option value="1981">1981</option>
													<option value="1982">1982</option>
													<option value="1983">1983</option>
													<option value="1984">1984</option>
													<option value="1985">1985</option>
													<option value="1986">1986</option>
													<option value="1987">1987</option>
													<option value="1988">1988</option>
													<option value="1989">1989</option>
													<option value="1990">1990</option>
													<option value="1991">1991</option>
													<option value="1992">1992</option>
													<option value="1993">1993</option>
													<option value="1994">1994</option>
													<option value="1995">1995</option>
													<option value="1996">1996</option>
													<option value="1997">1997</option>
													<option value="1998">1998</option>
													<option value="1999">1999</option>
													<option value="2000">2000</option>
													<option value="2001">2001</option>
													<option value="2002">2002</option>
													<option value="2003">2003</option>
													<option value="2004">2004</option>
													<option value="2005">2005</option>
													<option value="2006">2006</option>
													<option value="2007">2007</option>
													<option value="2008">2008</option>
													<option value="2009">2009</option>
													<option value="2010">2010</option>
													<option value="2011">2011</option>
													<option value="2012">2012</option>
													<option value="2013">2013</option>
													<option value="2014">2014</option>
													<option value="2015">2015</option>
												</select>
														</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text">Contact&nbsp;Number:</td>
                                                        <td> <input type= text size="25"  id="number" name="number" onkeyup="contact(this)" onblur="mob()"value="<?php echo $row ['mob']; ?>"></td>
                                                        <td class="text">Email&nbsp;Id:</td>
                                                        <td><input type="text" size="25" id="txtemail" name="txtemail"  onblur="valid()" value="<?php echo $row ['email']; ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text">Address:</td>
                                                        <td><input type= text size="25"  id="txtaddress" name="txtaddress" value="<?php echo $row ['address']; ?>"></td>

                                                        <td class="text">City:</td>
                                                        <td>
                                                            <select id="cmbcity"   name="cmbcity" style="width: 180px;">
                                                                <option value="Select"> Select </option>
                                                                <option value="Delhi">  Delhi </option>
                                                                <option value="Gurgoan"> Gurgoan </option>
                                                                <option value="Noida"> Noida </option>
                                                                <option value="<?php echo $row ['city']; ?>" selected><?php echo $row ['city']; ?></option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text">Pin&nbsp;Code:</td>
                                                        <td> <input type= text size="25"  id="txtpin" name="txtpin" onkeyup="contact(this)" onblur="pin()" value="<?php echo $row ['pin']; ?>"></td>
                                                        <td class="text">State:</td>
                                                        <td><input type= text size="25"  id="txtstate" name="txtstate" value="<?php echo $row ['state']; ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text">Country:</td>
                                                        <td>
                                                            <select  id="cmbcountry"name="cmbcountry" style="width:180px">
                                                                <option value="Select">- - - - Select - - - - </option>
                                                                <option value="America">America</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Africa">Africa</option>
                                                                <option value="Bangalore">Bangalore</option>
                                                                <option value="Bangkok">Bangkok</option>
                                                                <option value="India">India</option>
                                                                <option value="<?php echo $row ['country']; ?>" selected><?php echo $row ['country']; ?></option>

                                                            </select>
                                                        </td>
														<td></td>
														<td>
															<input type="submit" value="submit" name="submit">
														</td>
                                                    </tr>
                                                </table>
                                            </fieldset>
                                        </td>
                                    </tr>

                        <?php
                                }
                        ?>
                             

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