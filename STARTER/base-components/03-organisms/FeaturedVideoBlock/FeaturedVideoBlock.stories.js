import React from 'react';

import FeaturedVideoBlock from './FeaturedVideoBlock.twig';

import FeaturedVideoBlockData from './FeaturedVideoBlock.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Featured Video' };

export const FeaturedVideoBlockExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: FeaturedVideoBlock(FeaturedVideoBlockData),
    }}
  />
);
