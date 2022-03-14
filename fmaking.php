<?php

$conn = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("maranatha");

$sql = "SELECT name,regno FROM studentreg WHERE course='Mvideo'";
$result = mysql_query($sql, $conn) or die(mysql_error());

while($row = mysql_fetch_assoc($result)){
  echo "Registration No:{$row['regno']}  <br> ".
     "Name : {$row['name']} <br> ".
     "--------------------------------<br>";
  print "<br /> \n";
} // end while

  ?>