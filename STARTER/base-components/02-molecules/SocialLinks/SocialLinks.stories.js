import React from 'react';

import SocialLinks from './SocialLinks.twig';

import SocialLinksData from './SocialLinks.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Social Links' };

export const socialLinks = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: SocialLinks(SocialLinksData),
    }}
  />
);
