import $ from 'jquery';

Drupal.behaviors.MegaMenuComponent = {
  attach: (context) => {
    'use strict';

    const $allMenus = $('.is-MegaMenu', context);

    $allMenus.each(() => {
      const $parent = $(this);

      $parent.children('a').on('click', (e) => {
        e.preventDefault();

        if ($parent.hasClass('show-MegaMenu')) {
          $parent.removeClass('show-MegaMenu');
        }
        else {
          $allMenus.removeClass('show-MegaMenu');
          $parent.addClass('show-MegaMenu');
        }
      });
    });

    // Hide the Menus if you click outside of it
    $(document).on('click', (e) => {
      // If the target is not the container or a child of the container, then process
      // the click event for outside of the container.
      if ($(e.target).closest('#Header-mainNav').length === 0) {
        $allMenus.removeClass('show-MegaMenu');
      }
    });
  },
};
