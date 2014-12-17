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
		for($i = 1; $i <= 7; $i++) {
			echo '<div class="grid"></div>';
		}
		?>
	</div>
	
	<div id="construct_mapa">
		<?php
		for ($i = 1; $i <= 8; $i++) {
			for($j = 1; $j <= 16; $j++) {
				$query = mysql_query("SELECT * FROM mapa_slots WHERE mapa_x = '$j' AND mapa_y = '$i'");
				if (!$query || mysql_num_rows($query) == 0) {
					echo '<div class="mapa_slot">Error</div>';
				} else {
					$fetch_query = mysql_fetch_object($query);
					$image_link = 'css/images/icons/icon_'.$fetch_query->slot_tipo.'.png';
					echo '<div class="mapa_slot"> <img src="'.$image_link.'" style="width: 100%;"></div>';	
				}
			}
		}
		?>
	</div>
</div>

</div>
</div>

</body>
</html>