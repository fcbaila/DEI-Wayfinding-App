<html>
<body onclick="createClick(event)">

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
		for($i = 1; $i <= 40; $i++) {
			echo '<div class="grid"></div>';
		}

		for($i = 1; $i <= 32; $i++) {
			echo '<div class="grid-h"></div>';
		}
		?>
	</div>
	<div id="frame" class="absolute">
		<div id="frame-top" class="absolute"></div>
		<div id="frame-right" class="absolute"></div>
		<div id="frame-bottom" class="absolute"></div>
		<div id="frame-left" class="absolute"></div>
	</div>

	<div id="page_container">

		<div id="construct_mapa" class="grid-2 grid-h-5 front_view">
			<?php showFrontMap(1); ?>
		</div>

		<div id="construct_mapa" class="grid-2 grid-h-5 side_view side_0"><?php showMap(0); ?></div>
		<div id="construct_mapa" class="grid-2 grid-h-5 side_view side_1"><?php showMap(1); ?></div>
		<div id="construct_mapa" class="grid-2 grid-h-5 side_view side_2"><?php showMap(2); ?></div>
		<div id="construct_mapa" class="grid-2 grid-h-5 side_view side_3"><?php showMap(3); ?></div>
		<div id="construct_mapa" class="grid-2 grid-h-5 side_view side_4"><?php showMap(4); ?></div>
		<div id="construct_mapa" class="grid-2 grid-h-5 side_view side_5"><?php showMap(5); ?></div>
		<div id="construct_mapa" class="grid-2 grid-h-5 side_view side_6"><?php showMap(6); ?></div>

		<div class="text regular underline button absolute grid-h-23 grid-4 type-32">
			<div id="step-i" class="step">back to begining</div>
			<div id="step-b" class="step">step back</div>
			<div id="step-f" class="step">step forward</div>
		</div>

		<div class="text medium absolute grid-h-26 grid-2 type-38">
			<p>You have selected tower A. Touch a point to select a floor.</p>
		</div>
<!--
		<div id="search-free" class="grid-2 grid-h-22 search-bar absolute type-38">
			<input type="text" id="text-search" class="text search input" placeholder="search">
		</div>

		<div id="map-filter" class="text grid-16 grid-h-22 absolute type-38">
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
				<div class="key-m key-break" id="t">T</div>
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
-->
		<div id="clock" class="text absolute grid-32 grid-h-2 button type-24">
		</div>

		<div id="close-page" class="close text absolute grid-36 grid-h-2 button">
			<img class="img-close" src="./css/images/close.png" />
		</div>
	</div>
</div>

</div>
</div>

<?php
require('core/footer.php');
?>
