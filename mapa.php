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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
			<div id="step-up" class="step" style="display:none;">Go UP</div>
			<div id="step-down" class="step" style="display:none">Go DOWN</div>
			<div id="c-floor" style="display:none;">0</div>
		</div>

		<div id="map-feedback" class="text medium absolute grid-h-26 grid-2 type-32">
			<p>This is <b>DEI's</b> map. Touch it to select a tower.</p>
		</div>

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
