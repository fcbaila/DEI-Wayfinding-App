<?php

function getTeachers() {
  $teacher_number = 0;
  $teacher = mysql_query("SELECT * from teachers ORDER BY teacher_name ASC");
  if (!$teacher || mysql_num_rows($teacher) == 0) {
    echo 'There are no teachers available at the moment.';
  } else {
    while($fetch_teachers = mysql_fetch_object($teacher)){
      $teacher_number = $fetch_teachers->teacher_id;
      echo '<p id="'.$fetch_teachers->teacher_id.'" class="teacher_id '.$fetch_teachers->teacher_course.' teacher_'.$fetch_teachers->teacher_id.'" teacher_filter="'.$fetch_teachers->teacher_course.'" teacher_name="'.$fetch_teachers->teacher_name.'"><a href="professor-single.php?s='.$teacher_number.'">· '.$fetch_teachers->teacher_name.'</a></p>';
    }
  }
}

function getTeacherData() {
  $teacher_id = $_GET['s'];
  $teacher = mysql_query("SELECT * from teachers WHERE teacher_id = '$teacher_id'");
  if (!$teacher || mysql_num_rows($teacher) == 0) {
    echo 'There are no teachers available at the moment.';
  } else {
    while($fetch_teachers = mysql_fetch_object($teacher)){
      echo '<div class="text absolute grid-h-3 grid-2 type-32 bold">';
      echo '<p>'.$fetch_teachers->teacher_name.'</p>';
      echo '</div>';
      echo '<div class="text absolute grid-h-5 grid-2 type-32 regualr">';
      echo '<p>'.$fetch_teachers->teacher_email.'</p>';
      echo '</div>';
    }
  }
  $room_id = 0;
  $room_floor = 0;
  $office = mysql_query("SELECT * from office_hours WHERE teacher_id = '$teacher_id' LIMIT 2");
  if (!$office || mysql_num_rows($office) == 0) {
    echo 'There are no office hours available at the moment.';
  } else {
    echo '<div class="text absolute grid-h-5 grid-18 type-32">';
    echo '<p class="medium">Next office hour:</p>';
    $h = date('H');
    $d = date('l');
    if ($d == "Monday"){
      $d = "Segunda-Feira";
    } else if ($d == "Tuesday"){
      $d = "Terça-Feira";
    } else if ($d == "Wednesday"){
      $d = "Quarta-Feira";
    } else if ($d == "Thursday"){
      $d = "Quinta-Feira";
    } else if ($d == "Friday"){
      $d = "Sexta-Feira";
    }
    while($fetch_office_hours = mysql_fetch_object($office)){
      $office_day = $fetch_office_hours->weekday;
      $office_hour = $fetch_office_hours->hour_begin;
      $office_end = $fetch_office_hours->hour_end;
      $room_id = $fetch_office_hours->room_id;
      $room = mysql_query("SELECT * from rooms WHERE room_id = '$room_id'");
      if (!$room || mysql_num_rows($room) == 0) {
        echo 'There are no office hours available at the moment.';
      } else {
        while($fetch_rooms = mysql_fetch_object($room)){
          if ($d == $office_day && $h >= $office_hour && $h < $office_end){
            echo '<p class="office">Currently availabe at '.$fetch_rooms->room_block.''.$fetch_rooms->room_floor.'.'.$fetch_rooms->room_number.'</p>';
            $room_floor = $fetch_rooms->room_floor;
            $office_parse = $fetch_rooms->room_block.''.$fetch_rooms->room_floor.'.'.$fetch_rooms->room_number;
          }else{
            echo '<p class="office">'.$fetch_office_hours->weekday.' from '.$fetch_office_hours->hour_begin.'.00 until '.$fetch_office_hours->hour_end.'.00 at '.$fetch_rooms->room_block.''.$fetch_rooms->room_floor.'.'.$fetch_rooms->room_number.'</p>';
            $room_floor = $fetch_rooms->room_floor;
            $office_parse = $fetch_rooms->room_block.''.$fetch_rooms->room_floor.'.'.$fetch_rooms->room_number;
          }
        }
      }
    }

    $room_loc = mysql_query("SELECT * FROM map_slots WHERE room_id = $room_id LIMIT 1");

    if($room_loc) {
      while ($row = mysql_fetch_object($room_loc)) {
        $room_number = $row->floor_id.', '.$row->map_x.', '.$row->map_y;
      }
    }

    echo '</div>';
    echo '<div id="construct_mapa" class="grid-2 grid-h-12 side_1" style="display:none;">';
    echo showMap(1);
    echo '</div>';

    echo '<div id="construct_mapa" class="grid-2 grid-h-12 side_'.$room_floor.'">';
    echo showMap($room_floor);
    echo '</div>';
    echo '<script type="text/javascript">'
    , 'filterRoom("'.$room_number.'");'
    , '</script>'
    ;
  }
  if ($room_floor != 1){
    echo '<div class="text button absolute grid-2 grid-h-10 button type-32 regular"><div id="floor-desc">Office at <b>'.$office_parse.'</b></div></div><div class="text button absolute grid-10 grid-h-10 button type-32 regular underline"><div id="current-floor-2" floor="'.$room_floor.'" class="step">Switch to floor 1</div></div><div class="text button absolute grid-31 grid-h-10 button type-32 regular"><div id="showing-floor-2" floor="'.$room_floor.'" class="step">Showing Floor <b>'.$room_floor.'</b></div></div>';
  } else {
    echo '<div class="text button absolute grid-2 grid-h-10 button type-32 regular"><div id="floor-desc">Office at <b>'.$office_parse.'</b></div></div><div class="text button absolute grid-31 grid-h-10 button type-32 regular"><div id="showing-floor-2" floor="'.$room_floor.'" class="step">Showing Floor <b>'.$room_floor.'</b></div></div>';
  }
}

