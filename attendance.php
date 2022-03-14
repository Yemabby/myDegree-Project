<?php
// Update present values
if (isset($_POST['submit'])) 
{
    // Get a list of student ids to check
    $idsResult = mysql_query("SELECT regno from studentreg");

    while($idRow = mysql_fetch_array($idsResult))
    {
       // if the textbox for this student is set 
       if(isset($_POST['present'.$idRow['regno']]) && !empty($_POST['present'.$idRow['regno']]))
       {
          // Clean the user input, then escape and update the database
          $cleanedPresent = htmlspecialchars(strip_tags($_POST['present'.$idRow['regno']]));
          $sql = "UPDATE course_attendance SET present='".mysql_real_escape_string($present)."' WHERE course_id='101' AND week_id='2' AND regno=".$idRow['regno'];
          $result = mysql_query($sql);

          if($result){
            echo "Successfully logged the attendance for ID ".$idRow['regno'];
          }
          else {
            echo "ERROR updating on ID ".$idRow['regno'];
          }
       }
    }
}

$test3= "SELECT * FROM attendance, studentreg, courses WHERE course_attendance.course_id=courses.course_id AND course_attendance.week_id=attendance.week_number_id AND course_attendance.student_id= students.student_id AND courses.course_id='101' AND attendance.week_number_id='2' ";
$result = mysql_query($test3)  or die(mysql_error());
?>
<form name='Biology_lecture11.php' method='post'>
</br>
<table border='1' align='center'>
  <tr>
    <th><strong>Registration No</strong></th>
    <th><strong>Name </strong></th>
    <th><strong>Username</strong></th>
    <th><strong>Present</strong></th>
  </tr>
<?php
while($rows=mysql_fetch_array($result)){
  echo "<tr><td width='100' align='center'>" .$rows['regno'].
  "</td><td width='120' align='center'>" .$rows['name'].
  "</td><td width='120' align='center'>" .$rows['uname'].
  "</td><td><input type='text' name='present".$rows['regno']."' value=" .$rows['present'] . ">";
}
?>
</table>
<input type='submit' name='Submit' value='Submit'>
</form>










<?php
if (isset($_POST['submit'])) {

    $present = $_POST['present'];

    $sql="UPDATE course_attendance SET present='$present' WHERE course_id='101' AND week_id='2' ";
    $result=mysql_query($sql);

    if($result) {
        echo "Successfully logged the attendance";
    }
    else {
      echo"ERROR";
    }

}

?>

<form name='Biology_lecture11.php' method='post'>
<table border="1" align="center">
<tr>
    <th><strong>Student ID</strong></th>
    <th><strong>First Name </strong></th>
    <th><strong>Last Name</strong></th>
    <th><strong>Present</strong></th>
</tr>

<?php

$test3= "SELECT * FROM course_attendance, students, courses, attendance WHERE course_attendance.course_id=courses.course_id AND course_attendance.week_id=attendance.week_number_id AND course_attendance.student_id= students.student_id AND courses.course_id='101' AND attendance.week_number_id='2' ";
$result = mysql_query($test3)  or die(mysql_error());

while($rows=mysql_fetch_array($result)) {

echo "<tr><td width='100' align='center'>" .$rows['student_id']."</td>
      <td width='120' align='center'>" .$rows['fname']."</td>
      <td width='120' align='center'>" .$rows['lname']."</td>
      <td><input type='text' name='present' value=" .$rows['present']."></td></tr>";
}
echo "</table>";
?>

<input type='submit' name='Submit' value='Submit'  >
</form>