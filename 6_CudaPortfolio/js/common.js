$(document).ready(function() {

	/*
	*	Scroll2id
	*/
	$(".nav a[href*='#']").mPageScroll2id();
	$(".header-main a[href*='#']").mPageScroll2id();

	/*
	*	Bootastrap ScrollSpy
	*/
	$('#scrollspy').scrollspy({target: '.navbar'});

	/*
	*	Top menu
	*/
	if ($(window).width() < 769) {
		$("#sandwich, .nav__item").click(function() {
			$("#sandwich").toggleClass("active");
			if ($('.nav').css('margin-right') === '-200px') {
				$('.nav').addClass('active');
				$('.nav').animate({'margin-right': '+=200px'}, 500);
			} else{
				$('.nav').animate({'margin-right': '-=200px'}, 500);
				$('.nav').removeClass('active');
			};
		});
	};

	/*
	*	Header
	*/
	var winHeight = $(window).height();
	$('.header-lay').height(winHeight);
	$('.header-main').css('margin-top', (winHeight / 2) - 150);

	/*
	*	MagnificPopup
	*/
	$('.popup').magnificPopup({type: 'image'});
	$('.port-popup').magnificPopup({ 
		removalDelay: 300,
		mainClass: 'mfp-fade'
	});

	/*
	*	Chart set
	*/
	var 	chartWDPers 	= $('#webDesignChart').next('.about__item__chart-area__descr').attr('data-persent'),
			chartHCPers 	= $('#htmlCssChart').next('.about__item__chart-area__descr').attr('data-persent'),
			chartGDPers 	= $('#graphDesignChart').next('.about__item__chart-area__descr').attr('data-persent'),
			chartUUPers 	= $('#uiUxChart').next('.about__item__chart-area__descr').attr('data-persent');

	var webDesignChart 	= 	[	{ value: chartWDPers, color:"#30bae7", highlight: "#54cdf4" },
										{ value: 100 - chartWDPers, color: "#dfe8ed", highlight: "#dfe8ed" }	];
	var htmlCssChart 		= 	[	{ value: chartHCPers, color:"#d74680", highlight: "#da769e" },
										{ value: 100 - chartHCPers, color: "#dfe8ed", highlight: "#dfe8ed" }	];
	var graphDesignChart = 	[	{ value: chartGDPers, color:"#15c7a8", highlight: "#58d6c0" },
										{ value: 100 - chartGDPers, color: "#dfe8ed", highlight: "#dfe8ed" }	];
	var uiUxChart			= 	[	{ value: chartUUPers, color:"#eb7d4b", highlight: "#ea9d7a" },
										{ value: 100 - chartUUPers, color: "#dfe8ed", highlight: "#dfe8ed" }	];

	function chartSet (item, chartV) {
		var ctx 				= $(item).get(0).getContext("2d");
		var chartDoughnut = new Chart(ctx).Doughnut(chartV, {
			responsive : true,
			percentageInnerCutout : 85,
			showLabels: false,
			segmentStrokeWidth : 0
		});
	}

	$(window).load(chartSet('#webDesignChart', webDesignChart));
	$(window).load(chartSet('#htmlCssChart', htmlCssChart));
	$(window).load(chartSet('#graphDesignChart', graphDesignChart));
	$(window).load(chartSet('#uiUxChart', uiUxChart));

	$('.about__item__chart-area__descr').each(function() {
		var pers = $(this).attr('data-persent');
		$(this).html(pers + '<span>%</span>');
	});

	/*
	*	Portfolio
	*/
	$('.port-nav__item').click(function(event) {
		$('.port-nav__item').removeClass('active');
		$(this).addClass('active');
	});
	$('.port__item').each(function(i) {
		$(this).find('.port__item__img-lay').attr('href', '#work_it_' + i);
		$(this).find('.port__item__capt').attr('id', 'work_it_' + i);
	});

	/*
	*	MixItUp
	*/
	$('#port-main').mixItUp();

	/*
	*	BootstrapValidator
	*/
	$('.contact__item').not("[type=submit]").jqBootstrapValidation();

});