$(document).ready(function () {

	
//*				Галерея с caption 08.04.2015
//*	timeInterval - выремя смены изображения/2
//*	re - регулярое выражение поиска части url для замены
//*	srcChange - выражение, которым заменяется re 
	
	var timeInterval = 300,
		re = /_[a-z]*[A-Z]*[0-9]*\.jpg$/,
		srcChange = '_md.jpg',
		itemCloneArray = new Array(),
		j = 0;
	$('#gallery').click(function (e) {
		e.preventDefault();
	});

//	Нумерация элементов 'a' в thumbnail и занесение их клонов в массив
	$('.gall_thumbnail .thumb_item a').each(function () {
		$(this).attr('data-item-num', j);
		itemCloneArray[j] = $(this).clone();
		j++;
	});
	
//	Default изображение - первое в thumbnail
	var itemDefault = itemCloneArray[0];
	$('.gall_mw .thumb_item.active').html(itemDefault);
	$('.gall_mw .thumb_item.active img').attr('src', $('.gall_mw .thumb_item.active img').attr('src').replace(re, srcChange));


//	Определение функции перебора
	function itemChange(htmlCaption) {
		$('.gall_mw .thumb_item').fadeTo(timeInterval, 0.1);
		setTimeout(function () {
			$('.gall_mw .thumb_item').html(htmlCaption);
			$('.gall_mw .thumb_item img').attr('src', $('.gall_mw .thumb_item img').attr('src').replace(re, srcChange));
		}, timeInterval - 50);
		$('.gall_mw .thumb_item').fadeTo(timeInterval, 1);
	}
	
//	Перебор карусели
	$('.gall_thumbnail .thumb_item a').click(function () {
		var itemAClone = $(this).clone();
		itemChange(itemAClone);
	});
	
//	Кнопки перелистывания главного окна
	$('.gall_mw .gall_control.left').click(function () {
		var itemActiveNum = $('.gall_mw .thumb_item.active a').attr('data-item-num');
		if (itemActiveNum > 0) {
			itemActiveNum--;
			itemChange(itemCloneArray[itemActiveNum]);
		}
	});
	$('.gall_mw .gall_control.right').click(function () {
		var itemActiveNum = $('.gall_mw .thumb_item.active a').attr('data-item-num');
		if (itemActiveNum < itemCloneArray.length - 1) {
			itemActiveNum++;
			itemChange(itemCloneArray[itemActiveNum]);
		} else {
			itemChange(itemCloneArray[0]);
		}
	});
});