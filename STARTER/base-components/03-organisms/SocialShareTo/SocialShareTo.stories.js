import React from 'react';

import SocialShareTo from './SocialShareTo.twig';

import SocialShareToData from './SocialShareTo.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Social Share To' };

export const SocialShareToExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: SocialShareTo(SocialShareToData),
    }}
  />
);
