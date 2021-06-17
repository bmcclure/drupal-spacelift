import React from 'react';

import fullWidthTwig from './full-width-demo.twig';
import withSecondSidebarTwig from './with-second-sidebar-demo.twig';

import mainMenu from '../02-molecules/Menu/MainMenu/MainMenu.yml';
import socialMenu from '../02-molecules/SocialLinks/SocialLinks.yml';
import footerMenu from '../02-molecules/Menu/Inline/InlineMenu.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Templates/Layouts' };

export const fullWidth = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: fullWidthTwig({ ...mainMenu, ...socialMenu, ...footerMenu }),
    }}
  />
);

export const withSidebar = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: withSecondSidebarTwig({
        ...mainMenu,
        ...socialMenu,
        ...footerMenu,
      }),
    }}
  />
);
