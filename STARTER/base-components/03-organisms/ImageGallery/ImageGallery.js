import $ from 'jquery';
import AOS from 'aos';
import lozad from 'lozad';

Drupal.behaviors.ImageGalleryComponent = {
  attach: (context) => {
    'use strict';

    $('.ImageGallery .ImageGallery-slider', context)
      .on('init', () => {
        AOS.init();
        const observer = lozad();
        observer.observe();
      })
      .slick({
        arrows: true,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 640,
            settings: {
              slidesToShow: 1,
            },
          },
        ],
      });
  },
};
