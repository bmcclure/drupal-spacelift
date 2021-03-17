import AOS from 'aos';

Drupal.behaviors.initAOS = {
  attach: () => {
    AOS.init({
      // Global settings:
      disable: 'phone', // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
      duration: 600, // values from 0 to 3000, with step 50ms
      easing: 'ease-out', // default easing for AOS animations
      mirror: false, // whether elements should animate out while scrolling past them
      // offset: -100, // for sticky menus on desktop, offset the animations
    });
  },
};
