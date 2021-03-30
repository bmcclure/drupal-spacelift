import React from 'react';

import RedHeaderBanner from './RedHeaderBanner.twig';

import RedHeaderBannerData from './RedHeaderBanner.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Red Header Banner' };

export const redHeaderBanner = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: RedHeaderBanner(RedHeaderBannerData),
    }}
  />
);
