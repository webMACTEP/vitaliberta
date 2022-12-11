jQuery(document).ready(function ($) {

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