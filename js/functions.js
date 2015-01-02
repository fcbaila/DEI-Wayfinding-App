/* Main app*/
var app = {
  page: " ",
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
  self.page = location.pathname.substring(1);
  /*UPDATE CLOCK-----------------*/
  if (self.page != "index.php"){
    app.updateClock();
    setInterval(function() {
      app.updateClock();
    }, 1000);
  }
  /*TRANSITIONS-----------------*/
  $("#page_container").fadeIn(800);
  setTimeout(function() {
    $("#find-message").fadeIn(300);
  }, 300);
  setTimeout(function() {
    $("#opt-1").fadeIn(300);
  }, 600);
  setTimeout(function() {
    $("#opt-2").fadeIn(300);
  }, 800);
  setTimeout(function() {
    $("#opt-3").fadeIn(300);
  }, 1000);
  setTimeout(function() {
    $("#search").fadeIn(300);
  }, 1700);

  app.events();
  app.keyboard();
}

updateMap();
var slots = Array();

app.events = function() {
  var self = this;

  /*FILTERS---------------------*/

  $(".key").click(function() {
    updateTeachers();
  });

  $(".key-2").click(function() {
    updateTeachers();
  });

  $("#clean").click(function() {
    clearTeachers();
  });

  $("#filter_designer").click(function() {
    filterTeachers(2);
  });

  $("#filter_engineer").click(function() {
    filterTeachers(1);
  });

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

  $("#close-page").click(function() {
    $("#page_container").fadeOut(300);
    window.location.href = "menu.php";
  });
  $("#close-page-2").click(function() {
    $("#page_container").fadeOut(300);
    window.location.href = "index.php";
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
    updateMap();
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
  var engineer = false;
  var designer = false;
  $("#engineer").click(function() {
    if(engineer == false){
      $('#engineer').css({
        "font-family": "Ed-medium"
      });
      $('#designer').css({
        "font-family": "Ed-regular"
      });
      engineer = true;
      designer = false;
    } else{
      $('#engineer').css({
        "font-family": "Ed-regular"
      });
      $('#designer').css({
        "font-family": "Ed-regular"
      });
      engineer = false;
    }
  });
  $("#designer").click(function() {
    if(designer == false){
      $('#designer').css({
        "font-family": "Ed-medium"
      });
      $('#engineer').css({
        "font-family": "Ed-regular"
      });
      designer = true;
      engineer = false;
    } else{
      $('#designer').css({
        "font-family": "Ed-regular"
      });
      $('#engineer').css({
        "font-family": "Ed-regular"
      });
      designer = false;
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

function toTitleCase(str) {
  return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}


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
      $(".teacher_"+i).fadeIn(100);
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
