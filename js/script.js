jQuery(document).ready(function($) {
	$('.home-hero-copy').fadeIn(2000);


	// Add bootstrap's 'img-responsive' class to all images

    $('img').addClass('img-responsive');


      $(".card").flip({
        trigger: 'hover'
      }); 

	//Resize and load function to add padding to push content below bootstrap fixed navbar

	// $(window).resize(function () { 
	//     $('body').css('padding-top', parseInt($('.navbar').css("height"))+0);
	// });

	// $(window).load(function () { 
	//     $('body').css('padding-top', parseInt($('.navbar').css("height"))+0);        
	// });

    // $("div.portfolio-wrap").mouseenter(function() {
    //     $("img.portfolio-image").fadeOut();
    // });

    // $("div.portfolio-wrap").mouseleave(function() {
    // 	$("img.portfolio-image").fadeIn();
    // })

    // $(".portfolio-wrap").hover(function() {
    //     $("img.portfolio-image").fadeIn();
    // });




});