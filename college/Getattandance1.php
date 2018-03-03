<?php
$q=$_GET["q"];

include_once "connection/dbconfig.php";

$UNAME = $_SESSION["TEA"];
$sql="SELECT * FROM signup WHERE semester = '".$q."'";

$result = mysql_query($sql);



while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
    echo "<td>" . $row['sname'] . "</td>";
  echo "<td>" . $row['pstatus'] . "</td>";
  echo "<td>" . $row['course'] . "</td>";
  echo "<td>" . $row['sem'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

?>
