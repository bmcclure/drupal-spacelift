// Custom site-wide Drupal behaviors
import { Foundation } from 'foundation-sites';
import jquery from 'jquery';

// window.jQuery = jquery;
window.$ = jquery;

Foundation.addToJquery($);

Drupal.behaviors.initFoundation = {
  attach: (context) => {
    $(context).foundation();
  },
};
