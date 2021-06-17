import $ from 'jquery';

Drupal.behaviors.FooterComponent = {
  attach: (context) => {
    const adjustFooterAccordion = () => {
      const $footerMenu = $('#FooterAccordionMenu', context);

      if ($(window).width() > 640) {
        $footerMenu.foundation('_destroy');
      }
    };

    adjustFooterAccordion();

    $(window).resize(() => {
      adjustFooterAccordion();
    });
  },
};
