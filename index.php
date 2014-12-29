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

      <div id="page_container" class="full-page">



        <div id="initial-message" class="text absolute grid-2 grid-h-7">
          <p>Hi, <b>welcome to DEI.</b></p>
          <p>Department of Informatics Engineering<br>- University of Coimbra</p>
        </div>

        <div id="initial-instruction" class="text absolute grid-2 grid-h-12">
          <p>touch to start</p>
          <img class="img-touch" src="./css/images/touch.png" />
        </div>

      </div>

    </div>
  </div>
</div>
</body>
</html>
