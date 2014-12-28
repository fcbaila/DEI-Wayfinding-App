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

        <div id="page-title" class="text absolute grid-h-3 grid-2">
          <p>Rooms:</p>
        </div>

        <div id="rooms-list" class="text bold absolute grid-h-4 grid-2">
          <br>
          <p>E 4.1;</p>
          <p>E 4.2;</p>
          <p>E 4.3;</p>
          <p>E 4.4;</p>
          <p>E 4.5;</p>
          <p>E 4.6;</p>
          <p>E 4.7;</p>
          <p>E 4.1;</p>
          <p>E 4.2;</p>
          <p>E 4.3;</p>
          <p>E 4.4;</p>
          <p>E 4.5;</p>
          <p>E 4.6;</p>
          <p>E 4.7;</p>
          <p>E 4.1;</p>
          <p>E 4.2;</p>
          <p>E 4.3;</p>
          <p>E 4.4;</p>
          <p>E 4.5;</p>
          <p>E 4.6;</p>
          <p>E 4.7;</p>
          <p>E 4.1;</p>
          <p>E 4.2;</p>
          <p>E 4.3;</p>
          <p>E 4.4;</p>
          <p>E 4.5;</p>
          <p>E 4.6;</p>
          <p>E 4.7;</p>
        </div>

        <div id="search-rooms" class="search-bar grid-14 grid-h-3 absolute">
          <form action="demo_form.asp">
            <input class="text search input" id="text-search" type="text" placeholder="search" name="fname">
          </form>
        </div>

        <div id="rooms-filter" class="text grid-14 grid-h-3 absolute">
          <br>
          <p>
            <div class="key-t" id="tower"><b2>Tower:</b2></div>
            <div class="key-t" id="A">A</div>
            <div class="key-t" id="B">B</div>
            <div class="key-t" id="C">C</div>
            <div class="key-t" id="D">D</div>
            <div class="key-t" id="E">E</div>
            <div class="key-t" id="F">F</div>
            <div class="key-t" id="G">G</div>
          </p>
          <p>
            <div class="key-f" id="room"><b2>Floor:</b2></div>
            <div class="key-f" id="1">1</div>
            <div class="key-f" id="2">2</div>
            <div class="key-f" id="3">3</div>
            <div class="key-f" id="4">4</div>
            <div class="key-f" id="5">5</div>
            <div class="key-f" id="6">6</div>
          </p>
        </div>
        <div id="rooms-filter-2" class="text grid-14 grid-h-3 absolute">
          <br>
          <br>
          <br>
          <br>
          <br>
          <p id="clean">clean</p>
        </div>

        <div id="up-arrow-2" class="close text absolute button">
          <img class="img-arrow" src="../css/images/up.png" />
        </div>
        <div id="down-arrow-2" class="close text absolute grid-12 grid-h-15 button">
          <img class="img-arrow" src="../css/images/down.png" />
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
