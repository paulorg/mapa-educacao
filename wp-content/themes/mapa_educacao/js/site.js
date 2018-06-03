$(function () {

	// $('body').on('click', function(e){
	// 	console.log('Hello world!');
	// 	e.preventDefault();
	// });

	$('.owl-carousel').owlCarousel({
		autoWidth: false,
		animateOut: 'fadeOut',
		autoplay: true,
		autoplayTimeout: 7000,
		items: 1,
		loop: true,
		mouseDrag: false,
		stagePadding: -10,
		touchDrag: false,
	})

});
