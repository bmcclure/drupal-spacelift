(($) => {
  Drupal.behaviors.Testimonials = {
    attach: (context) => {
      'use strict';

      const $testimonialsWrapper = $('.Testimonials-row', context);

      if ($testimonialsWrapper.length) {
        const $testimonials = $testimonialsWrapper.find('.Testimonial');
        const numTestimonials = $testimonials.length;

        if (numTestimonials > 1) {
          $testimonialsWrapper.not('.slick-initialized').slick({
            arrows: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            adaptiveHeight: true,
          });
        }
      }
    },
  };
})(jQuery);
