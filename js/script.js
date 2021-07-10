$(document).ready(function() {


    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
         //>=, not <=
        if (scroll >= 60) {
            $(".navbar").addClass("bg-custom");
        } else {
          $(".navbar").removeClass("bg-custom");
        }
    }); 
    });
     (function(){
        "use strict";
    $('.nav a').click(function() {
        $('.navbar-collapse').collapse('hide');
    });
    
    })();