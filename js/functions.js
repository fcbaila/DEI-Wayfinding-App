/* Main app*/
var app = {
  page: " ",
  previousPage: " ",
  currentTime: 0,
  currentHours: 0,
  currentMinutes: 0,
  timeOfDay: " ",
  currentTimeString: " "
}

$(document).ready(function() {
  app.init();
})

app.init = function() {
  var self = this;
  var url = window.location.pathname;
  var previousUrl = document.referrer;
  self.page = url.substring(url.lastIndexOf('/')+1);
  self.previousPage = previousUrl.substring(previousUrl.lastIndexOf('/')+1);
/*UPDATE CLOCK-----------------*/
  if (self.page != "index.php"){
    app.updateClock();
    setInterval(function() {
      app.updateClock();
    }, 1000);
  }
/*TRANSITIONS-----------------*/
  $("#page_container").fadeIn(800);
  if (self.previousPage == "index.php"){
    setTimeout(function() {
      $("#find-message").fadeIn(600);
    }, 300);
    setTimeout(function() {
      $("#opt-1").fadeIn(400);
    }, 600);
    setTimeout(function() {
      $("#opt-2").fadeIn(400);
    }, 900);
    setTimeout(function() {
      $("#opt-3").fadeIn(400);
    }, 1200);
    setTimeout(function() {
      $("#search").fadeIn(400);
    }, 1600);
  } else{
    $("#find-message").fadeIn(300);
    $("#opt-1").fadeIn(300);
    $("#opt-2").fadeIn(300);
    $("#opt-3").fadeIn(300);
    $("#search").fadeIn(300);
  }
/*PAGE LOG-OUT-----------------*/
  if( self.page == "menu.php" && self.page != "index.php"){
    setTimeout(function() {
      window.location.href = "index.php";
    }, 60000);
  }
  else if (self.page != "menu.php" && self.page != "index.php") {
    setTimeout(function() {
      window.location.href = "index.php";
    }, 300000);
  }
/*SLOTS POPUP-----------------*/
  $('.tooltipsed-left').tooltipster({
    animation: 'grow',
    delay: 10,
    theme: 'tooltipster-default',
    position: 'top-left',
    touchDevices: false,
    trigger: 'click'
  });
  $('.tooltipsed-top').tooltipster({
    animation: 'grow',
    delay: 10,
    theme: 'tooltipster-default',
    position: 'top',
    touchDevices: false,
    trigger: 'click'
  });
  $('.tooltipsed-right').tooltipster({
    animation: 'grow',
    delay: 10,
    theme: 'tooltipster-default',
    position: 'top-right',
    touchDevices: false,
    trigger: 'click'
  });

  app.events();
  app.keyboard();
}

var slots = Array();

