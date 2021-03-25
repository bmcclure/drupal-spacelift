// Documentation on theming Storybook: https://storybook.js.org/docs/configurations/theming

import { create } from '@storybook/theming';

export default create({
  base: 'light',
  brandTitle: '{{Starter}}',
  brandUrl: 'https://github.com/TopFloorTech/drupal-spacelift',
  brandImage: 'https://raw.githubusercontent.com/TopFloorTech/drupal-spacelift/3.x/STARTER/images/logo.png',
});
