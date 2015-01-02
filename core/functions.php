<?php

function getTeachers() {
  $teacher = mysql_query("SELECT * from teachers ORDER BY teacher_name ASC");
  if (!$teacher || mysql_num_rows($teacher) == 0) {
    echo 'There are no teachers available at the moment.';
  } else {
    while($fetch_teachers = mysql_fetch_object($teacher)){
      echo '<p class="teacher_id teacher_'.$fetch_teachers->teacher_id.'" teacher_filter="'.$fetch_teachers->teacher_course.'" teacher_name="'.$fetch_teachers->teacher_name.'">· '.$fetch_teachers->teacher_name.'</p>';
    }
  }
}


function getRooms() {
  $room = mysql_query("SELECT * from rooms ORDER BY room_block ASC, room_floor ASC, room_number ASC");
  if (!$room || mysql_num_rows($room) == 0) {
    echo 'There are no rooms available at the moment.';
  } else {
    while($fetch_rooms = mysql_fetch_object($room)){
      echo '<p class="room_id room_'.$fetch_rooms->room_id.'" room_block="'.$fetch_rooms->room_block.'" room_floor="'.$fetch_rooms->room_floor.'"> · '.$fetch_rooms->room_block.$fetch_rooms->room_floor.'.'.$fetch_rooms->room_number.';</p>';
    }
  }
}
?>
