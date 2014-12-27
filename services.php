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
        for($i = 1; $i <= 22; $i++) {
          echo '<div class="grid"></div>';
        }
        ?>

        <?php
        for($i = 1; $i <= 17; $i++) {
          echo '<div class="grid-h"></div>';
        }
        ?>
      </div>

      <div id="page_container">

        <div id="page-title" class="text absolute grid-h-2 grid-2">
          <p>Services:</p>
        </div>

        <div id="services-list" class="text bold absolute grid-h-3 grid-2">
          <br>
          <p>GAPI — Gabinete de Apoio a Projectos / Mobilidade;</p>
          <p>Helpdesk;</p>
          <p>Secretary;</p>
          <p>NEI — Computer Student Center;</p>
          <p>Bar CISUC;</p>
          <p>Bar;</p>
          <p>WC.</p>
        </div>

        <div id="clock" class="close text absolute grid-16 grid-h-1 button">
        </div>

        <div id="close-page" class="close text absolute grid-20 button">
          <img class="img-close" src="../css/images/close.png" />
        </div>

      </div>

    </div>
  </div>
</div>

</body>
</html>
