import React from 'react';

import Socials from './Socials.twig';

import SocialsData from './Socials.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Socials' };

export const SocialsExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: Socials(SocialsData),
    }}
  />
);
