import $ from 'jquery';
import AOS from 'aos';
import lozad from 'lozad';

Drupal.behaviors.FeaturedBlogPostsComponent = {
  attach: (context) => {
    'use strict';

    const medium = 640;

    const initFeaturedBlogSlider = () => {
      $('.FeaturedBlogPosts-slider', context)
        .on('init', function (event, slick) {
          // console.log("initialized");
          AOS.init();
          const observer = lozad(); // lazy loads elements with default selector as ".lozad"
          observer.observe();
        })
        .slick({
          arrows: true,
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
        });
    };

    if (window.innerWidth < medium) {
      if (!$('.slider', context).hasClass('slick-initialized')) {
        initFeaturedBlogSlider();
      }
    }

    $(window).resize(() => {
      if (window.innerWidth < medium) {
        if (!$('.slider', context).hasClass('slick-initialized')) {
          initFeaturedBlogSlider();
        }

      }
      else {
        const $slider = $('.FeaturedBlogPosts-slider', context);

        if ($slider.hasClass('slick-initialized')) {
          $slider.slick('unslick');
        }
      }
    });
  },
};
