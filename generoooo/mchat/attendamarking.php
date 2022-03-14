<?php

  if(!isset($_POST['submit_button'])){
   //form has not been submitted
   return;
  }

  //form HAS been submitted
  $student_array = $_POST['Name'];
  foreach($student_array as $name=>$val){
    //$val needs to be 0 or 1.
    $val = ($val == "1")?1:0;
    mysql_query("INSERT INTO attendance VALUES('$name');
  }
?>