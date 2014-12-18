/* Main app*/
var app = {

}

$(document).ready(function() {
  app.init();

  $("body").click(function() {
    $("#initial-message").addClass('move-top');
    $("#initial-message").fadeOut(600);
    setTimeout(function() {
      $("#find-message").fadeIn(300);
    }, 600);
  });
})

app.init = function() {
  var self = this;
  app.events();
}

app.events = function() {
  var self = this;

}
