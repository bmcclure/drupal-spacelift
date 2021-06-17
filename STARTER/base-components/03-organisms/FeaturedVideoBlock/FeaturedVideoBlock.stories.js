import React from 'react';

import FeaturedVideoBlock from './FeaturedVideoBlock.twig';

import FeaturedVideoBlockData from './FeaturedVideoBlock.yml';

import './FeaturedVideoBlock';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Featured Video' };

export const featuredVideoBlock = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: FeaturedVideoBlock(FeaturedVideoBlockData),
    }}
  />
);
