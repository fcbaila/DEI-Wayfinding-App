<?php
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
          }
          $room_name = $string;
        } else {
          $fetch_query = mysql_fetch_object($query);
          $room_query = mysql_fetch_object(mysql_query("SELECT * FROM rooms WHERE room_id = '$fetch_query->room_id'"));
          if(!$room_query->room_name) {
            $room_name = $room_query->room_block.$room_query->room_floor.'.'.$room_query->room_number;
          } else {
            $room_name = $room_query->room_name;
          }
        }


        if($room_query->room_type == 'hall') {
          echo '<div title="'.$room_name.'" class="mapa_slot '.$tooltip.' slot_'.$count.'"><img src="css/images/icons/icon_corridor.png"></div>';
        } elseif($room_query->room_type == 'user_pos') {
          echo '<div title="'.$room_name.'" class="mapa_slot '.$tooltip.' slot_'.$count.'"><img src="css/images/icons/icon_position.png"></div>';
        } elseif($room_query->room_type == 'bathroom') {
          echo '<div title="'.$room_name.'" class="mapa_slot '.$tooltip.' slot_'.$count.'"><img src="css/images/icons/icon_wc.png"></div>';
        } elseif($room_query->room_type == 'parking') {
          echo '<div title="'.$room_name.'" class="mapa_slot '.$tooltip.' slot_'.$count.'"><img src="css/images/icons/icon_parking.png"></div>';
        } elseif($room_query->room_type == 'stairs') {
          echo '<div title="'.$room_name.'" class="mapa_slot '.$tooltip.' slot_'.$count.'"><img src="css/images/icons/icon_stairs.png"></div>';
        } else {
          echo '<div title="'.$room_name.'" class="mapa_slot '.$tooltip.' slot_'.$count.'"><img src="css/images/icons/icon_classroom.png"></div>';
        }
      }
    }
  }
}
