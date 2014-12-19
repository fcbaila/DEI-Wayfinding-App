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

      <div id="initial-message" class="text absolute">
        <p>Hi, <b>welcome to DEI.</b></p>
        <p>(Department of Informatics Engineering<br>University of Coimbra)</p>
      </div>

      <div id="find-message" class="text bold absolute">
        <p>What would you like to find?</p>
      </div>

      <div id="find-options" class="text absolute">
        <p id="opt-1" class="opts">— a professor</p>
        <p id="opt-2" class="opts">— a room</p>
        <p id="opt-3" class="opts">— a service</p>
      </div>
<!--
      <div id="search" class="search-bar">
        <form action="demo_form.asp">
          <input class="text search input" id="text-search" type="text" placeholder="search" name="fname">
        </form>
      </div>
-->

      <div id="search" class="text absolute">
        <p>Free Search</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
