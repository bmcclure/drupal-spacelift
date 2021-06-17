import $ from 'jquery';
import 'slick-carousel';
import AOS from 'aos';
import lozad from 'lozad';

$(() => {
  'use strict';

  const $Slider = $('.OtherPagesToView .OtherPagesToView-slider');

  $Slider.on('init', () => {
    AOS.init();
    const observer = lozad();
    observer.observe();
  });

  $Slider.slick({
    arrows: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 3,
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
