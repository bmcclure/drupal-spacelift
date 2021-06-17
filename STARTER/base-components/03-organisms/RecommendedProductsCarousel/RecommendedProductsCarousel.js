import $ from 'jquery';
import 'slick-carousel';
import AOS from 'aos';
import lozad from 'lozad';

$(() => {
  'use strict';

  // Slick sliders
  $('.RecommendedProductsCarousel .RecommendedProductsCarousel-slider').on(
    'init',
    () => {
      AOS.init();
      const observer = lozad();
      observer.observe();
    },
  );

  $('.RecommendedProductsCarousel .RecommendedProductsCarousel-slider').slick({
    arrows: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 640,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});
