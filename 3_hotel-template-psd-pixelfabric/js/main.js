$(document).ready(function () {
	
//						Datepicker
	
	$('.datepicker').datepicker({
		changeMonth: true,
		changeYear: true
	});
	

	
//				Обьявление .disabled и .active классов для ссылок
	var pName = window.location.pathname;
	$('.disabled').click(function (e) {
		e.preventDefault();
	});
	$('a').each(function () {
		var link = '/' + $(this).attr('href'),
			enLink = '/3_hotel-template-psd-pixelfabric/en' + link,
			ruLink = '/3_hotel-template-psd-pixelfabric/ru' + link;
		if (pName === link) {
			$(this).addClass('disabled active');
		} else if (pName === enLink) {
			$(this).addClass('disabled active');
		} else if (pName === ruLink) {
			$(this).addClass('disabled active');
		}
	});
	
	

	
//						Всплывающее окно service	
	$('.detailed img').click(function () {
		$('.det_wrap').fadeIn(200);
		var captClone = $(this).next().clone(),
			imgClone = $(this).clone(),
			imgSrc = $(this).attr('src'),
			re = /_[a-z]*[A-Z]*[0-9]*\.jpg$/,
			src = imgSrc.match(re),
			newSrc = imgSrc.replace(src, '_md.jpg');
		
		$('.det_inner img').attr('src', newSrc).addClass('img-responsive');
		$('.det_inner div').html(captClone);
	});
	$('.det_wrap').click(function () {
		$(this).fadeOut(200);
	});
	$('.det_inner').click(function () {
		return false;
	});
	
	
//			Кнопки-checkboxы
	$('.chb_btn input').css({"display": "none"});
	
	$('span.chb_btn').find('input[type=checkbox]').prop('checked', false);

	$('span.chb_btn').click(function () {
		var checkbox = $(this).find('input[type=checkbox]');
		if (checkbox.prop("checked")) {
			$(this).removeClass('active');
			checkbox.prop("checked", false);
		} else {
			$(this).addClass('active');
			checkbox.prop("checked", true);
		}
	});

	
	
//			Выравнивание колонок
	function eqColumnHeight() {
		var srFormHeight = $('.sr_form, .overview').height(),
			sideFormHeight = $('.side_form').height();

		if (srFormHeight > sideFormHeight) {
			$('.side_form').height(srFormHeight);
		} else {
			$('.sr_form, .overview').height(sideFormHeight);
		}
	}
	eqColumnHeight();
	
	var windowWidth = $(window).width();
	if (windowWidth < 750) {
		$('.side_form').height('auto');
	}



//			Проверка заполнения полей ввода форм
	$('input[name="submit"], button[name="submit"]').click(function(event) {
		
		$('input[type="text"]').each(function() {
			if ($(this).val() === "" && $(this).attr('hidden') !== "hidden" && $(this).attr('name') !== "query") {
				$(this).addClass('wrong_input');
				event.preventDefault();
			};
		});
		$('select[name="num_of_rooms"]').each(function() {
			if ($(this).val() === null || $(this).val() === "" && $(this).attr('hidden') !== "hidden") {
				$(this).addClass('wrong_input');
				event.preventDefault();
			};
		});



		var roomCheck = $(document).find('input[type=checkbox]');
		if (roomCheck.val() !== undefined) {
			roomCheck = false;
			$('input[type=checkbox]').each(function() {
				if ($(this).prop("checked")) {
					roomCheck = true;
				};
			});
			if (roomCheck) {}
				else {
					event.preventDefault();
					alert('Pleace, select at least one room');
				};
		};
	});

	$('input[type="text"], select[name="num_of_rooms"]').focus(function() {
		$(this).removeClass('wrong_input');
	});

	
});





