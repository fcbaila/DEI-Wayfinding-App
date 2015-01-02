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

      <div id="page_container">

        <div id="page-title" class="text absolute grid-h-5 grid-2 type-38">
          <p>Services:</p>
        </div>

        <div id="services-list" class="text bold absolute grid-h-7 grid-2 type-32">
          <p>GAPI — Gabinete de Apoio a Projectos / Mobilidade;</p>
          <p>Helpdesk;</p>
          <p>Secretary;</p>
          <p>NEI — Computer Student Center;</p>
          <p>Bar CISUC;</p>
          <p>Bar;</p>
          <p>WC.</p>
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
