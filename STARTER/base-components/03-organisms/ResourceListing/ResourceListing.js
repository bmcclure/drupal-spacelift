(($) => {
  Drupal.behaviors.ResourceListing = {
    attach: (context) => {
      'use strict';

      const $gridButton = $('#GridView', context);
      const $listButton = $('#ListView', context);
      const $results = $('.ResourceListing-results', context);

      $gridButton.click(() => {
        $gridButton.addClass('active');
        $listButton.removeClass('active');
        $results
          .addClass('ResourceListing-gridView')
          .removeClass('ResourceListing-listView');
      });

      $listButton.click(() => {
        $listButton.addClass('active');
        $gridButton.removeClass('active');
        $results
          .addClass('ResourceListing-listView')
          .removeClass('ResourceListing-gridView');
      });
    },
  };
})(jQuery);
