import React from 'react';

import SiteFooter from './site-footer/site-footer.twig';

import FooterSocialData from '../../02-molecules/SocialLinks/SocialLinks.yml';
import FooterMenuData from '../../02-molecules/Menu/Inline/InlineMenu.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Site' };

export const footer = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: SiteFooter({ ...FooterSocialData, ...FooterMenuData }),
    }}
  />
);
