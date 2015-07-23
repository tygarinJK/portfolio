$(document).ready(function() {

	/*
	*	Scroll2id
	*/
	$(".nav a[href*='#']").mPageScroll2id();

	/*
	*	Bootastrap ScrollSpy
	*/
	$('#scrollspy').scrollspy({target: '.navbar'});

	/*
	*	MagnificPopup
	*/
	$('.popup').magnificPopup({type:'image'});
	$('.popup_capt').magnificPopup();
	
	/*
	*	Animated
	*/
	$('.head-main__name').animated('fadeInDown', 'fadeOutUp');
	$('.head-main__descr').animated('fadeInUp', 'fadeOutDown');
	$('.sect-head').animated('fadeInUp', 'fadeOutDown');
	$('.about-me').animated('fadeInLeft', 'fadeOutLeft');
	$('.about-img').animated('flipInY', 'flipOutY');
	$('.about-addr').animated('fadeInRight', 'fadeOutRight');
	$('.res_left').animated('fadeInLeft', 'fadeOutLeft');
	$('.res-right').animated('fadeInRight', 'fadeOutRight');
	$('.contact').animated('fadeInLeft', 'fadeOutLeft');
	$('.c-form').animated('fadeInRight', 'fadeOutRight');

	/*
	*	MixItUp
	*/
	$('#port__main').mixItUp();

	/*
	*	BootstrapValidator
	*/
	$('.form__item').not("[type=submit]").jqBootstrapValidation();

	/*
	*	Top menu
	*/
	$("#sandwich, .nav__item").click(function() {
		$("#sandwich, .head-mnu, .nav").toggleClass("active");
	});

	/*
	*	Header
	*/
	var winHeight = $(window).height();
	$('.head-lay').height(winHeight);
	$('.head-main').css('margin-top', (winHeight / 2) - 50);

	/*
	*	Portfolio
	*/
	$('.port__nav__item').click(function() {
		$('.port__nav__item').removeClass('active');
		$(this).addClass('active');
	});
	$('.port__main__item').each(function(i) {
		$(this).find('.port__main__item__hover__btn').attr('href', '#work_it_' + i);
		$(this).find('.port__main__item__capt').attr('id', 'work_it_' + i);
	});

});

/*
*	Preloader
*/
$(window).load(function(){
	$('#preloader').fadeOut('slow',function(){
		$(this).remove();
	});
});