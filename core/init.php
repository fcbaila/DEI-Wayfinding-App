<?php

$db = new PDO('mysql:host=localhost; dbname=dei_wayfinding; charset=utf8', 'dei-od1', 'od1pass');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
date_default_timezone_set('Europe/Lisbon');

if(!$db){ die('An error occured while connecting to the database.'); }

?>
