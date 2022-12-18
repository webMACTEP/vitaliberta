jQuery(document).ready(function ($) {

	$('.title-js').click(function () {
		if ($(this).hasClass('is-active') == false) {
			$('.title-js').removeClass('is-active');
			$('.card').removeClass('is-active');
			$(this).addClass('is-active').next().addClass('is-active');
		} else {
			$('.title-js').removeClass('is-active');
			$('.card').removeClass('is-active');
		}

		return false;
	});


	$('ul.tabs__caption').on('click', 'li:not(.is-active)', function () {
		$(this)
			.addClass('is-active').siblings().removeClass('is-active')
			.closest('div.tabs').find('div.tabs__content').removeClass('is-active').eq($(this).index()).addClass('is-active');
	});

	$('.benefits-butt').click(function (event) {
		$('.benefits-wrapper').addClass('active');
		$('.benefits-butt').addClass('active');
		//$('.item03').removeClass('active');
	});
	$('.choice-butt').click(function (event) {
		$('.choice-wrapper').addClass('active');
		$('.choice-butt').addClass('active');
		//$('.item03').removeClass('active');
	});
	$('.services-butt').click(function (event) {
		$('.services-wrapper').addClass('active');
		$('.services-butt').addClass('active');
		//$('.item03').removeClass('active');
	});

	//WOW
	//new WOW().init();

	//swiper slider
	if ($('.swiper-slide').length > 1) {
		var swiper = new Swiper('.swiper-container', {
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			loop: false,
			// autoplay: {
			// 	delay: 5000,
			// 	disableOnInteraction: false,
			// },
			simulateTouch: true,
			pagination: {
				el: '.swiper-pagination',
				type: 'fraction',
			},
		});
	} else {
		$('.swiper-button-next').css('display', 'none');
		$('.swiper-button-prev').css('display', 'none');
	}

	//lazyload
	// $(window).scroll(function () {
	// 	$(".sp_lazyload").lazyload();
	// });

	// $(window).mousemove(function () {
	// 	$(".sp_lazyload").lazyload();
	// });

});	