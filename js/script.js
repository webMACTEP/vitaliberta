jQuery(document).ready(function ($) {

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