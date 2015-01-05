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
      <div id="frame" class="absolute">
        <div id="frame-top" class="absolute"></div>
        <div id="frame-right" class="absolute"></div>
        <div id="frame-bottom" class="absolute"></div>
        <div id="frame-left" class="absolute"></div>
      </div>

      <div id="page_container" class="full-page">
        <div id="initial-message" class="text absolute grid-4 grid-h-7">
          <p class="type-48">Hi, <b>welcome to DEI.</b></p>
          <p class="type-38">Department of Informatics Engineering<br>— University of Coimbra</p>
        </div>

        <div id="initial-instruction" class="text absolute grid-h-16 type-32">
          <p>touch the screen to start</p>
          <div id="img-touch"></div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php
require('core/footer.php');
?>
