<?php
$con=mysqli_connect("localhost","root","","maranathadb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO stdatt (Student_Name, Month, 1)
VALUES('$_POST[student_name]','$_POST[month]','$_POST[day]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }



mysqli_close($con);


?>