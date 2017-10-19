jQuery(document).ready(function($) {

  //$('.cpac-menu').hide();
  $('.cpac-mobile-menu').click(function() {

      $(this).toggleClass('open');
      // Mobile menu list fade in
      $('.cpac-menu').toggle('fade');

      if ($('.cpac-mobile-menu').hasClass("open")) {

    $('.menu li').each(function(index, element) {
        $(element).children('a').delay(index*100).hide().fadeIn(500);
      });
    };

  });




	//$('.home-hero-copy').addClass('visible animated fadeInDown');

	// Add bootstrap's 'img-responsive' class to all images

    $('img').addClass('img-fluid');


    var $animation_elements = $('.animation-element');
    var $window = $(window);

    function check_if_in_view() {
      var window_height = $window.height();
      var window_top_position = $window.scrollTop();
      var window_bottom_position = (window_top_position + window_height);

    $.each($animation_elements, function() {
      var $element = $(this);
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = (element_top_position + element_height);

      //check to see if this current container is within viewport
      if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
        $element.addClass('in-view');
      }
      // else {
      //   $element.removeClass('in-view');
      // }
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');


// BX Slider

$('.bxslider').bxSlider({
  auto: true,
  speed: 800,
  pause: 7000,
  autoHover: true,
  adaptiveHeight: true
});

// Defining a function to set size for #hero
 // function fullscreen(){
 //   $('.home-hero').css({
 //           width: $(window).width(),
 //           height: $(window).height()
 //       });
 // }
 // call function
 //fullscreen();

 // Run the function in case of window resize
 // $(window).resize(function() {
 //      fullscreen();
 //   });


// Smooth Scroll
  // Add smooth scrolling to all links
  $("a.smooth").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });


});
