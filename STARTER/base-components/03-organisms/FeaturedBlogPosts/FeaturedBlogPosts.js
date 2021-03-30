(($) => {
  Drupal.behaviors.FeaturedBlogPostsComponent = {
    attach: (context) => {
      'use strict';

      $('.FeaturedBlogPosts-slider', context)
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
              settings: 'unslick',
            },
          ],
        });
    },
  };
})(jQuery);
