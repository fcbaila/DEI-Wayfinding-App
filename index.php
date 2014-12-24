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

      <div id="find-message" class="text bold absolute grid-h-2 grid-2">
        <p>What would you like to find?</p>
      </div>

      <div id="find-options" class="text absolute grid-h-5 grid-2">
        <p id="opt-1" class="opts">A Professor</p>
        <p id="opt-2" class="opts">A Room</p>
        <p id="opt-3" class="opts">A Service</p>
      </div>

      <div id="search" class="text absolute grid-h-15 grid-2 button">
        <p><b2>› Free Search</b2></p>
      </div>

    </div>
  </div>
</div>

</body>
</html>
