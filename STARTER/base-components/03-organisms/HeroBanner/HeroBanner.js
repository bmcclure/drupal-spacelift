import $ from 'jquery';

Drupal.behaviors.HeroBannerComponent = {
  attach: (context) => {
    'use strict';

    $('.HeroBanner-block', context).hover(
      (e) => {
        if ($(window).width() > 1023) {
          const imageNumber = $(e.currentTarget).data('herobanner');
          $(`.HeroBanner-background--${imageNumber}`, context).addClass('show');
        }
      },
      (e) => {
        if ($(window).width() > 1023) {
          const imageNumber = $(e.currentTarget).data('herobanner');
          $(`.HeroBanner-background--${imageNumber}`, context).removeClass(
            'show',
          );
        }
      },
    );
  },
};
