<?php

function getTeachers() {
  $teacher = mysql_query("SELECT * from teachers ORDER BY teacher_name ASC");
  if (!$teacher || mysql_num_rows($teacher) == 0) {
    echo 'There are no teachers available at the moment.';
  } else {
    while($fetch_teachers = mysql_fetch_object($teacher)){
      echo '<p class="teacher_id '.$fetch_teachers->teacher_course.' teacher_'.$fetch_teachers->teacher_id.'" teacher_filter="'.$fetch_teachers->teacher_course.'" teacher_name="'.$fetch_teachers->teacher_name.'">· '.$fetch_teachers->teacher_name.'</p>';
    }
  }
}

function getRooms() {
  $room = mysql_query("SELECT * from rooms ORDER BY room_block ASC, room_floor ASC, room_number ASC");
  if (!$room || mysql_num_rows($room) == 0) {
    echo 'There are no rooms available at the moment.';
  } else {
    while($fetch_rooms = mysql_fetch_object($room)){
      echo '<p class="room_id '.$fetch_rooms->room_type.' room_'.$fetch_rooms->room_id.'" room_block="'.$fetch_rooms->room_block.'" room_floor="'.$fetch_rooms->room_floor.'"> · '.$fetch_rooms->room_block.$fetch_rooms->room_floor.'.'.$fetch_rooms->room_number.'  '.$fetch_rooms->room_name.'</p>';
    }
  }
}

function showFrontMap() {
  $count = 0;
  for ($i = 1; $i <= 8; $i++) {
    for($j = 1; $j <= 18; $j++) {
      $count = $count+1;
      $query = mysql_query("SELECT * FROM map_slots_front WHERE map_x = '$j' AND map_y = '$i'");
      if (!$query || mysql_num_rows($query) == 0) {
        echo '<div class="mapa_slot slot_'.$count.'"><img src="css/images/icons/icon_empty.png"></div>';
      } else {
        $fetch_query = mysql_fetch_object($query);
        echo '<div class="mapa_slot slot_'.$count.'"><img src="'.$fetch_query->slot_image.'"></div>';
      }
    }
  }
}

function showMap($floor) {
  $count = 0;
  $tooltip = 'tooltipsed';
  for ($i = 1; $i <= 8; $i++) {
    for($j = 1; $j <= 18; $j++) {
      $count = $count+1;
      $query = mysql_query("SELECT * FROM map_slots WHERE map_x = '$j' AND map_y = '$i' AND floor_id = '$floor'");
      if (!$query || mysql_num_rows($query) == 0) {
        echo '<div class="mapa_slot slot_'.$count.'"><img src="css/images/icons/icon_empty.png"></div>';
      } else {
        if($j < 6) {
          $tooltip = 'tooltipsed-left';
        } elseif($j >= 6 AND $j <= 12) {
          $tooltip = 'tooltipsed-top';
        } else {
          $tooltip = 'tooltipsed-right';
        }

        $count_room = mysql_num_rows($query);

        if($count_room > 1) {
          $string = '';
          while($multiple_rooms = mysql_fetch_object($query)) {
            $fetch_multiple = mysql_fetch_object(mysql_query("SELECT * FROM rooms WHERE room_id = '$multiple_rooms->room_id'"));
            if(!$fetch_multiple->room_name) {
              $room_name = $fetch_multiple->room_block.$fetch_multiple->room_floor.'.'.$fetch_multiple->room_number;
            } else {
              $room_name = $fetch_multiple->room_name;
            }
            $string = $string.$room_name.', ';
            $room_type = $fetch_multiple->room_type;
          }
          $room_name = rtrim($string, ", ");
        } else {
          $fetch_query = mysql_fetch_object($query);
          $room_query = mysql_fetch_object(mysql_query("SELECT * FROM rooms WHERE room_id = '$fetch_query->room_id'"));
          if(!$room_query->room_name) {
            $room_name = $room_query->room_block.$room_query->room_floor.'.'.$room_query->room_number;
          } else {
            $room_name = $room_query->room_name;
          }
          $room_type = $room_query->room_type;
        }


        if($room_type == 'hall') {
          echo '<div title="'.$room_name.'" class="mapa_slot '.$tooltip.' slot_'.$count.'"><img src="css/images/icons/icon_corridor.png"></div>';
        } elseif($room_type == 'user_pos') {
          echo '<div title="'.$room_name.'" class="mapa_slot '.$tooltip.' slot_'.$count.'"><img src="css/images/icons/icon_position.png"></div>';
        } elseif($room_type == 'bathroom') {
          echo '<div title="'.$room_name.'" class="mapa_slot '.$tooltip.' slot_'.$count.'"><img src="css/images/icons/icon_wc.png"></div>';
        } elseif($room_type == 'parking') {
          echo '<div title="'.$room_name.'" class="mapa_slot '.$tooltip.' slot_'.$count.'"><img src="css/images/icons/icon_parking.png"></div>';
        } elseif($room_type == 'stairs') {
          echo '<div title="'.$room_name.'" class="mapa_slot '.$tooltip.' slot_'.$count.'"><img src="css/images/icons/icon_stairs.png"></div>';
        } else {
          echo '<div title="'.$room_name.'" class="mapa_slot '.$tooltip.' slot_'.$count.'"><img src="css/images/icons/icon_classroom.png"></div>';
        }
      }
    }
  }
}

?>
