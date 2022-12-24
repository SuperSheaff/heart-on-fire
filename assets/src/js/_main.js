$(document).ready(function () {

  $('.hof-testimonial-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
  })

  // navigation
  $('.hof-navigation--open').click(function () {
    $('.hof-navigation').addClass('open');
  })

  $('.hof-navigation--close').click(function () {
    $('.hof-navigation').removeClass('open');
  })
  
});
