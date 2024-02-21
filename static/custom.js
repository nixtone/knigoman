$(document).ready(function() {
	
	// Просмотр превью книг. Fancybox
	$('[data-fancybox="gallery"], [data-fancybox]').fancybox();
	
	// Слайдер превью книг
	/*
	$('.preview-slider').slick({
	    slidesToShow: 2,
	    slidesToScroll: 1,
	    speed: 300,
	    autoplay: true,
	    arrows: true,
	    dots: true,
	    fade: true,
	    pauseOnHover: true,
		responsive: [
			{
				breakpoint: 970,
				settings: {
					slidesToShow: 3
				}

			}
	    ],
	});
	*/
	let previewSlider = "#book_item .slider",
		previewNavSlider = "#book_item .nav";
	$(previewSlider).slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: previewNavSlider
	});
	$(previewNavSlider).slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: previewSlider,
		// dots: true,
		centerMode: true,
		focusOnSelect: true
	});

    // Попап
    $(".cpp").click(function(event) {
        event.preventDefault();
        $(".overlay .inner > *").hide();
        $(".overlay, .overlay ."+$(this).data('pp')).fadeIn(150);
    });
    $(".overlay").click(function(event) {
        if(!$(".popup").is(event.target) && $(".popup").has(event.target).length === 0 || event.target.className == "close") $(".overlay").fadeOut(150);
    });


});