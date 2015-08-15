$(document).ready(function () {
	new WOW().init();
	$('a').smoothScroll();
	window.onscroll = function () {
		var scrollTop = $(window).scrollTop();
		if (scrollTop >= maxScroll)
			$('header').addClass('degrade');
		else
			$('header').removeClass('degrade');
	};
	$('form').validate();
});