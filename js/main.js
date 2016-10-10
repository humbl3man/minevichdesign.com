/*globals
    jQuery, window, document, alert, $, console, $(document)
*/

var run_js = function () {
    'use strict';
    $('.loading').fadeOut();

    function mobile_open() {
        $('#menu').animate({
            right: "0px"
        }, 300);
        $('body').animate({
            right: $('#menu').width()
        }, 300);
    }

    function mobile_close() {
        $('#menu').animate({
            right: "-325px"
        }, 300);
        $('body').animate({
            right: "0px"
        }, 300);
    }

    $(document).keypress(function (event) {
        console.log(event.which);
        if (event.which === 109 && $(window).width() < 641) {
            if (!keyPressed) {
                mobile_open();
                keyPressed = true;
            } else {
                mobile_close();
                keyPressed = false;
            }
        }
    });

    $('#menu-toggle').click(function () {
        mobile_open();
    });

    $('#menu-close').click(function (event) {
        event.preventDefault();
        mobile_close();
    });

    $(window).resize(function () {
        var window_size = $(this).width();

        if (window_size > 1024) {
            $('#menu').css('right', '-300px');
            $('body').css('right', '0px');
        }
    });


    $('#scroll-down, #contact-me').click(function (event) {
        event.preventDefault();
        var target = $($(this).attr('href'));

        $('html,body').animate({
            scrollTop: target.offset().top
        }, 400);
    });

}; // end of Scripts

$(window).on('load', run_js);
window.onbeforeunload = function () {
    $('.loading').show();
};
