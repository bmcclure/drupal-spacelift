import React from 'react';

import HeaderBanner5050 from './HeaderBanner5050.twig';

import HeaderBanner5050Data from './HeaderBanner5050.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Header Banner 5050' };

export const headerBanner5050 = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: HeaderBanner5050(HeaderBanner5050Data),
    }}
  />
);
