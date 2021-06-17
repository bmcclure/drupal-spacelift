import $ from 'jquery';

Drupal.behaviors.SearchWithDropdownComopnent = {
  attach: (context) => {
    // Begin Search Dropdown display
    // Timer function lets you wait a little before displaying the dropdown
    const delay = (callback, ms) => {
      let timer = 0;

      return () => {
        clearTimeout(timer);
        timer = setTimeout(() => {
          callback.apply();
        }, ms || 0);
      };
    };

    $('.SearchWithDropdown-container', context).each((index, element) => {
      const $input = $(element).find('.SearchWithDropdown-input');
      const $searchBox = $(element).find('.SearchWithDropdown-dropdown');
      // Show the searchBox after 500ms of the start of typing
      $input.keyup(
        delay(() => {
          $searchBox.show();
        }, 500),
      );

      // Hide the searchbox if you click outside of it
      $(document).on('click', (e) => {
        if (e.currentTarget.id !== 'SearchWithDropdown-dropdown') {
          $searchBox.hide();
        }
      });
    });

    const $searchBox2 = $('#OffcanvasSearchWithDropdown', context);

    // Show the searchBox after 500ms of the start of typing
    $('#offcanvas-search', context).keyup(
      delay(() => {
        $searchBox2.show();
      }, 500),
    );

    // Hide the searchbox if you click outside of it
    $(document).on('click', (e) => {
      if (e.currentTarget.id !== 'OffcanvasSearchWithDropdown') {
        $searchBox2.hide();
      }
    });
  },
};
