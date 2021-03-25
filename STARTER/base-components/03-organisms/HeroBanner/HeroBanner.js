import $ from 'jquery';

Drupal.behaviors.HeroBannerComponent = {
  attach: (context) => {
    'use strict';

    if ($(window).width() > 1023) {
      $('.HeroBanner-block', context).hover(
        () => {
          const imageNumber = $(this).attr('data-herobanner');
          $(`.HeroBanner-background--${imageNumber}`).addClass('show');
        },
        () => {
          const imageNumber = $(this).attr('data-herobanner');
          $(`.HeroBanner-background--${imageNumber}`).removeClass('show');
        },
      );
    }
  },
};
