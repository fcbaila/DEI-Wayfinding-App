<?php
require('core/init.php');
require('core/functions.php');

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>DEI-WAYFINDING</title>


	<link href="./css/style-2.css" rel="stylesheet" type="text/css">
	<link href="./css/css-reset.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="js/lib/jquery.js"></script>
	<script type="text/javascript" src="js/lib/jquery-ui.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
</head>
<body>

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

	<div class="cube absolute">
		<div class="flippety">
			<h1>Flippity</h1>
		</div>

		<div class="flop">
			<h2>Flop</h2>
		</div>
	</div>

</div>

</div>
</div>

</body>
</html>
