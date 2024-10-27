
var swiper = new Swiper(".partnerSlider", {
	slidesPerView: 5,
	loop: true,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	spaceBetween: 30,
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	breakpoints: {
		"@0.00": {
			slidesPerView: 1,
			spaceBetween: 10,
		},
		"@0.75": {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		"@1.00": {
			slidesPerView: 3,
			spaceBetween: 20,
		},
		"@1.50": {
			slidesPerView: 5,
			spaceBetween: 30,
		},
	},
});
var swiper = new Swiper(".feedbackdSlider", {
	slidesPerView: 1,
	spaceBetween: 0,
});

$(window).on('scroll resize', function () {
	const body = $('body');
	const windowWidth = $(window).width();
	if (windowWidth > 991) {
		if ($(this).scrollTop() > 20) {
			body.addClass('header-sticky');
		} else {
			body.removeClass('header-sticky');
		}
	} else {
		body.removeClass('header-sticky'); // Remove class if under 991px
	}
});


$(document).ready(function () {
	const ww = $(window).width();
	if (ww < 992) {
		$('.has-cats .level_link_1').on('click', function (event) {
			event.preventDefault();
			$(this).toggleClass('s-active');
			$(this).siblings('.dropdown-menu.level_2').toggle();
			
		});
		$('.has-sub-cats .level_link_3').on('click', function (event) {
			event.preventDefault();
			$(this).toggleClass('s-active');
			$(this).siblings('.dropdown-menu.level_3').toggle();
			
		});
	}
});

