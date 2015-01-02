<?php

function getTeachers($db) {
  $teacher = $db->query('SELECT * from teachers ORDER BY teacher_name ASC');

  while($row = $teacher->fetch(PDO::FETCH_ASSOC)) {
    echo '<p class="teacher_id teacher_'.$row['teacher_id'].'" teacher_filter="'.$row['teacher_course'].'" teacher_name="'.$row['teacher_name'].'">· '.$row['teacher_name'].'</p>';
  }
}

function getRooms($db) {
  $room = $db->query('SELECT * from rooms ORDER BY room_block ASC, room_floor ASC, room_number ASC');

  while($row = $room->fetch(PDO::FETCH_ASSOC)) {
    echo '<p class="room_id room_'.$row['room_id'].'" room_block="'.$row['room_block'].'" room_floor="'.$row['room_floor'].'"> — '.$row['room_block'].$row['room_floor'].'.'.$row['room_number'].'</p>';
  }
}

?>
