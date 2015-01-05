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
        <div id="frame" class="absolute">
          <div id="frame-top" class="absolute"></div>
          <div id="frame-right" class="absolute"></div>
          <div id="frame-bottom" class="absolute"></div>
          <div id="frame-left" class="absolute"></div>
        </div>

        <div id="page_container">

          <div id="page-title" class="text absolute grid-h-5 grid-18 type-38">
            <p>Rooms:</p>
          </div>

          <div id="rooms-list" class="text bold absolute grid-h-7 grid-18 type-32">
            <?php getRooms(); ?>
          </div>

          <div id="search-rooms" class="search-bar grid-2 grid-h-3 absolute type-38">
            <form action="demo_form.asp">
              <input class="text search input" id="search_tower" type="text" placeholder="search tower" name="fname">
            </form>
          </div>

          <div id="search-rooms" class="search-bar grid-2 grid-h-5 absolute type-38">
            <form action="demo_form.asp">
              <input class="text search input" id="search_floor" type="text" placeholder="search floor" name="fname">
            </form>
          </div>

          <div id="rooms-filter" class="text grid-2 grid-h-7 absolute type-32">
            <p>
              <div class="key-t key-t-special medium" id="tower">Tower:</b2></div>
              <div class="key-t" id="A">A</div>
              <div class="key-t" id="B">B</div>
              <div class="key-t" id="C">C</div>
              <div class="key-t" id="D">D</div>
              <div class="key-t" id="E">E</div>
              <div class="key-t" id="F">F</div>
              <div class="key-t" id="G">G</div>
            </p>
            <p>
              <div class="key-f key-f-special medium" id="floor"><b2>Floor:</b2></div>
              <div class="key-f" id="0">0</div>
              <div class="key-f" id="1">1</div>
              <div class="key-f" id="2">2</div>
              <div class="key-f" id="3">3</div>
              <div class="key-f" id="4">4</div>
              <div class="key-f" id="5">5</div>
              <div class="key-f" id="6">6</div>
            </p>
          </div>
          <div id="rooms-filter-2" class="text grid-2 grid-h-7 absolute type-32">
            <br>
            <br>
            <br>
            <br>
            <p id="room_clean" class="button underline">clean</p>
            <p id="study-room" class="button underline room-type">study room</p>
            <p id="classroom" class="button underline room-type">classroom</p>
            <p id="meeting" class="button underline room-type">meeting</p>
            <p id="laboratory" class="button underline room-type">laboratory</p>
            <p id="office" class="button underline room-type">office</p>
          </div>

          <div id="floor-message" class="text grid-8 grid-h-7 absolute type-32">
            <br>
            <br>
            <br>
            <br>
            <p>Select a tower first.</p>
          </div>

          <div id="up-arrow-2" class="close text absolute button">
            <img class="img-arrow" src="./css/images/up.png" />
          </div>
          <div id="down-arrow-2" class="close text absolute grid-12 grid-h-15 button">
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
