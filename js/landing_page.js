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