function getRooms() {
  $room_number = 0;
  $room = mysql_query("SELECT * from rooms WHERE room_type <> 'stairs' AND room_type <> 'hall' AND room_type <> 'user_pos' AND room_type <> 'service' AND room_type <> 'parking' AND room_type <> 'bathroom' ORDER BY room_block ASC, room_floor ASC, room_number ASC");
  if (!$room || mysql_num_rows($room) == 0) {
    echo 'There are no rooms available at the moment.';
  } else {
    while($fetch_rooms = mysql_fetch_object($room)){
      $room_number = $fetch_rooms->room_id;
      $second_part = ".".$fetch_rooms->room_number;
      if($fetch_rooms->room_number == NULL){
        echo '<p class="room_id room_'.$fetch_rooms->room_id.' '.$fetch_rooms->room_type.' '.$fetch_rooms->room_block.' '.$fetch_rooms->room_floor.'" room_block="'.$fetch_rooms->room_block.'" room_floor="'.$fetch_rooms->room_floor.'"><a href="room-single.php?s='.$room_number.'">· '.$fetch_rooms->room_block.$fetch_rooms->room_floor.' '.$fetch_rooms->room_name.'</a></p>';
      } else{
        echo '<p class="room_id room_'.$fetch_rooms->room_id.' '.$fetch_rooms->room_type.' '.$fetch_rooms->room_block.' '.$fetch_rooms->room_floor.'" room_block="'.$fetch_rooms->room_block.'" room_floor="'.$fetch_rooms->room_floor.'"><a href="room-single.php?s='.$room_number.'">· '.$fetch_rooms->room_block.$fetch_rooms->room_floor.''.$second_part.'  '.$fetch_rooms->room_name.'</a></p>';
      }
    }
  }
}

function getRoomData() {
  $room_id = $_GET['s'];
  $room = mysql_query("SELECT * from rooms WHERE room_id = '$room_id'");
  if (!$room || mysql_num_rows($room) == 0) {
    echo 'There are no rooms available at the moment.';
  } else {
    while($fetch_rooms = mysql_fetch_object($room)){
      echo '<div class="text absolute grid-h-3 grid-2 type-32 bold">';
      echo '<p>'.$fetch_rooms->room_block.''.$fetch_rooms->room_floor.'.'.$fetch_rooms->room_number.'</p>';
      echo '</div>';
      echo '<div class="text absolute grid-h-5 grid-2 type-32 regualr">';
      echo '<p>'.$fetch_rooms->room_name.'</p>';
      echo '</div>';
      $room_floor = $fetch_rooms->room_floor;
      $office_parse = $fetch_rooms->room_block.''.$fetch_rooms->room_floor.'.'.$fetch_rooms->room_number;
    }

    $room_loc = mysql_query("SELECT * FROM map_slots WHERE room_id = $room_id LIMIT 1");

    if($room_loc) {
      while ($row = mysql_fetch_object($room_loc)) {
        $room_number = $row->floor_id.', '.$row->map_x.', '.$row->map_y;
      }
    }

    echo '<div id="construct_mapa" class="grid-2 grid-h-12 side_1" style="display:none;">';
    echo showMap(1);
    echo '</div>';

    echo '<div id="construct_mapa" class="grid-2 grid-h-12 side_'.$room_floor.'">';
    echo showMap($room_floor);
    echo '</div>';
    echo '<script type="text/javascript">'
    , 'filterRoom("'.$room_number.'");'
    , '</script>'
    ;
  }

  if ($room_floor != 1){
    echo '<div class="text button absolute grid-2 grid-h-10 button type-32 regular"><div id="floor-desc">Located on <b>'.$office_parse.'</b></div></div><div class="text button absolute grid-10 grid-h-10 button type-32 regular underline"><div id="current-floor-2" floor="'.$room_floor.'" class="step">Switch to floor 1</div></div><div class="text button absolute grid-31 grid-h-10 button type-32 regular"><div id="showing-floor-2" floor="'.$room_floor.'" class="step">Showing Floor <b>'.$room_floor.'</b></div></div>';
  } else {
    echo '<div class="text button absolute grid-2 grid-h-10 button type-32 regular"><div id="floor-desc">Located on <b>'.$office_parse.'</b></div></div><div class="text button absolute grid-31 grid-h-10 button type-32 regular"><div id="showing-floor-2" floor="'.$room_floor.'" class="step">Showing Floor <b>'.$room_floor.'</b></div></div>';
  }

}

