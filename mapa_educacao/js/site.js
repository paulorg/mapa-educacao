$(function () {

	// $('body').on('click', function(e){
	// 	console.log('Hello world!');
	// 	e.preventDefault();
	// });

	$('.highlights').owlCarousel({
		autoplay: true,
		autoplayTimeout: 7000,
		items: 1,
		loop: true,
	});

	$('.projects .owl-carousel').owlCarousel({
		autoplay: true,
		autoplayTimeout: 7000,
		dots: false,
		loop: true,
		responsive: {
			0: {
				items: 1,
				nav: false,
			},
			720: {
				items: 2,
				nav: false,
			},
			1140: {
				startPosition: 2,
				items: 3,
				center: true,
				nav: true,
			},
		}
	});

});
