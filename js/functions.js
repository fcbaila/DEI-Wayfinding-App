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

/*TRANSITIONS-----------------*/
  $("body").click(function() {
    if (self.page == "index.php"){
      $("#initial-message").addClass('move-top');
      $("#initial-message").fadeOut(600);
      $("#initial-instruction").fadeOut(600);
      setTimeout(function() {
        window.location.href = "menu.php";
      }, 700);
    }
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
/*KEYBOARD-ROOMS-----------------*/
var tower = false;
var floor = false;
  $(".key-t").click(function() {
    if (tower == false){
      input.value += this.id;
      $('#' + this.id).css({
        "font-family": "Ed-bold"
      });
      tower = true;
    }
  });
  $(".key-f").click(function() {
    if (floor == false){
      input.value += this.id;
      $('#' + this.id).css({
        "font-family": "Ed-bold"
      });
      floor = true;
    }
  });
  $("#clean").click(function() {
    input.value = "";
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
      console.log('room '+string);
    }, 0);
  }

  function updateTeachers() {
    setTimeout(function() {
      var teacher_count = $('#professors-list > .teacher_name').length;
      var string = $('.search').val();

      for (var i = 1; i <= 10; i++) {
        var teacher_string = $(".teacher_"+i).attr("teacher_name");
        var teacher_search = teacher_string.search(string);
        if(teacher_search < 0) {
          console.log('yes');
        } else {
          console.log('no');
        }
      }

    }, 0);
  }
