<?php

function getTeachers() {
  $teacher = mysql_query("SELECT * from teachers ORDER BY teacher_name ASC");
  if (!$teacher || mysql_num_rows($teacher) == 0) {
    echo 'There are no teachers available at the moment.';
  } else {
    while($fetch_teachers = mysql_fetch_object($teacher)){
      echo '<p class="teacher_id teacher_'.$fetch_teachers->teacher_id.'" teacher_name="'.$fetch_teachers->teacher_name.'"> — '.$fetch_teachers->teacher_name.';</p>';
    }
  }
}

?>
