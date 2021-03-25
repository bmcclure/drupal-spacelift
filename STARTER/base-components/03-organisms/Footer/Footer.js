import $ from 'jquery';

Drupal.behaviors.FooterComponent = {
  attach: (context) => {
    const adjustFooterAccordion = () => {
      const width = $(window).width();
      const $footerMenu = $('#FooterAccordionMenu', context);

      if (width > 640) {
        $footerMenu.foundation('_destroy');
      }
      else {
      }
    }

    adjustFooterAccordion();

    $(window).resize(() => { // run when resized
      adjustFooterAccordion();
    });
  },
};
