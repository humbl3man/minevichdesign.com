!function(t){"use strict";var s=function(s,e){this.el=t(s),this.options=t.extend({},t.fn.typed.defaults,e),this.isInput=this.el.is("input"),this.attr=this.options.attr,this.showCursor=this.isInput?!1:this.options.showCursor,this.elContent=this.attr?this.el.attr(this.attr):this.el.text(),this.contentType=this.options.contentType,this.typeSpeed=this.options.typeSpeed,this.startDelay=this.options.startDelay,this.backSpeed=this.options.backSpeed,this.backDelay=this.options.backDelay,this.strings=this.options.strings,this.strPos=0,this.arrayPos=0,this.stopNum=0,this.loop=this.options.loop,this.loopCount=this.options.loopCount,this.curLoop=0,this.stop=!1,this.cursorChar=this.options.cursorChar,this.shuffle=this.options.shuffle,this.sequence=[],this.build()};s.prototype={constructor:s,init:function(){var t=this;t.timeout=setTimeout(function(){for(var s=0;s<t.strings.length;++s)t.sequence[s]=s;t.shuffle&&(t.sequence=t.shuffleArray(t.sequence)),t.typewrite(t.strings[t.sequence[t.arrayPos]],t.strPos)},t.startDelay)},build:function(){this.showCursor===!0&&(this.cursor=t('<span class="typed-cursor">'+this.cursorChar+"</span>"),this.el.after(this.cursor)),this.init()},typewrite:function(t,s){if(this.stop!==!0){var e=Math.round(70*Math.random())+this.typeSpeed,o=this;o.timeout=setTimeout(function(){var e=0,r=t.substr(s);if("^"===r.charAt(0)){var i=1;/^\^\d+/.test(r)&&(r=/\d+/.exec(r)[0],i+=r.length,e=parseInt(r)),t=t.substring(0,s)+t.substring(s+i)}if("html"===o.contentType){var n=t.substr(s).charAt(0);if("<"===n||"&"===n){var a="",h="";for(h="<"===n?">":";";t.substr(s).charAt(0)!==h;)a+=t.substr(s).charAt(0),s++;s++,a+=h}}o.timeout=setTimeout(function(){if(s===t.length){if(o.options.onStringTyped(o.arrayPos),o.arrayPos===o.strings.length-1&&(o.options.callback(),o.curLoop++,o.loop===!1||o.curLoop===o.loopCount))return;o.timeout=setTimeout(function(){o.backspace(t,s)},o.backDelay)}else{0===s&&o.options.preStringTyped(o.arrayPos);var e=t.substr(0,s+1);o.attr?o.el.attr(o.attr,e):o.isInput?o.el.val(e):"html"===o.contentType?o.el.html(e):o.el.text(e),s++,o.typewrite(t,s)}},e)},e)}},backspace:function(t,s){if(this.stop!==!0){var e=Math.round(70*Math.random())+this.backSpeed,o=this;o.timeout=setTimeout(function(){if("html"===o.contentType&&">"===t.substr(s).charAt(0)){for(var e="";"<"!==t.substr(s).charAt(0);)e-=t.substr(s).charAt(0),s--;s--,e+="<"}var r=t.substr(0,s);o.attr?o.el.attr(o.attr,r):o.isInput?o.el.val(r):"html"===o.contentType?o.el.html(r):o.el.text(r),s>o.stopNum?(s--,o.backspace(t,s)):s<=o.stopNum&&(o.arrayPos++,o.arrayPos===o.strings.length?(o.arrayPos=0,o.shuffle&&(o.sequence=o.shuffleArray(o.sequence)),o.init()):o.typewrite(o.strings[o.sequence[o.arrayPos]],s))},e)}},shuffleArray:function(t){var s,e,o=t.length;if(o)for(;--o;)e=Math.floor(Math.random()*(o+1)),s=t[e],t[e]=t[o],t[o]=s;return t},reset:function(){var t=this;clearInterval(t.timeout);var s=this.el.attr("id");this.el.after('<span id="'+s+'"/>'),this.el.remove(),"undefined"!=typeof this.cursor&&this.cursor.remove(),t.options.resetCallback()}},t.fn.typed=function(e){return this.each(function(){var o=t(this),r=o.data("typed"),i="object"==typeof e&&e;r||o.data("typed",r=new s(this,i)),"string"==typeof e&&r[e]()})},t.fn.typed.defaults={strings:["These are the default values...","You know what you should do?","Use your own!","Have a great day!"],typeSpeed:0,startDelay:0,backSpeed:0,shuffle:!1,backDelay:500,loop:!1,loopCount:!1,showCursor:!0,cursorChar:"|",attr:null,contentType:"html",callback:function(){},preStringTyped:function(){},onStringTyped:function(){},resetCallback:function(){}}}(window.jQuery);
var main = function(){
	// contact form validation
	$('#contact-form').validate({
		onkeyup : true,
		validClass : 'success',
		errorElement : 'div',
        errorClass : 'invalid',
		rules 	: {
			name 	: {
				required	: true,
				minlength	: 2
			},
			email 	: {
				required	: true,
				email		: true
			},
			message : {
				required	: true,
				minlength   : 10
			}
		},
		messages : {
			name	: {
				required 	: "Name is required",
				minlength	: $.validator.format("Name must be at least {0} characters") 
			},
			email	: {
				required	: "Email is required",
				email		: "Incorrect email format"
			},
			message : {
				required	: "Message can't be empty",
				minlength   : $.validator.format("Message must be minimum of {0} characters")
			}
		},
		submitHandler : function(form){
			var formData = $(form).serialize();


			$.ajax({
				method: 'POST',
				url : '../process/send_email.php',
				data: formData,
				dataType: "text",
				success: function(response){
					$(form).before("<div class='success-msg'>" + response + "</div>");
					$(form).hide();
				}
			});

		},
		invalidHandler : function(event, validator){
			// execute code if form is invalid.
		}
	});
}; // end main

$(document).ready(main);
$(document).ready(function(){
    
    $('hero-img').delay(2000).addClass('animated fadeInUp');
    
	$('.typed-script').typed({
		strings : ['CSS Developer', 'JavaScript Developer' , 'Problem Solver', 'Front End Developer'  ],
		typeSpeed : 65,
		cursorChar : "|"
	});

	// svg fallback on older browsers
	if(!Modernizr.svg){
		$('.profile-illustration').attr('src','img/mini-stan.png');
	}

	// profile illustration animation

	$(document).scroll(function(){
		var top = $(this).scrollTop();
		var vp_width = $(this).width();
		if(top > 50 && vp_width > 641){
			$('.profile-illustration').addClass('animated fadeInLeft');
		}
	});
});
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
