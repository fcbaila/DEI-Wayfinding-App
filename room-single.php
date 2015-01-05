<html>
<body onclick="createClick(event)">

<?php
require('core/ref.php');
require('core/init.php');
require('core/functions.php');
require('core/footer.php');

?>

<div id="wrapper">
  <div id="container">
    <div id="construct_container">
      <div id="frame" class="absolute">
        <div id="frame-top" class="absolute"></div>
        <div id="frame-right" class="absolute"></div>
        <div id="frame-bottom" class="absolute"></div>
        <div id="frame-left" class="absolute"></div>
      </div>

      <div id="page_container">
        <?php getRoomData(); ?>

        <div id="clock" class="text absolute grid-32 grid-h-2 button type-24">
        </div>

        <div id="close-page-room" class="close text absolute grid-36 grid-h-2 button">
          <img class="img-close" src="./css/images/close.png" />
        </div>

      </div>

    </div>
  </div>
</div>