app.events = function() {
  var self = this;

  /*TRANSITIONS-----------------*/
  $(".full-page").click(function() {
    $("#initial-message").addClass('move-top');
    $("#initial-message").fadeOut(600);
    $("#initial-instruction").fadeOut(600);
    setTimeout(function() {
      window.location.href = "menu.php";
    }, 700);
  });
  /*REDIRECTIONS-----------------*/
  $("#search").click(function() {
    $("#page_container").fadeOut(300);
    window.location.href = "mapa.php";
  });

  $("#opt-1").click(function() {
    $("#page_container").fadeOut(300);
    window.location.href = "professors.php";
  });
  $("#opt-2").click(function() {
    $("#page_container").fadeOut(300);
    window.location.href = "rooms.php";
  });
  $("#opt-3").click(function() {
    $("#page_container").fadeOut(300);
    window.location.href = "services.php";
  });

  $(".teacher_id").click(function() {
    $("#page_container").fadeOut(300);
    window.location.href = "professor-single.php";
  });

  $(".room_id").click(function() {
    $("#page_container").fadeOut(300);
    window.location.href = "room-single.php";
  });

  $(".service").click(function() {
    $("#page_container").fadeOut(300);
    window.location.href = "service-single.php";
  });

  $("#close-page").click(function() {
    $("#page_container").fadeOut(300);
    window.location.href = "menu.php";
  });
  $("#close-page-2").click(function() {
    $("#page_container").fadeOut(300);
    window.location.href = "index.php";
  });
  $("#close-page-professor").click(function() {
    $("#page_container").fadeOut(300);
    window.location.href = "professors.php";
  });
  $("#close-page-room").click(function() {
    $("#page_container").fadeOut(300);
    window.location.href = "rooms.php";
  });
  $("#close-page-service").click(function() {
    $("#page_container").fadeOut(300);
    window.location.href = "services.php";
  });
  /*SCROLL--------------------------*/
  var anchor = 0;
  $("#down-arrow").click(function() {
    anchor += 600;
    $("#professors-list").animate({scrollTop: anchor});
  });
  $("#up-arrow").click(function() {
    anchor -= 600;
    if(anchor < 600){
      anchor = 0;
    }
    $("#professors-list").animate({scrollTop: anchor});
  });

  $("#down-arrow-2").click(function() {
    anchor += 600;
    $("#rooms-list").animate({scrollTop: anchor});
  });
  $("#up-arrow-2").click(function() {
    anchor -= 600;
    if(anchor < 600){
      anchor = 0;
    }
    $("#rooms-list").animate({scrollTop: anchor});
  });
}

