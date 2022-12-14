jQuery(document).ready(function ($) {

	$('.question-js').click(function () {
		if ($(this).hasClass('active') == false) {
			$('.question-js').removeClass('active');
			$('.answer-js').removeClass('active');
			$(this).addClass('active').next().addClass('active');
		} else {
			$(this).removeClass('active');
			$('.answer-js').removeClass('active');
		}

		return false;
	});

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

	//benefits
	$('.benefits-butt').click(function (event) {
		$('.benefits-wrapper').addClass('active');
		$('.benefits-butt').addClass('active');
		$('.benefits-butt-close').addClass('active');
	});
	$('.benefits-butt-close').click(function (event) {
		$('.benefits-wrapper').removeClass('active');
		$('.benefits-butt').removeClass('active');
		$('.benefits-butt-close').removeClass('active');
	});

	//choice
	$('.choice-butt').click(function (event) {
		$('.choice-wrapper').addClass('active');
		$('.choice-butt').addClass('active');
		$('.choice-butt-close').addClass('active');
	});
	$('.choice-butt-close').click(function (event) {
		$('.choice-wrapper').removeClass('active');
		$('.choice-butt').removeClass('active');
		$('.choice-butt-close').removeClass('active');
	});


	//services
	$('.services-butt').click(function (event) {
		$('.services-wrapper').addClass('active');
		$('.services-butt').addClass('active');
		$('.services-butt-close').addClass('active');
	});
	$('.services-butt-close').click(function (event) {
		$('.services-wrapper').removeClass('active');
		$('.services-butt').removeClass('active');
		$('.services-butt-close').removeClass('active');
	});



	//anatomy
	$('.anatomy-butt').click(function (event) {
		$('.anatomy-wrapper').addClass('active');
		$('.anatomy-butt').addClass('active');
		$('.anatomy-butt-close').addClass('active');
	});
	$('.anatomy-butt-close').click(function (event) {
		$('.anatomy-wrapper').removeClass('active');
		$('.anatomy-butt').removeClass('active');
		$('.anatomy-butt-close').removeClass('active');
	});

	//change
	$('.change-butt').click(function (event) {
		$('.wrapper-change').addClass('active');
		$('.change-butt').addClass('active');
		$('.change-butt-close').addClass('active');
	});
	$('.change-butt-close').click(function (event) {
		$('.wrapper-change').removeClass('active');
		$('.change-butt').removeClass('active');
		$('.change-butt-close').removeClass('active');
	});

	//WOW
	//new WOW().init();

	//swiper slider

	var swiper = new Swiper('.swiper-recommendations', {
		navigation: {
			nextEl: '.sp-next',
			prevEl: '.sp-prev',
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

	var swiper2 = new Swiper('.swiper-quiz', {
		navigation: {
			nextEl: '.q-next',
			prevEl: '.q-prev',
		},
		loop: false,
		// autoplay: {
		// 	delay: 5000,
		// 	disableOnInteraction: false,
		// },
		simulateTouch: true,
		pagination: {
			el: '.q-pagination',
			type: 'fraction',
		},
	});


	//lazyload
	// $(window).scroll(function () {
	// 	$(".sp_lazyload").lazyload();
	// });

	// $(window).mousemove(function () {
	// 	$(".sp_lazyload").lazyload();
	// });

});	