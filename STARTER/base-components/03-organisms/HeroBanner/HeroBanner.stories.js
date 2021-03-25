import React from 'react';

import HeroBanner from './HeroBanner.twig';

import HeroBannerData from './HeroBanner.yml';

// Todo: Remove if we can load via twig attach_library()
import './HeroBanner';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Hero Banner' };

export const heroBanner = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: HeroBanner(HeroBannerData),
    }}
  />
);
