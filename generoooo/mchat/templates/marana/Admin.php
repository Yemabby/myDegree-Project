<?php
$con=mysqli_connect("localhost","root","","maranathadb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM stdform");

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Address</th>
<th>Mobile_No</th>
<th>Email_Address</th>
<th>Gender</th>
<th>Age</th>
<th>City</th>
<th>Nationality</th>
<th>Pin_code</th>
<th>Qualification</th>
<th>Select_course</th>
<th>Query</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Address'] . "</td>";
  echo "<td>" . $row['Mobile_No'] . "</td>";
  echo "<td>" . $row['Email_Address'] . "</td>";
  echo "<td>" . $row['Gender'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "<td>" . $row['City'] . "</td>";
  echo "<td>" . $row['Nationality'] . "</td>";
  echo "<td>" . $row['Pin_Code'] . "</td>";
  echo "<td>" . $row['Qualification'] . "</td>";
  echo "<td>" . $row['Select_Course'] . "</td>";
  echo "<td>" . $row['Query'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?> 