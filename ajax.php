<?php

require('core/ref.php');
require('core/init.php');
require('core/functions.php');

function isLegitReq() {
	return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')  && ($_SERVER['HTTP_HOST'] == $_SERVER['SERVER_NAME']));
}

if(!isLegitReq()) die('<!-- silence is golden -->');

if(isset($_GET['room'])) {
  $room = $_GET['room'];
	$query = mysql_query("SELECT * FROM map_wayfinding where room_id = '$room'")
	echo '<script>alert('yolo');</script>';
	echo '<div style="position:absolute: width: 50px; height: 50px; top: 50%; left: 50%; background-color: red;"></div>';
}

?>
