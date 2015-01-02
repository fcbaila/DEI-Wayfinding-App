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
			echo '<div class="grid"></div>';
		}
		?>
		<?php
		for($i = 1; $i <= 18; $i++) {
			echo '<div class="grid-h"></div>';
		}
		?>
	</div>
	<div id="page_container">

		<div id="construct_mapa" class="grid-2 grid-h-3">
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

		<div id="search-professors" class="grid-2 grid-h-12 search-bar absolute">
			<input type="text" id="text-search" class="text search input" placeholder="search for a room">
		</div>

		<div id="map-filter" class="text grid-9 grid-h-12 absolute">
			<p id="inside-p-filter">
				<div class="key-m" id="a">A</div>
				<div class="key-m" id="b">B</div>
				<div class="key-m" id="c">C</div>
				<div class="key-m" id="d">D</div>
				<div class="key-m" id="e">E</div>
				<div class="key-m" id="f">F</div>
				<div class="key-m" id="g">G</div>
				<div class="key-m" id="h">H</div>
				<div class="key-m" id="i">I</div>
				<div class="key-m" id="j">J</div>
				<div class="key-m" id="k">K</div>
				<div class="key-m" id="l">L</div>
				<div class="key-m" id="m">M</div>
				<div class="key-m" id="n">N</div>
				<div class="key-m" id="o">O</div>
				<div class="key-m" id="p">P</div>
				<div class="key-m" id="q">Q</div>
				<div class="key-m" id="r">R</div>
				<div class="key-m" id="s">S</div>
				<div class="key-m" id="t">T</div>
				<div class="key-m" id="u">U</div>
				<div class="key-m" id="v">V</div>
				<div class="key-m" id="x">X</div>
				<div class="key-m" id="y">Y</div>
				<div class="key-m" id="w">W</div>
				<div class="key-m" id="z">Z</div>
			</p>
			<p>
				<div class="key-m" id="1">1</div>
				<div class="key-m" id="2">2</div>
				<div class="key-m" id="3">3</div>
				<div class="key-m" id="4">4</div>
				<div class="key-m" id="5">5</div>
				<div class="key-m" id="6">6</div>
				<div class="key-m" id=".">.</div>
				<div class="key-m" id="space">" "</div>
				<div class="key-m" id="back"><—</div>
				<div id="clean">clean</div>
			</p>
		</div>

		<div id="clock" class="close text absolute grid-16 grid-h-1 button">
		</div>

		<div id="close-page" class="close text absolute grid-20 button">
			<img class="img-close" src="../css/images/close.png" />
		</div>
	</div>
</div>

</div>
</div>

</body>
</html>
