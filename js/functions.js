/* Main app*/
var app = {
 firstTouch:true
}

$(document).ready(function() {
  app.init();
})

app.init = function() {
  var self = this;

  $("#wrapper").fadeIn(300);

  app.events();
}

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
    $("#find-message").fadeOut(300);
    $("#find-options").fadeOut(300);
    $("#search").addClass('move-top-search');
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
