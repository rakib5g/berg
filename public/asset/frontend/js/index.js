// =====Preloader ====
$(window).on("load", function() {
  $(".A").fadeOut();
});


// =====Top Navbar Toggler ====
$('.menu-toggle').click(function() {

  $('.site-nav').toggleClass('site-nav--open', 0);
  $(this).toggleClass('open');

});

// =====Bottom Navbar Toggler ====
$('.menu-toggle-bottom').click(function() {

  $('.site-nav-bottom').toggleClass('site-nav-bottom--open', 0);
  $(this).toggleClass('open');

});


// ===== Scroll to Top ====
$(window).scroll(function() {
  if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
    $('#return-to-top').fadeIn(200); // Fade in the arrow
  } else {
    $('#return-to-top').fadeOut(200); // Else fade out the arrow
  }
});
$('#return-to-top').click(function() { // When arrow is clicked
  $('body,html').animate({
    scrollTop: 0 // Scroll to top of body
  }, 500);
});

// ===== Testimonial Slider ====
var flkty = new Flickity('.main-gallery', {
  cellAlign: 'left',
  contain: true,
  wrapAround: true,
  prevNextButtons: false,
  autoPlay: 5000
});
