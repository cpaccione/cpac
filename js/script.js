jQuery(document).ready(function($) {

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

const homeHero = document.querySelector('.home-hero')
console.log(homeHero)

window.onload = _ => {
  homeHero.classList.add('fade-in')
}

// add responsive class to all images
const imgR = document.querySelectorAll('img')

imgR.forEach(elem => {
  elem.classList.add('img-fluid')
})

const mobileMenu = document.querySelector('.cpac-mobile-menu')
const menu = document.querySelector('.cpac-menu')
const body = document.querySelector('body')
const menuList = document.querySelector('.menu')
//const menuWrapper = menuList.parentElement
//console.log(menuWrapper)

mobileMenu.addEventListener('click', _ => {
  menu.classList.toggle('is-open')
  menuList.classList.toggle('show-ul')
  //menuWrapper.classList.toggle('show')
  body.classList.toggle('no-scroll')
})

