$(document).ready(function () {

  $('.hof-testimonial-carousel').owlCarousel({
    loop:true,
    margin:32,
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

  var servicesCarousel;
  if ($('.hof-services-carousel').length) {
    var servicesCarousel = $('.hof-services-carousel').owlCarousel({
      loop:true,
      margin:32,
      dots:true,
      responsive:{
          0:{
              items:1,
              loop: false,
              onChanged: handleCarouselChange
          },
          600:{
              items:1,
              loop: false,
              onChanged: handleCarouselChange
          },
          1000:{
              items:1,
              loop: false,
              onChanged: handleCarouselChange
          }
      }
    })

      // Handle click event on elements with class hof-services--name
      $('.hof-services--name').on('click', function(){
        var slideNumber = parseInt($(this).data('slide'));
        servicesCarousel.trigger('to.owl.carousel', slideNumber);
    });
  }

  // Handle carousel change event
  function handleCarouselChange(event) {
    var currentItemIndex = event.item.index;
    $('.hof-services--name').removeClass('active').filter('[data-slide="' + currentItemIndex + '"]').addClass('active');
  }

  // Handle Mobile Navigation Menu
  $('.hof-main-navigation--burger').click(function () {
    $('.hof-mobile-navigation').addClass('open');
    $('body').addClass('noscroll');
  })

  $('.hof-main-navigation--close').click(function () {
    $('.hof-mobile-navigation').removeClass('open');
    $('body').removeClass('noscroll');
  })
  
});
