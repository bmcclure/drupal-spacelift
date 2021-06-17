import React from 'react';

import HeroBanner from './HeroBanner.twig';

import HeroBannerData from './HeroBanner.yml';

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
