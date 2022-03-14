<?php
$con=mysqli_connect("localhost","root","","maranathadb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO stdform (Name, Address, Mobile_No, Email_Address, Gender, Age, City, Nationality, Pin_Code, Qualification, Select_Course, Query)
VALUES('$_POST[sname]','$_POST[addr]','$_POST[mob]','$_POST[eaddress]','$_POST[pop]','$_POST[age]','$_POST[city]','$_POST[country]','$_POST[pcode]','$_POST[qua]','$_POST[course]','$_POST[query]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }



mysqli_close($con);


?>
<html>
<body>
<h1>Thank You For Registered With us! We Will Get Back To You Shortly</h1>
<H1>Your Filled Information is</H1>
Name <?php echo $_POST["sname"]; ?><br>
Address <?php echo $_POST["addr"]; ?><br>
Mobile_No<?php echo $_POST["mob"]; ?><br 
Email_Address <?php echo $_POST["eaddress"]; ?><br>
Gender <?php echo $_POST["pop"]; ?><br>
Age <?php echo $_POST["age"]; ?><br>
City <?php echo $_POST["city"]; ?><br>
Nationality <?php echo $_POST["country"]; ?><br>
Pin_Code <?php echo $_POST["pcode"]; ?><br>
Qualification<?php echo $_POST["qua"]; ?><br>
Select_Course <?php echo $_POST["course"]; ?>
Query <?php echo $_POST["query"]; ?>
<br>
<br>
<br>
<br>
<a href="http://localhost/Minstitute/web/marana.html">Go to home Page</a>
</body>
</html>

