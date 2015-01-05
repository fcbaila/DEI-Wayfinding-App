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

        <div id="page-title" class="text absolute grid-h-5 grid-2 type-38">
          <p>Professors:</p>
        </div>

        <div id="professors-list" class="text bold absolute grid-h-7 grid-2 type-32">
          <?php getTeachers(); ?>
        </div>

        <div id="search-professors" class="search-bar grid-28 grid-h-5 absolute type-38">
          <form action="demo_form.asp">
            <p class="type-38 regular"><input class="text search input" id="text-search" type="text" placeholder="search" name="fname"></p>
          </form>
        </div>

        <div id="professors-filter" class="text grid-28 grid-h-7 absolute type-32">
          <p id="inside-p-filter">
            <div class="key" id="a">A</div>
            <div class="key" id="b">B</div>
            <div class="key" id="c">C</div>
            <div class="key" id="d">D</div>
            <div class="key key-break" id="e">E</div>
            <div class="key" id="f">F</div>
            <div class="key" id="g">G</div>
            <div class="key" id="h">H</div>
            <div class="key" id="i">I</div>
            <div class="key key-break" id="j">J</div>
            <div class="key" id="k">K</div>
            <div class="key" id="l">L</div>
            <div class="key" id="m">M</div>
            <div class="key" id="n">N</div>
            <div class="key key-break" id="o">O</div>
            <div class="key" id="p">P</div>
            <div class="key" id="q">Q</div>
            <div class="key" id="r">R</div>
            <div class="key" id="s">S</div>
            <div class="key key-break" id="t">T</div>
            <div class="key" id="u">U</div>
            <div class="key" id="v">V</div>
            <div class="key" id="x">X</div>
            <div class="key" id="y">Y</div>
            <div class="key key-break" id="w">W</div>
            <div class="key" id="z">Z</div>
            <div class="key-2" id="space">" "</div>
            <div class="key-2" id="back"><—</div>
            <div id="clean">clean</div>
          </p>
        </div>
        <div id="professors-filter-2" class="text grid-28 grid-h-7 absolute type-32">
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

        <div id="clock" class="text absolute grid-32 grid-h-2 button type-24">
        </div>

        <div id="close-page" class="close text absolute grid-36 grid-h-2 button">
          <img class="img-close" src="./css/images/close.png" />
        </div>

      </div>

    </div>
  </div>
</div>

<?php
require('core/footer.php');
?>