app.keyboard = function() {

  var input = document.getElementById("text-search");
  var input_tower = document.getElementById("search_tower");
  var input_floor = document.getElementById("search_floor");

  /*KEYBOARD-----------------*/
  $(".slot_front").click(function() {
    var block = $(this).attr("block");
    var floor = $(this).attr("floor");
    block = block.charAt(0);
    changeView(block, floor);
  });

  $(".key").click(function() {
    input.value += this.id;
  });
  $("#space").click(function() {
    input.value += " ";
  });
  $("#back").click(function() {
    input.value = input.value.slice(0, -1);
  });
  $("#clean").click(function() {
    input.value = "";
  });
  /*KEYBOARD-MAP-----------------*/
  $(".key-m").click(function() {
    input.value += this.id;
    //updateMap();
  });
  /*KEYBOARD-ROOMS---------------*/
  var tower = false;
  var floor = false;
  $(".key-t").click(function() {
    filterTower();
    if (tower == false){
      input_tower.value += this.id;
      $('#' + this.id).css({
        "font-family": "Ed-bold"
      });
      tower = true;
    }
  });
  $(".key-f").click(function() {
    filterFloor();
    if (floor == false){
      input_floor.value += this.id;
      $('#' + this.id).css({
        "font-family": "Ed-bold"
      });
      floor = true;
    }
  });
  $("#room_clean").click(function() {
    input_tower.value = "";
    input_floor.value = "";
    $('.key-t').css({
      "font-family": "Ed-regular"
    });
    $('.key-f').css({
      "font-family": "Ed-regular"
    });
    tower = false;
    floor = false;
  });
  /*FILTER-----------------*/
  $(".key").click(function() {
    updateTeachers();
  });
  $(".key-2").click(function() {
    updateTeachers();
  });

  var engineer = false;
  var designer = false;
  $("#clean").click(function() {
    clearTeachers();
    $('#filter_designer').css({
      "font-family": "Ed-regular"
    });
    $('#filter_engineer').css({
      "font-family": "Ed-regular"
    });
    engineer = false;
    designer = false;
  });
  $("#filter_designer").click(function() {
    if(designer == false){
      $(".teacher_id").fadeOut(0);
      $('#filter_designer').css({
        "font-family": "Ed-bold"
      });
      $('#filter_engineer').css({
        "font-family": "Ed-regular"
      });
      designer = true;
      engineer = false;
      $(".2").fadeIn(600);
      $(".3").fadeIn(600);
    } else{
      $(".teacher_id").fadeOut(0);
      $('#filter_designer').css({
        "font-family": "Ed-regular"
      });
      $('#filter_engineer').css({
        "font-family": "Ed-regular"
      });
      designer = false;
      $(".teacher_id").fadeIn(600);
    }
  });
  $("#filter_engineer").click(function() {
    if(engineer == false){
      $(".teacher_id").fadeOut(0);
      $('#filter_engineer').css({
        "font-family": "Ed-bold"
      });
      $('#filter_designer').css({
        "font-family": "Ed-regular"
      });
      engineer = true;
      designer = false;
      $(".1").fadeIn(600);
      $(".3").fadeIn(600);
    } else{
      $(".teacher_id").fadeOut(0);
      $('#filter_engineer').css({
        "font-family": "Ed-regular"
      });
      $('#filter_designer').css({
        "font-family": "Ed-regular"
      });
      engineer = false;
      $(".teacher_id").fadeIn(600);
    }
  });
  var study = false;
  var service = false;
  var classroom = false;
  var office = false;
  var laboratory = false;
  var staff = false;
  var wc = false;
  var service = false;
  $("#room_clean").click(function() {
    $('.room-type').css({
      "font-family": "Ed-regular"
    });
    $(".room_id").fadeOut(0);
    study = false;
    classroom = false;
    meeting = false;
    laboratory = false;
    service = false;
    office = false;
    staff = false;
    wc = false;
    $(".room_id").fadeIn(600);
  });
  $("#study-room").click(function() {
    if (study == false){
      $('.room-type').css({
        "font-family": "Ed-regular"
      });
      $(".room_id").fadeOut(0);
      study = true;
      classroom = false;
      meeting = false;
      laboratory = false;
      service = false;
      office = false;
      staff = false;
      wc = false;
      $('#study-room').css({
        "font-family": "Ed-bold"
      });
      $(".study").fadeIn(600);
    } else{
      $(".room_id").fadeOut(0);
      study = false;
      $('#study-room').css({
        "font-family": "Ed-regular"
      });
      $(".room_id").fadeIn(600);
    }
  });
  $("#classroom").click(function() {
    if (classroom == false){
      $('.room-type').css({
        "font-family": "Ed-regular"
      });
      $(".room_id").fadeOut(0);
      study = false;
      classroom = true;
      meeting = false;
      laboratory = false;
      service = false;
      office = false;
      staff = false;
      wc = false;
      $('#classroom').css({
        "font-family": "Ed-bold"
      });
      $(".classroom").fadeIn(600);
    } else{
      $(".room_id").fadeOut(0);
      classroom = false;
      $('#classroom').css({
        "font-family": "Ed-regular"
      });
      $(".room_id").fadeIn(600);
    }
  });
  $("#meeting").click(function() {
    if (meeting == false){
      $('.room-type').css({
        "font-family": "Ed-regular"
      });
      $(".room_id").fadeOut(0);
      study = false;
      classroom = false;
      meeting = true;
      laboratory = false;
      service = false;
      office = false;
      staff = false;
      wc = false;
      $('#meeting').css({
        "font-family": "Ed-bold"
      });
      $(".meeting").fadeIn(600);
    } else{
      $(".room_id").fadeOut(0);
      meeting = false;
      $('#meeting').css({
        "font-family": "Ed-regular"
      });
      $(".room_id").fadeIn(600);
    }
  });
  $("#laboratory").click(function() {
    if (laboratory == false){
      $('.room-type').css({
        "font-family": "Ed-regular"
      });
      $(".room_id").fadeOut(0);
      study = false;
      classroom = false;
      meeting = false;
      laboratory = true;
      service = false;
      office = false;
      staff = false;
      wc = false;
      $('#laboratory').css({
        "font-family": "Ed-bold"
      });
      $(".laboratory").fadeIn(600);
    } else{
      $(".room_id").fadeOut(0);
      laboratory = false;
      $('#laboratory').css({
        "font-family": "Ed-regular"
      });
      $(".room_id").fadeIn(600);
    }
  });
  $("#service").click(function() {
    if (service == false){
      $('.room-type').css({
        "font-family": "Ed-regular"
      });
      $(".room_id").fadeOut(0);
      study = false;
      classroom = false;
      meeting = false;
      laboratory = false;
      service = true;
      office = false;
      staff = false;
      wc = false;
      $('#service').css({
        "font-family": "Ed-bold"
      });
      $(".service").fadeIn(600);
    } else{
      $(".room_id").fadeOut(0);
      laboratory = false;
      $('#service').css({
        "font-family": "Ed-regular"
      });
      $(".room_id").fadeIn(600);
    }
  });
  $("#office").click(function() {
    if (office == false){
      $('.room-type').css({
        "font-family": "Ed-regular"
      });
      $(".room_id").fadeOut(0);
      study = false;
      classroom = false;
      meeting = false;
      laboratory = false;
      service = false;
      office = true;
      staff = false;
      wc = false;
      $('#office').css({
        "font-family": "Ed-bold"
      });
      $(".offices").fadeIn(600);
    } else{
      $(".room_id").fadeOut(0);
      laboratory = false;
      $('#office').css({
        "font-family": "Ed-regular"
      });
      $(".room_id").fadeIn(600);
    }
  });
  $("#staff").click(function() {
    if (staff == false){
      $('.room-type').css({
        "font-family": "Ed-regular"
      });
      $(".room_id").fadeOut(0);
      study = false;
      classroom = false;
      meeting = false;
      laboratory = false;
      service = false;
      office = false;
      staff = true;
      wc = false;
      $('#staff').css({
        "font-family": "Ed-bold"
      });
      $(".staff").fadeIn(600);
    } else{
      $(".room_id").fadeOut(0);
      staff = false;
      $('#staff').css({
        "font-family": "Ed-regular"
      });
      $(".room_id").fadeIn(600);
    }
  });
  $("#bathroom").click(function() {
    if (wc == false){
      $('.room-type').css({
        "font-family": "Ed-regular"
      });
      $(".room_id").fadeOut(0);
      study = false;
      classroom = false;
      meeting = false;
      laboratory = false;
      service = false;
      office = false;
      staff = false;
      wc = true;
      $('#bathroom').css({
        "font-family": "Ed-bold"
      });
      $(".bathroom").fadeIn(600);
    } else{
      $(".room_id").fadeOut(0);
      wc = false;
      $('#bathroom').css({
        "font-family": "Ed-regular"
      });
      $(".room_id").fadeIn(600);
    }
  });
}

