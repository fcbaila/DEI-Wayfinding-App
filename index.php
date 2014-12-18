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
        for($i = 1; $i <= 7; $i++) {
          echo '<div class="grid"></div>';
        }
        ?>
      </div>

      <div id="initial-message" class="at-center text absolute">
        <p>Hi, <b>wellcome to DEI.</b></p>
      </div>

      <div id="find-message" class="at-center text bold absolute">
        <p>What would you like to find?</p>
      </div>

    </div>
  </div>
</div>

</body>
</html>
