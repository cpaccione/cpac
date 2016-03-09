jQuery(document).ready(function($) {
	$('.home-hero-copy').fadeIn(2000);


	// Add bootstrap's 'img-responsive' class to all images

    $('img').addClass('img-responsive');


      $(".card").flip({
        trigger: 'hover'
      }); 

});