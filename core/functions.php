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
      echo '<p class="room_id room_'.$fetch_rooms->room_id.'" room_block="'.$fetch_rooms->room_block.'" room_floor="'.$fetch_rooms->room_floor.'"> — '.$fetch_rooms->room_block.$fetch_rooms->room_floor.'.'.$fetch_rooms->room_number.';</p>';
    }
  }
}


function showMap($floor) {
  $count = 0;
  for ($i = 1; $i <= 8; $i++) {
    for($j = 1; $j <= 18; $j++) {
      $count = $count+1;
      $query = mysql_query("SELECT * FROM map_slots WHERE map_x = '$j' AND map_y = '$i' AND floor_id = '$floor'");
      if (!$query || mysql_num_rows($query) == 0) {
        echo '<div class="mapa_slot slot_'.$count.'"><img src="css/images/icons/icon_empty.png"></div>';
      } else {
        $fetch_query = mysql_fetch_object($query);
        $room_id = $fetch_query->room_id;
        $room_query = mysql_fetch_object(mysql_query("SELECT * FROM rooms WHERE room_id = '$fetch_query->room_id'"));
        if($room_id == 127) {
          echo '<div class="mapa_slot slot_'.$count.'"><img src="css/images/icons/icon_corridor.png"></div>';
        } elseif($room_id == 128) {
          echo '<div class="mapa_slot slot_'.$count.'"><img src="css/images/icons/icon_parking.png"></div>';
        } elseif($room_id == 129 || $room_id == 130) {
          echo '<div class="mapa_slot slot_'.$count.'"><img src="css/images/icons/icon_stairs.png"></div>';
        } elseif($room_id == 131 || $room_id == 132) {
          echo '<div class="mapa_slot slot_'.$count.'"><img src="css/images/icons/icon_wc.png"></div>';
        } else {
          echo '<div class="mapa_slot slot_'.$count.'"><img src="css/images/icons/icon_classroom.png"></div>';
        }
      }
    }
  }
}

?>