app.updateClock = function() {
  /*CLOCK-----------------*/
  self.currentTime = new Date ( );
  self.currentHours = self.currentTime.getHours ( );
  self.currentMinutes = self.currentTime.getMinutes ( );
  self.currentMinutes = ( self.currentMinutes < 10 ? "0" : "" ) + self.currentMinutes;
  self.timeOfDay = ( self.currentHours < 12 ) ? "AM" : "PM";
  self.currentTimeString = self.currentHours + ":" + self.currentMinutes + " " + self.timeOfDay;
  document.getElementById("clock").firstChild.nodeValue = self.currentTimeString;
}
/*CLICK ANIMATION-----------------*/
function createClick(event) {
  var x = event.clientX;
  var y = event.clientY;
  var posX = x - 25;
  var posY = y - 25;
  var div = document.createElement("div");
  div.style.position = 'absolute';
  div.style.left = posX +'px';
  div.style.top = posY +'px';
  div.className = "click";
  document.body.appendChild(div);
  setTimeout(function() {
    document.body.removeChild(div);
  }, 400);
}

function toTitleCase(str) {
  return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}

function changeView(block, floor) {
  setTimeout(function() {
    var map_count = $('#construct_mapa > .mapa_slot').length;
    for (var i = 1; i <= map_count; i++) {

      var block_compare = $(".slot_front_"+i).attr("block");
      if(!block_compare) {
        $('.slot_front_'+i).animate({opacity: '0.3'}, 600);
      } else {
        if(block_compare.indexOf(block) > -1) {
          $('.slot_front_'+i).animate({opacity: '1.0'}, 600);
        } else {
          $('.slot_front_'+i).animate({opacity: '0.3'}, 600);
        }
      }
    }
  }, 0);
}
/*
function updateMap() {
  setTimeout(function() {
    var map_count = $('#construct_mapa > .mapa_slot').length;
    var string = $('.search_area').val();

    for (var i = 1; i <= map_count; i++) {
      var slot = $(".slot_"+i).attr("slot");
      if(slot.substring(0, string.length) == string) {
        $('.slot_'+i).animate({opacity: '1.0'}, 300);
      } else {
        $('.slot_'+i).animate({opacity: '0.2'}, 300);
      }
    }
  }, 0);
}
*/