function getServices() {
  $service_number = 0;
  $service = mysql_query("SELECT * from rooms WHERE room_type = 'service' OR room_type = 'parking' ORDER BY room_name ASC" );
  if (!$service || mysql_num_rows($service) == 0) {
    echo 'There are no services available at the moment.';
  } else {
    while($fetch_rooms = mysql_fetch_object($service)){
      $service_number = $fetch_rooms->room_id;
      echo '<a href="service-single.php?s='.$service_number.'"><p class="service_id '.$fetch_rooms->room_id.'">· '.$fetch_rooms->room_name.'</p></a>';
    }
    echo '<a href="service-single.php?s=143"><p class="service_id 143">· W.C.</p></a>';
  }
}

function getServiceData() {
  $room_id = $_GET['s'];
  $room = mysql_query("SELECT * from rooms WHERE room_id = '$room_id'");
  if (!$room || mysql_num_rows($room) == 0) {
    echo 'There are no rooms available at the moment.';
  } else {
    while($fetch_rooms = mysql_fetch_object($room)){
      echo '<div class="text absolute grid-h-3 grid-2 type-32 bold">';
      echo '<p>'.$fetch_rooms->room_name.'</p>';
      echo '</div>';
      echo '<div class="text absolute grid-h-5 grid-2 type-32 regualr">';
      $second_part = ".".$fetch_rooms->room_number;
      if($fetch_rooms->room_number == NULL){
        echo '<p>'.$fetch_rooms->room_block.''.$fetch_rooms->room_floor.'</p>';
      } else{
        echo '<p>'.$fetch_rooms->room_block.''.$fetch_rooms->room_floor.''.$second_part.'</p>';
      }
      $room_floor = $fetch_rooms->room_floor;
      $office_parse = $fetch_rooms->room_block.''.$fetch_rooms->room_floor.'.'.$fetch_rooms->room_number;
      echo '</div>';
    }
  }
  $room_loc = mysql_query("SELECT * FROM map_slots WHERE room_id = $room_id LIMIT 1");

  if($room_loc) {
    while ($row = mysql_fetch_object($room_loc)) {
      $room_number = $row->floor_id.', '.$row->map_x.', '.$row->map_y;
    }
  }

  echo '<div id="construct_mapa" class="grid-2 grid-h-12 side_1" style="display:none;">';
  echo showMap(1);
  echo '</div>';

  echo '<div id="construct_mapa" class="grid-2 grid-h-12 side_'.$room_floor.'">';
  echo showMap($room_floor);
  echo '</div>';
  echo '<script type="text/javascript">'
  , 'filterRoom("'.$room_number.'");'
  , '</script>'
  ;

  if ($room_floor != 1){
    echo '<div class="text button absolute grid-2 grid-h-10 button type-32 regular"><div id="floor-desc">Located on <b>'.$office_parse.'</b></div></div><div class="text button absolute grid-10 grid-h-10 button type-32 regular underline"><div id="current-floor-2" floor="'.$room_floor.'" class="step">Switch to floor 1</div></div><div class="text button absolute grid-31 grid-h-10 button type-32 regular"><div id="showing-floor-2" floor="'.$room_floor.'" class="step">Showing Floor <b>'.$room_floor.'</b></div></div>';
  } else {
    echo '<div class="text button absolute grid-2 grid-h-10 button type-32 regular"><div id="floor-desc">Located on <b>'.$office_parse.'</b></div></div><div class="text button absolute grid-31 grid-h-10 button type-32 regular"><div id="showing-floor-2" floor="'.$room_floor.'" class="step">Showing Floor <b>'.$room_floor.'</b></div></div>';    
  }
}

