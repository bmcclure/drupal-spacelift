(($) => {
  Drupal.behaviors.SelectedPagesSlider = {
    attach: (context) => {
      'use strict';

      $('.selected-pages.Slider', context)
        .not('.slick-initialized')
        .slick({
          arrows: true,
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          mobileFirst: true,
          responsive: [
            {
              breakpoint: 640,
              settings: {
                slidesToShow: 2,
              },
            },
            {
              breakpoint: 900,
              settings: {
                slidesToShow: 3,
              }
            },
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 4,
              }
            },
          ],
        });
    },
  };
})(jQuery);
