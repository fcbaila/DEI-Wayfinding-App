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

        <div id="page-title" class="text absolute grid-h-3 grid-1">
          <p>Teachers:</p>
        </div>

        <div id="professors-list" class="text bold absolute grid-h-4 grid-1">
          <br>
          <?php getTeachers(); ?>
        </div>

        <div id="search-professors" class="search-bar grid-15 grid-h-3 absolute">
          <form action="demo_form.asp">
            <input class="text search input" id="text-search" type="text" placeholder="search" name="fname">
          </form>
        </div>

        <div id="professors-filter" class="text grid-15 grid-h-4 absolute">
          <p id="inside-p-filter">
            <div class="key" id="a">A</div>
            <div class="key" id="b">B</div>
            <div class="key" id="c">C</div>
            <div class="key" id="d">D</div>
            <div class="key" id="e">E</div>
            <div class="key" id="f">F</div>
            <div class="key" id="g">G</div>
            <div class="key" id="h">H</div>
            <div class="key" id="i">I</div>
            <div class="key" id="j">J</div>
            <div class="key" id="k">K</div>
            <div class="key" id="l">L</div>
            <div class="key" id="m">M</div>
            <div class="key" id="n">N</div>
            <div class="key" id="o">O</div>
            <div class="key" id="p">P</div>
            <div class="key" id="q">Q</div>
            <div class="key" id="r">R</div>
            <div class="key" id="s">S</div>
            <div class="key" id="t">T</div>
            <div class="key" id="u">U</div>
            <div class="key" id="v">V</div>
            <div class="key" id="x">X</div>
            <div class="key" id="y">Y</div>
            <div class="key" id="w">W</div>
            <div class="key" id="z">Z</div>
            <div class="key-2" id="space">" "</div>
            <div class="key-2" id="back"><—</div>
            <div id="clean">clean</div>
          </p>
        </div>
        <div id="professors-filter-2" class="text grid-15 grid-h-4 absolute">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <p class="button underline" id="filter_engineer">engineering</p>
          <p class="button underline" id="filter_designer">design</p>
        </div>

        <div id="up-arrow" class="close text absolute button">
          <img class="img-arrow" src="./css/images/up.png" />
        </div>
        <div id="down-arrow" class="close text absolute button">
          <img class="img-arrow" src="./css/images/down.png" />
        </div>

        <div id="clock" class="close text absolute grid-16 grid-h-1 button">
        </div>

        <div id="close-page" class="close text absolute grid-20 button">
          <img class="img-close" src="./css/images/close.png" />
        </div>

      </div>

    </div>
  </div>
</div>

</body>
</html>
