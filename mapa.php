<html>
<body>

<?php
require('core/ref.php');
require('core/init.php');
require('core/functions.php');

?>

<div id="wrapper">
<div id="container">

<div id="construct_container">

	<div id="grid_container">
		<?php
		for($i = 1; $i <= 22; $i++) {
			echo '<div class="grid-2"></div>';
		}
		?>
		<?php
		for($i = 1; $i <= 18; $i++) {
			echo '<div class="grid-2-h"></div>';
		}
		?>
	</div>
	<div id="construct_mapa">
		<?php
		$count = 0;
		for ($i = 1; $i <= 8; $i++) {
			for($j = 1; $j <= 16; $j++) {
				$rand2 = rand(1, 6);
				$rand3 = rand(1, 6);
				$string = 'E'.$rand2.'_'.$rand3;
				$count = $count+1;
				$query = mysql_query("SELECT * FROM mapa_slots WHERE mapa_x = '$j' AND mapa_y = '$i'");
				if (!$query || mysql_num_rows($query) == 0) {
					echo '<div class="mapa_slot slot_'.$count.'" slot="'.$string.'">Error</div>';
				} else {
					$fetch_query = mysql_fetch_object($query);
					$image_link = 'css/images/icons/icon_'.$fetch_query->slot_tipo.'.png';
					echo '<div class="mapa_slot slot_'.$count.'" slot="'.$string.'"> <img src="'.$image_link.'" style="width: 100%;"></div>';
				}
			}
		}
		?>
	</div>

	<div id="construct_search"><input type="text" class="search_area" placeholder="Search for a room" onkeydown="updateMap();"></div>
</div>

</div>
</div>

</body>
</html>
