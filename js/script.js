jQuery(document).ready(function($) {

  // $('.hero-lead').fadeIn(2000);

  //$('.cpac-menu').hide();
  // $('.cpac-mobile-menu').click(function() {

    // $('.cpac-menu').toggleClass('show');
    
    //$('.cpac-menu').toggle( 'fade' );
      // Mobile menu list fade in
      // $('.cpac-menu').toggle('');

    //   if ($('.cpac-mobile-menu').hasClass("open")) {

    // $('.menu li').each(function(index, element) {
    //     $(element).children('a').delay(index*100).hide().fadeIn(500);
    //   });
    // };

  // });




	//$('.home-hero-copy').addClass('visible animated fadeInDown');

	// Add bootstrap's 'img-responsive' class to all images

    // $('img').addClass('img-fluid');

 
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

// add responsive class to all images
const imgR = document.querySelectorAll('img')

imgR.forEach(elem => {
  elem.classList.add('img-fluid')
})

const mobileMenu = document.querySelector('.cpac-mobile-menu')
const menu = document.querySelector('.cpac-menu')
const body = document.querySelector('body')

const tl = new TimelineMax({ paused: true, reversed: true })

tl.to(menu, .7, {
  height: '100%',
  // opacity: '1',
  ease: Power2.easeOut
}).to('#menu-main', 1, {
  display: 'block'
}, '-= .6')

mobileMenu.addEventListener('click', e => {
  // menu.classList.toggle('is-open')
  body.classList.toggle('no-scroll')
  toggleTween(tl)
})

function toggleTween(tween) {
  tween.reversed() ? tween.play() : tween.reverse()
}

// fade in copy on home page
TweenMax.to('.home-hero', 3, {
  opacity: 1,
  ease: Power2.easeOut
})

