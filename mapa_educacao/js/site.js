$(function () {

	$('.play-video').on('click', function(e){
		e.preventDefault();
		var jqThis = $(this);
		var videoURL = 'http://www.youtube.com/embed/' + jqThis.data('url') + '?rel=0&controls=0&showinfo=0&autoplay=1';
		$('#video').modal('show');
		$('#video').on('shown.bs.modal', function(e){
			$('#video iframe').attr('src',videoURL);
		});
		$('#video').on('hide.bs.modal', function(e){
			$('#video iframe').attr('src','');
		});
	});



	$('.highlights').owlCarousel({
		autoplay: true,
		autoplayTimeout: 7000,
		items: 1,
		loop: true,
	});

	$('.projects .owl-carousel').owlCarousel({
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
