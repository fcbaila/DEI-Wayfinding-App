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

      <div id="page-title" class="text absolute grid-h-2 grid-2">
        <p>Rooms:</p>
      </div>

      <div id="rooms-list" class="text bold absolute grid-h-3 grid-2">
        <p>E 4.1;</p>
        <p>E 4.2;</p>
        <p>E 4.3;</p>
        <p>E 4.4;</p>
        <p>E 4.5;</p>
        <p>E 4.6;</p>
        <p>E 4.7;</p>
      </div>

      <div id="search-rooms" class="search-bar grid-14 grid-h-2 absolute">
        <form action="demo_form.asp">
          <input class="text search input" id="text-search" type="text" placeholder="search" name="fname">
        </form>
      </div>

      <div id="rooms-filter" class="text grid-14 grid-h-3 absolute">
        <p><b2>Tower:</b2> A, B, C, D, E, F, G</p>
        <p><b2>Floor:</b2> 1, 2, 3, 4, 5, 6</p>
      </div>

      <div id="close-page" class="close text absolute grid-20">
        <img class="img-close" src="../css/images/close.png" />
      </div>

    </div>
  </div>
</div>

</body>
</html>
