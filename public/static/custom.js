$(document).ready(function() {
	
	// Просмотр превью книг. Fancybox
	$('[data-fancybox="gallery"], [data-fancybox]').fancybox();
	
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