<?php
// Update present values
if (isset($_POST['submit'])) 
{
    // Get a list of student ids to check
    $idsResult = mysql_query("SELECT regno from studentreg");

    $presentIds = array();
    $absentIds = array();
    while($idRow = mysql_fetch_array($idsResult))
    {
       // If the student's checkbox is checked, add it to the presentIds array.
       if(isset($_POST['present'.$idRow['regno']]))
       {
         $presentIds[] = $idRow['regno'];
       }
       else
       {
         $absentIds[] = $idRow['regno'];
       }
    }

      // Convert array to string for query
      $idsAsString = implode(",", $presentIds);

      // You can set present to whatever you want. I used 1. 
      $sql = "UPDATE course_attendance SET present='1' WHERE regno='14' AND week_id='2' AND student_id IN (".$idsAsString.")";
      $result = mysql_query($sql);

      if($result){
        echo "Successfully logged the attendance for IDs ".$idsAsString;
      }
      else {
        echo "ERROR updating on IDs ".$idsAsString;
      }


      // OPTIONAL: Mark absent students as '0' or whatever other value you want
      $absentIdsAsString = implode(",", $absentIds);
      // You can set present to whatever you want. I used 1. 
      $absentQuery = "UPDATE course_attendance SET present='0' WHERE regno='14' AND week_id='2' AND student_id IN (".$absentIdsAsString.")";
      $absentResult = mysql_query($absentQuery);

      if($absentResult){
        echo "Successfully logged absence for IDs ".$absentIdsAsString;
      }
      else {
        echo "ERROR updating absence on IDs ".$absentIdsAsString;
      }

}

$test3= "SELECT * FROM course_attendance, students, courses, attendance WHERE course_attendance.course_id=courses.course_id AND course_attendance.week_id=attendance.week_number_id AND course_attendance.student_id= students.student_id AND courses.course_id='101' AND attendance.week_number_id='2' ";
$result = mysql_query($test3)  or die(mysql_error());
?>
<form name='FMaking.php' method='post'>
</br>
<table border='1' align='center'>
  <tr>
    <th><strong>Student ID</strong></th>
    <th><strong>First Name </strong></th>
    <th><strong>Present</strong></th>
  </tr>
<?php
while($rows=mysql_fetch_array($result)){
  echo "<tr><td width='100' align='center'>" .$rows['regno'].
  "</td><td width='120' align='center'>" .$rows['name'].
  "</td><td><input type='checkbox' name='present".$rows['regno']."' ";

  // NOTE: REPLACE 1 with whatever value you store in the database for being present. 
  // I used 1 since the update at the top of the code uses 0 and 1.
  if($rows['present']=='1')
  {
    echo "checked='checked' ";
  }
  // With a checkbox, you don't need to assign it a value.
  echo "value=" .$rows['present'];

  echo ">";
}
?>
</table>
<input type='submit' name='Submit' value='Submit'>
</form>