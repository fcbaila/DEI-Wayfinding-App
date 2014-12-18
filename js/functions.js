/* Main app*/
var app = {

}

$(document).ready(function() {
  app.init();
})

app.init = function() {
  var self = this;
  app.events();
}

app.events = function() {
  var self = this;
  $("body").click(function() {
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
  });
}
