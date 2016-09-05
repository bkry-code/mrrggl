$(function() {

	if($('.navigation__nav').hasClass('breadcrumb-enabled')) {
		$('.logo').on('mouseover', function() {
			$('.navigation__breadcrumb').addClass('invisible');
			$('.navigation__list').removeClass('invisible');
		});
		$('.navigation').on('mouseleave', function() {
			$('.navigation__breadcrumb').removeClass('invisible');
			$('.navigation__list').addClass('invisible');
		});
	}

	$('.nav-toggle').on('click', function() {
		$('.navigation__list').toggleClass('closed');
	});

	$('.interact__search a').click(function(e) {
		e.preventDefault();
		$('#search').slideToggle(300);
	});

});