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
        for($i = 1; $i <= 40; $i++) {
          echo '<div class="grid"></div>';
        }
        ?>
        <?php
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

      <div id="page_container" class="full-page">
        <div id="initial-message" class="text absolute grid-4 grid-h-10 type-48">
          <p>Hi, <b>welcome to DEI.</b></p>
          <p>Department of Informatics Engineering<br>— University of Coimbra</p>
        </div>

        <div id="initial-instruction" class="text absolute grid-8 grid-h-20 type-32">
          <p>touch to start</p>
          <img class="img-touch" src="./css/images/touch.png" />
        </div>
      </div>

    </div>
  </div>
</div>

<?php
require('core/footer.php');
?>
