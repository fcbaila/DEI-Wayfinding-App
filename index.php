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

      <div id="initial-message" class="text absolute grid-2 grid-h-8">
        <p>Hi, <b>welcome to DEI.</b></p>
        <p>Department of Informatics Engineering<br>- University of Coimbra</p>
      </div>

    </div>
  </div>
</div>
</body>
</html>
