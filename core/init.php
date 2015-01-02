<?php

  mysql_connect("localhost", "dei-od1", "od1pass") or die(mysql_error());
  mysql_select_db("dei_wayfinding") or die(mysql_error());
  mysql_query('SET character_set_client=utf8');
  mysql_query('SET character_set_results=utf8');
  date_default_timezone_set('Europe/Lisbon');

?>
