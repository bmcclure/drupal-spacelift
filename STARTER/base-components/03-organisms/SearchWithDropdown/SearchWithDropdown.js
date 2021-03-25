import $ from 'jquery';

Drupal.behaviors.SearchWithDropdownComopnent = {
  attach: (context) => {
    // Begin Search Dropdown display
    // Timer function lets you wait a little before displaying the dropdown
    const delay = (callback, ms) => {
      let timer = 0;

      return () => {
        const context = this;
        const args = arguments;
        clearTimeout(timer);
        timer = setTimeout(() => {
          callback.apply(context, args);
        }, ms || 0);
      };
    };

    const $dropdownContainer = $('.SearchWithDropdown-container', context);

    $dropdownContainer.each(() => {
      const $input = $(this).find('.SearchWithDropdown-input');
      const $searchBox = $(this).find('.SearchWithDropdown-dropdown');
      // Show the searchBox after 500ms of the start of typing
      $input.keyup(delay(() => {
        // console.log('Time elapsed!', this.value);
        $searchBox.show();
      }, 500));

      // Hide the searchbox if you click outside of it
      $(document).on('click', (e) => {
        if (e.target.id !== 'SearchWithDropdown-dropdown') {
          $searchBox.hide();
        }
      });
    });

    const $input2 = $('#offcanvas-search', context);
    const $searchBox2 = $('#OffcanvasSearchWithDropdown', context);

    // Show the searchBox after 500ms of the start of typing
    $input2.keyup(delay(() => {
      // console.log('Time elapsed!', this.value);
      $searchBox2.show();
    }, 500));

    // Hide the searchbox if you click outside of it
    $(document).on('click', (e) => {
      if (e.target.id !== 'OffcanvasSearchWithDropdown') {
        $searchBox2.hide();
      }
    });
  },
};