function updateTeachers() {
  setTimeout(function() {
    var string = $('.search').val();
    var teacher_count = $('#professors-list > .teacher_id').length;

    for (var i = 1; i <= teacher_count; i++) {
      var teacher_string = $(".teacher_"+i).attr("teacher_name");

      if ( teacher_string.indexOf('ó') > -1 ) { teacher_string = teacher_string.replace(/ó/g, "o"); }
      if ( teacher_string.indexOf('á') > -1 ) { teacher_string = teacher_string.replace(/á/g, "a"); }
      if ( teacher_string.indexOf('â') > -1 ) { teacher_string = teacher_string.replace(/â/g, "a"); }
      if ( teacher_string.indexOf('ã') > -1 ) { teacher_string = teacher_string.replace(/ã/g, "a"); }
      if ( teacher_string.indexOf('é') > -1 ) { teacher_string = teacher_string.replace(/é/g, "e"); }
      if ( teacher_string.indexOf('í') > -1 ) { teacher_string = teacher_string.replace(/í/g, "i"); }
      if ( teacher_string.indexOf('Á') > -1 ) { teacher_string = teacher_string.replace(/Á/g, "A"); }

      var uppercase_string = toTitleCase(string);
      var split_string = uppercase_string.split(" ");

      for (var j = 0; j < split_string.length; j++) {
        var current_string = split_string[j];
        var teacher_search = teacher_string.search(current_string);
        if(teacher_search < 0) {
          $(".teacher_"+i).fadeOut(100);
          break;
        } else {
          $(".teacher_"+i).fadeIn(100);
        }
      }
    }

  }, 0);
}

function filterTeachers(filter) {
  clearTeachers();
  setTimeout(function() {
    var teacher_count = $('#professors-list > .teacher_id').length;

    for (var i = 1; i <= teacher_count; i++) {
      var teacher_filter = $(".teacher_"+i).attr("teacher_filter");
      if(teacher_filter != filter && teacher_filter != 3) {
        $(".teacher_"+i).fadeOut(100);
      }
    }

  }, 0);
}

function clearTeachers() {
  setTimeout(function() {
    var teacher_count = $('#professors-list > .teacher_id').length;

    $('.search').val("");
    for (var i = 1; i <= teacher_count; i++) {
      $(".teacher_"+i).fadeIn(600);
    }

  }, 0);
}


function filterTower() {
  setTimeout(function() {
    var room_count = $('#rooms-list > .room_id').length;
    var string = $('#search_tower').val();
    for (var i = 1; i <= room_count; i++) {
      var room_filter = $(".room_"+i).attr("room_block");
      if(room_filter != string) {
        $(".room_"+i).fadeOut(100);
      }
    }

  }, 0);
}

function filterFloor() {
  setTimeout(function() {
    var room_count = $('#rooms-list > .room_id').length;
    var string = $('#search_floor').val();
    for (var i = 1; i <= room_count; i++) {
      var room_filter = $(".room_"+i).attr("room_floor");
      if(room_filter != string) {
        $(".room_"+i).fadeOut(100);
      }
    }

  }, 0);
}
