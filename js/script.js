jQuery(document).ready(function($) {
	$('.home-hero-copy').fadeIn(2000);

	//Resize and load function to add padding to push content below bootstrap fixed navbar

	$(window).resize(function () { 
	    $('body').css('padding-top', parseInt($('.navbar').css("height"))+0);
	});

	$(window).load(function () { 
	    $('body').css('padding-top', parseInt($('.navbar').css("height"))+0);        
	});

});