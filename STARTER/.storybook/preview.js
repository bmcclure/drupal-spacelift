import { addDecorator } from '@storybook/react';
import { useEffect } from '@storybook/client-api';
import Twig from 'twig';
import { setupTwig } from './setupTwig';

// Import base component styles
import '../base-components/storybook.scss';

// Import Drupal theme styles
import '../src/scss/app.scss';

// If in a Drupal project, it's recommended to import a symlinked version of drupal.js.
import './_drupal';

// Import jQuery globally
import './jquery-global';

addDecorator((storyFn) => {
  useEffect(() => Drupal.attachBehaviors(), []);
  return storyFn();
});

setupTwig(Twig);
