import React from 'react';

import FeaturedIndustries from './FeaturedIndustries.twig';

import FeaturedIndustriesData from './FeaturedIndustries.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Featured Industries' };

export const featuredIndustries = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: FeaturedIndustries(FeaturedIndustriesData),
    }}
  />
);
