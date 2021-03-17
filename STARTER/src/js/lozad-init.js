import lozad from 'lozad';

Drupal.behaviors.initLozad = {
  attach: () => {
    const observer = lozad();
    observer.observe();
  },
};
