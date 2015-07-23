$(document).ready(function() {
	
	/*
	*	Menu Array
	*/

	var menuLinks = new Array;
	var i = 0;
	
	$('.nav .nav__item-link').each(function() {
		menuLinks[i] = $(this);
		i++;
	});


	/*
	*	Dash mowement
	*/
	
	var 	dashM = $('.mid-orb__dash').css('margin'),
			dashW = $('.mid-orb__dash').width();
	function dashHoverPos(mar, wid) {
		$('.mid-orb__dash').css({
		'margin': mar,
		'width': wid
		});
	}
	function dashDfltPos() {
		$('.mid-orb__dash').css({
		'margin': dashM,
		'width': dashW
		});	
	}
	menuLinks[0].hover(function() {
		dashHoverPos('0 0 0 -233px', '42px');
	}, function() {
		dashDfltPos();
	});
	menuLinks[1].hover(function() {
		dashHoverPos('0 0 0 -153px', '59px');
	}, function() {
		dashDfltPos();
	});
	menuLinks[2].hover(function() {
		dashHoverPos('0 0 0 83px', '45px');
	}, function() {
		dashDfltPos();
	});
	menuLinks[3].hover(function() {
		dashHoverPos('0 0 0 168px', '60px');
	}, function() {
		dashDfltPos();
	});

	/*
	*	Portpholio
	*/

	var 	cLeft = $('.port-nav__control-left'),
			cRight = $('.port-nav__control-right'),
			mainWin = $('.port-last'),
			portThumb = $('.port-all__item');

	portThumb.click(function(event) {
		var thumbImgSrc = $(this).children('.port-all__item__img').attr('src'),
			thumbLinkHref = $(this).attr('href');
		event.preventDefault();
		mainWin.fadeOut('fast', function() {
			$('.port-last__item').attr('href', thumbLinkHref);
			$('.port-last__item__img').attr('src', thumbImgSrc);
		});
		mainWin.fadeIn('fast');
	});

	cLeft.click(function() {
		if ($('.port-all').css('top') === '0px') {
			return false;
		} else{
			$('.port-all').animate({
				top: '+=160'},
				300, function() {
			});
		};
	});
	cRight.click(function() {
		$('.port-all').animate({
			top: '-=160'},
			300, function() {
		});
	});

	/*
	*	ScrollTop Btn
	*/

	$('.footer__btn-up').click(function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: 0},
			500, function() {
		});;
	});


	/*
	* IE9 or bellow
	*/
	
});