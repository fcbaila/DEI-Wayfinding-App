/* Main app*/
var app = {
 firstTouch:true
}

$(document).ready(function() {
  app.init();
})

app.init = function() {
  var self = this;
  $("#wrapper").fadeIn(600);

  app.events();
}

updateMap();
var slots = Array();


app.events = function() {
  var self = this;
  $("body").click(function() {
    if (self.firstTouch){
      $("#initial-message").addClass('move-top');
      $("#initial-message").fadeOut(600);

      setTimeout(function() {
        $("#find-message").fadeIn(300);
      }, 600);

      setTimeout(function() {
        $("#opt-1").fadeIn(300);
      }, 900);
      setTimeout(function() {
        $("#opt-2").fadeIn(300);
      }, 1100);
      setTimeout(function() {
        $("#opt-3").fadeIn(300);
      }, 1300);

      setTimeout(function() {
        $("#search").fadeIn(300);
      }, 1900);
      self.firstTouch = false;
    }
  });

  $("#search").click(function() {
    $("#wrapper").fadeOut(300);
    window.location.href = "mapa.php";
    /*
    $("#find-message").fadeOut(300);
    $("#find-options").fadeOut(300);
    $("#search").addClass('move-top-search');
    */
  });

  $("#opt-1").click(function() {
    $("#wrapper").fadeOut(300);
    window.location.href = "professors.php";
  });

  $("#opt-2").click(function() {
    $("#wrapper").fadeOut(300);
    window.location.href = "rooms.php";
  });

  $("#close-page").click(function() {
    $("#wrapper").fadeOut(300);
    window.location.href = "index.php";
  });

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
