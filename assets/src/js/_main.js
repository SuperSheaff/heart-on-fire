$(document).ready(function () {

  

  $(".hof-categories__parent").on('click', function() {
    $(".hof-categories__parent").removeClass('active');
    $(this).addClass('active');
    let parentKey = $(this).attr("data-key");
    $(".hof-categories__child").removeClass('active');
    $(".hof-categories__child").each(function() {
      if ($(this).attr("data-key") == parentKey) {
        $(this).addClass("active");
      }
    });
  });

  let categorySliders = $(".hof-categories__child");

  for (i = 0; i < categorySliders.length; i++) {
    let slider = categorySliders[i];
    let isDown = false;
    let startX;
    let scrollLeft;
  
    slider.addEventListener('mousedown', (e) => {
      isDown = true;
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
      isDown = false;
    });
    slider.addEventListener('mouseup', () => {
      isDown = false;
    });
    slider.addEventListener('mousemove', (e) => {
      if(!isDown) return;
      e.preventDefault();
      const x = e.pageX - slider.offsetLeft;
      const walk = (x - startX) * 3; //scroll-fast
      slider.scrollLeft = scrollLeft - walk;
      console.log(walk);
    });
  }

  // //timeline hover on date
  // $('.hof-timeline__item-date h4').hover(
  //   function () {
  //     $(this).parents('.hof-timeline__item-row').addClass('hof-timeline__item-row--hover');
  //   },
  //   function () {
  //     $(this).parents('.hof-timeline__item-row').removeClass('hof-timeline__item-row--hover');
  //   }
  // );

  // // Banner Slider JS
  // $('.hof-slider__slide').owlCarousel({
  //   loop: true,
  //   margin: 0,
  //   dots: true,
  //   nav: false,
  //   items: 1
  // });

  // // Youtube Popup JS
  // $('.hof-general__youtube-popup-video').magnificPopup({
  //   type: 'iframe',
  //   mainClass: 'mfp-fade',
  //   removalDelay: 160,
  //   preloader: false,
  //   fixedContentPos: false
  // });

  // // Add select2 to Dropdown
  // $('.hof-map-select-store').select2({
  //   dropdownParent: '.hof-map__dropdown',
  //   width: '100%',
  //   minimumResultsForSearch: Infinity
  // });

  // //Gallery Popup JS
  // $('.hof-gallery-popup__gallery-image-icon').magnificPopup({
  //   gallery: {
  //     enabled: true,
  //     duration: 300,
  //     tCounter: '%curr% of %total% images',
  //     easing: 'ease-in-out'
  //   },
  //   image: {
  //     titleSrc: function (item) {
  //       var markup = '';
  //       if (item.el[0].hasAttribute('data-title')) {
  //         markup += '<h3>' + item.el.attr('data-title') + '</h3>';
  //       }
  //       if (item.el[0].hasAttribute('data-caption')) {
  //         markup += '<p>' + item.el.attr('data-caption') + '</p>';
  //       }
  //       return markup
  //     }
  //   },
  //   callbacks: {
  //     buildControls: function () {
  //       // re-appends controls inside the main container
  //       this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
  //     }
  //   },
  //   zoom: {
  //     enabled: true,
  //     duration: 300,
  //     easing: 'ease-in-out'
  //   },
  //   removalDelay: 300,
  //   mainClass: 'mfp-with-zoom hof-gallery-popup__main',
  //   type: 'image'
  // });

  // //Slider Arrows js
  // let preArrow = $('.hof-slider-nav .hof-slider-nav__pre');
  // let nextArrow = $('.hof-slider-nav .hof-slider-nav__next');
  // preArrow.on('click', function () {
  //   $(this).closest('.hof-slider__slide').children('.owl-nav').children('.owl-prev').trigger('click');
  // });
  // nextArrow.on('click', function () {
  //   $(this).closest('.hof-slider__slide').children('.owl-nav').children('.owl-next').trigger('click');
  // });

  // //Search Widget js
  // let searclptn = $('.search-form .hof-form-search-icon');
  // searclptn.on('click', function () {
  //   $('.search-form').submit();
  // });

  // //Counter js
  // $('.hof-counter__number').one('inview', function (event, isInView) {
  //   if (isInView) {
  //     // element is now visible in the viewport
  //     $(this).prop('Counter',0).animate({
  //       Counter: $(this).text()
  //     }, {
  //       duration: 4000,
  //       easing: 'swing',
  //       step: function (now) {
  //         $(this).text(Math.ceil(now));
  //       }
  //     });
  //     $(this).off('inview');
  //   }
  // });

  // //js to wrap blockquote and table
  // $('.hof-general__txt-img-content blockquote').wrap('<div class="hof-general__blockquote-container position-relative"></div>');
  // $('.hof-general__txt-img-content table').wrap('<div class="hof-general__table-responsive table-responsive-md"></div>');
});
