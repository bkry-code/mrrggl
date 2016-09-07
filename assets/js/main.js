$(function() {

	// Breadcrumbs
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

	// Mobile Navigation
	$('.nav-toggle').on('click', function() {
		$('.navigation__mobile').toggleClass('closed');
	});

	// Search Bar
	$('.interact__search a').click(function(e) {
		$('#navigation__search-bar').slideToggle(300);
		$('.interact__search span').toggleClass('inactive');
		return false;
	});

	// Lazy Load
	$('.lazy').show().lazyload({
		placeholder: "data:image/image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAR4AAAFmCAIAAAA02mItAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDE0IDc5LjE1Njc5NywgMjAxNC8wOC8yMC0wOTo1MzowMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QjVENjk0MDM3NDREMTFFNEI2MTc5NUU3M0RBRDU0NjEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QjVENjk0MDQ3NDREMTFFNEI2MTc5NUU3M0RBRDU0NjEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpCNUQ2OTQwMTc0NEQxMUU0QjYxNzk1RTczREFENTQ2MSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpCNUQ2OTQwMjc0NEQxMUU0QjYxNzk1RTczREFENTQ2MSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PpzmwU0AAALfSURBVHja7NMxDQAACAQxwL/aV4AJBoZWwiXXSQq4NhKAtcBaYC3AWmAtsBZgLbAWWAuwFlgLrAVYC6wF1gKsBdYCawHWAmuBtQBrgbXAWoC1wFpgLcBaYC2wFmAtsBZYC7AWWAusBVgLrAXWAqwF1gJrAdYCa4G1AGuBtcBagLXAWmAtwFpgLbAWYC2wFlgLsBZYC6wFWAusBdYCrAXWAmsB1gJrgbUAa4G1wFqAtcBaYC3AWmAtsBZgLbAWWAuwFlgLrAVYC6wF1gJrAdYCa4G1AGuBtcBagLXAWmAtwFpgLbAWYC2wFlgLsBZYC6wFWAusBdYCrAXWAmsB1gJrgbUAa4G1wFqAtcBaYC3AWmAtsBZgLbAWWAuwFlgLrAVYC6wF1gKsBdYCawHWAmuBtQBrgbXAWoC1wFpgLcBaYC2wFmAtsBZYC7AWWAusBVgLrAXWAqwF1gJrAdYCa4G1AGuBtcBagLXAWmAtwFpgLbAWWAuwFlgLrAVYC6wF1gKsBdYCawHWAmuBtQBrgbXAWoC1wFpgLcBaYC2wFmAtsBZYC7AWWAusBVgLrAXWAqwF1gJrAdYCa4G1AGuBtcBagLXAWmAtwFpgLbAWYC2wFlgLsBZYC6wFWAusBdYCrAXWAmsB1gJrgbUAa4G1wFqAtcBaYC3AWmAtsBZgLbAWWAuwFlgLrAVYC6wF1gKsBdYCawHWAmuBtcBaEoC1wFpgLcBaYC2wFmAtsBZYC7AWWAusBVgLrAXWAqwF1gJrAdYCa4G1AGuBtcBagLXAWmAtwFpgLbAWYC2wFlgLsBZYC6wFWAusBdYCrAXWAmsB1gJrgbUAa4G1wFqAtcBaYC3AWmAtsBZgLbAWWAuwFlgLrAVYC6wF1gKsBdYCawHWAmuBtQBrgbXAWoC1wFpgLcBaYC2wFmAtsBZYC7AWWAusBVgLrAXWAmsB1gJrgbUAa4G1wFqAtcBaYC3AWvDbCjAAaWoFon3wDeYAAAAASUVORK5CYII=",
		effect: "fadeIn", 
		effectspeed: 300,
		threshold: 1000
	});

	// Masonry Filtering
	$('.filter-class a').click(function() {
		$('.active-filter').removeClass('active-filter');
		$(this).parent().addClass('active-filter');
		var type = $(this).attr("id");
		$('.masonry__item').not("." + type).stop().hide().end().filter("." + type).stop().show();
		return false;
	});

	$('#filter-reset a').click(function() {
		$('.masonry__item').show();
		return false;
	});

});