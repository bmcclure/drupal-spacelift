import $ from 'jquery';
import AOS from 'aos';
import lozad from 'lozad';

Drupal.behaviors.FeaturedTestimonialsComponent = {
  attach: (context) => {
    'use strict';

    $('.FeaturedTestimonials .FeaturedTestimonials-slider', context)
      .on('init', (event, slick) => {
        // console.log("initialized");
        AOS.init();
        const observer = lozad();
        observer.observe();
      })
      .slick({
        arrows: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
      });
  },
};
