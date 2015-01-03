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

        <div class="text absolute grid-h-3 grid-2 type-38">
          <p>Ana Madalena de Sousa Vasconcelos Matos Boavida</p>
        </div>

        <div id="construct_mapa" class="grid-2 grid-h-5">
          <?php showMap(1); ?>
        </div>

        <div class="text absolute grid-h-22 grid-2 type-38">
          <p class="medium">Next office hours:</p>
          <p class="button underline">Quarta-feira, das 9:00 às 10:00 na F1.1</p>
          <p class="button underline">Quarta-feira, das 9:00 às 10:00 na F1.1</p>
          <p class="button underline">Quarta-feira, das 9:00 às 10:00 na F1.1</p>
        </div>

        <div id="clock" class="text absolute grid-32 grid-h-2 button type-24">
        </div>

        <div id="close-page-professor" class="close text absolute grid-36 grid-h-2 button">
          <img class="img-close" src="./css/images/close.png" />
        </div>

      </div>

    </div>
  </div>
</div>

<?php
require('core/footer.php');
?>
