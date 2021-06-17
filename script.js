$(document).ready(function() {


$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll >= 60) {
        $(".navbar").addClass("bg-light");
    } else {
      $(".navbar").removeClass("bg-light");
    }
}); 
});
 (function(){
    "use strict";
$('.nav a').click(function() {
    $('.navbar-collapse').collapse('hide');
});

})();