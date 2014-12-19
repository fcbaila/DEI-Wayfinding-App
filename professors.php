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

      <div id="page-title" class="text absolute">
        <p>Professors:</p>
      </div>

      <div id="professors-list" class="text bold absolute grid-1">
        <br>
        <br>
        <p>Nila Gemmell;</p>
        <p>Earleen Severa;</p>
        <p>Delphia Walston;</p>
        <p>Ezekiel Luter;</p>
        <p>Danae Arcuri;</p>
        <p>Nila Gemmell;</p>
        <p>Earleen Severa;</p>
        <p>Delphia Walston;</p>
        <p>Ezekiel Luter;</p>
        <p>Danae Arcuri;</p>
      </div>

      <div id="search-professors" class="search-bar grid-5 absolute">
        <form action="demo_form.asp">
          <input class="text search input" id="text-search" type="text" placeholder="search" name="fname">
        </form>
      </div>

      <div id="professors-filter" class="text grid-5 absolute">
        <br>
        <p>A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, X, W, Y, Z</p>
        <br>
        <p>engineering</p>
        <p>design</p>
        <br>

      </div>

      <div id="close-page" class="close text absolute grid-7">
        <img class="img-close" src="../css/images/close.png" />
      </div>

    </div>
  </div>
</div>

</body>
</html>
