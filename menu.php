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

        <div id="title-message" class="text absolute grid-h-2 grid-2 type-24">
          <p class="bold">Department of Informatics Engineering</p>
          <p>University of Coimbra</p>
        </div>

        <div id="find-message" class="text bold absolute grid-h-8 grid-2 type-96">
          <p>What would you <br>like to find?</p>
        </div>

        <div id="find-options" class="text medium absolute grid-h-18 grid-2 type-48">
          <div id="opt-1" class="opts">A Professor</div>
          <div id="opt-2" class="opts">A Room</div>
          <div id="opt-3" class="opts">A Service</div>
        </div>

        <div id="search" class="text absolute grid-h-25 grid-2 button type-48">
          <p><b2>Free Search</b2></p>
        </div>

        <div id="clock" class="text absolute grid-31 grid-h-2 button type-24">
        </div>

        <div id="close-page-2" class="close text absolute grid-35 grid-h-2 button">
          <img class="img-close" src="./css/images/close.png" />
        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>