function showFrontMap() {
  $count = 0;
  for ($i = 1; $i <= 8; $i++) {
    for($j = 1; $j <= 18; $j++) {
      $count = $count+1;
      $query = mysql_query("SELECT * FROM map_slots_front WHERE map_x = '$j' AND map_y = '$i'");
      if (!$query || mysql_num_rows($query) == 0) {
        echo '<div class="mapa_slot slot_empty slot_front_'.$count.'"><img src="css/images/icons/icon_empty.png"></div>';
      } else {
        $fetch_query = mysql_fetch_object($query);
        echo '<div class="mapa_slot slot_front slot_front_'.$count.'" block="'.$fetch_query->block_number.'" floor="'.$fetch_query->floor_number.'"><img src="'.$fetch_query->slot_image.'"></div>';
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
        echo '<div class="mapa_slot slot_empty slot_side slot_side_'.$count.' slot_'.$count.'" room_data="Empty" block="Empty"><img src="css/images/icons/icon_empty.png"></div>';
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
            $room_id = $fetch_multiple->room_id;
            $room_type = $fetch_multiple->room_type;
            $room_block = $fetch_multiple->room_block;
            $room_number = $fetch_multiple->room_number;
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
          $room_id = $room_query->room_id;
          $room_type = $room_query->room_type;
          $room_block = $room_query->room_block;
          $room_number = $room_query->room_number;
        }

        $wayfind_array = "";
        $wayfind_query = mysql_query("SELECT * FROM map_wayfinding WHERE room_id='$room_id'");
        if (!$wayfind_query || mysql_num_rows($wayfind_query) == 0) {
            $wayfind_array = "Empty";
        } else {
          while($fetch_wayfind = mysql_fetch_object($wayfind_query)) {
            $wayfind_array = $wayfind_array.$fetch_wayfind->floor_number.', '.$fetch_wayfind->map_x.', '.$fetch_wayfind->map_y.'-';
          }
        }

        if($room_type == 'hall') {
          if($room_id == '169') {
            echo '<div title="'.$room_name.'" all_name="'.$room_name.'" class="slot_side slot_side_'.$count.' slot_side_'.$floor.'_'.$count.'  mapa_slot '.$tooltip.' slot_'.$count.'" floor="'.$floor.'" r_x="'.$j.'" r_y="'.$i.'" room="'.$wayfind_array.'" block="'.$room_block.'"><img src="css/images/icons/icon_outdoor_1.png"></div>';
          } elseif($room_id == '170') {
            echo '<div title="'.$room_name.'" all_name="'.$room_name.'" class="slot_side slot_side_'.$count.' slot_side_'.$floor.'_'.$count.'  mapa_slot '.$tooltip.' slot_'.$count.'" floor="'.$floor.'" r_x="'.$j.'" r_y="'.$i.'" room="'.$wayfind_array.'" block="'.$room_block.'"><img src="css/images/icons/icon_outdoor_2.png"></div>';
          } elseif($room_id == '171') {
            echo '<div title="'.$room_name.'" all_name="'.$room_name.'" class="slot_side slot_side_'.$count.' slot_side_'.$floor.'_'.$count.'  mapa_slot '.$tooltip.' slot_'.$count.'" floor="'.$floor.'" r_x="'.$j.'" r_y="'.$i.'" room="'.$wayfind_array.'" block="'.$room_block.'"><img src="css/images/icons/icon_outdoor_3.png"></div>';
          } elseif($room_id == '172') {
            echo '<div title="'.$room_name.'" all_name="'.$room_name.'" class="slot_side slot_side_'.$count.' slot_side_'.$floor.'_'.$count.'  mapa_slot '.$tooltip.' slot_'.$count.'" floor="'.$floor.'" r_x="'.$j.'" r_y="'.$i.'" room="'.$wayfind_array.'" block="'.$room_block.'"><img src="css/images/icons/icon_outdoor_4.png"></div>';
          } else {
            echo '<div title="'.$room_name.'" all_name="'.$room_name.'" class="slot_side slot_side_'.$count.' slot_side_'.$floor.'_'.$count.' mapa_slot '.$tooltip.' slot_'.$count.'" floor="'.$floor.'" r_x="'.$j.'" r_y="'.$i.'" block="'.$room_block.'"><img src="css/images/icons/icon_corridor.png"></div>';
          }
        } elseif($room_type == 'user_pos') {
          echo '<div title="'.$room_name.'" all_name="'.$room_name.'" class="slot_side slot_side_'.$count.' slot_side_'.$floor.'_'.$count.'  mapa_slot '.$tooltip.' slot_'.$count.'" floor="'.$floor.'" r_x="'.$j.'" r_y="'.$i.'" block="'.$room_block.'"><img src="css/images/icons/icon_position.png"></div>';
        } elseif($room_type == 'bathroom') {
          echo '<div title="'.$room_name.'" all_name="'.$room_name.'" class="slot_side slot_side_'.$count.' slot_side_'.$floor.'_'.$count.'  mapa_slot '.$tooltip.' slot_'.$count.'" floor="'.$floor.'" r_x="'.$j.'" r_y="'.$i.'" block="'.$room_block.'"><img src="css/images/icons/icon_wc.png"></div>';
        } elseif($room_type == 'parking') {
          echo '<div title="'.$room_name.'" all_name="'.$room_name.'" class="slot_side slot_side_'.$count.' slot_side_'.$floor.'_'.$count.'  mapa_slot '.$tooltip.' slot_'.$count.'" floor="'.$floor.'" r_x="'.$j.'" r_y="'.$i.'" block="'.$room_block.'"><img src="css/images/icons/icon_parking.png"></div>';
        } elseif($room_type == 'stairs') {
          echo '<div title="'.$room_name.'" all_name="'.$room_name.'" class="slot_side slot_side_'.$count.' slot_side_'.$floor.'_'.$count.'  mapa_slot '.$tooltip.' slot_'.$count.'" floor="'.$floor.'" r_x="'.$j.'" r_y="'.$i.'" block="'.$room_block.'"><img src="css/images/icons/icon_stairs.png"></div>';
        } elseif($room_type == 'service') {
          if($room_id == '154' || $room_id == '148') {
            echo '<div title="'.$room_name.'" all_name="'.$room_name.'" class="slot_side slot_side_'.$count.' slot_side_'.$floor.'_'.$count.'  mapa_slot '.$tooltip.' slot_'.$count.'" floor="'.$floor.'" r_x="'.$j.'" r_y="'.$i.'" room="'.$wayfind_array.'" block="'.$room_block.'"><img src="css/images/icons/icon_bar.png"></div>';
          } else {
            echo '<div title="'.$room_name.'" all_name="'.$room_name.'" class="slot_side slot_side_'.$count.' slot_side_'.$floor.'_'.$count.'  mapa_slot '.$tooltip.' slot_'.$count.'" floor="'.$floor.'" r_x="'.$j.'" r_y="'.$i.'" room="'.$wayfind_array.'" block="'.$room_block.'"><img src="css/images/icons/icon_services.png"></div>';
          }
        } elseif($room_type == 'staff') {
          echo '<div title="'.$room_name.'" all_name="'.$room_name.'" class="slot_side slot_side_'.$count.' slot_side_'.$floor.'_'.$count.'  mapa_slot '.$tooltip.' slot_'.$count.'" floor="'.$floor.'" r_x="'.$j.'" r_y="'.$i.'" room="'.$wayfind_array.'" block="'.$room_block.'"><img src="css/images/icons/icon_staff.png"></div>';
        } elseif($room_type == 'study room') {
          echo '<div title="'.$room_name.'" all_name="'.$room_name.'" class="slot_side slot_side_'.$count.' slot_side_'.$floor.'_'.$count.'  mapa_slot '.$tooltip.' slot_'.$count.'" floor="'.$floor.'" r_x="'.$j.'" r_y="'.$i.'" room="'.$wayfind_array.'" block="'.$room_block.'"><img src="css/images/icons/icon_study.png"></div>';
        } else {
          echo '<div title="'.$room_name.'" all_name="'.$room_name.'" class="slot_side slot_side_'.$count.' slot_side_'.$floor.'_'.$count.'  mapa_slot '.$tooltip.' slot_'.$count.'" floor="'.$floor.'" r_x="'.$j.'" r_y="'.$i.'" room="'.$wayfind_array.'" block="'.$room_block.'"><img src="css/images/icons/icon_classroom.png"></div>';
        }
      }
    }
  }
}

?>
