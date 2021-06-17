import React from 'react';

import FeaturedResourceTeaser from './FeaturedResourceTeaser.twig';

import FeaturedResourceTeaserData from './FeaturedResourceTeaser.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Featured Resource Teaser' };

export const featuredResourceTeaser = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: FeaturedResourceTeaser(FeaturedResourceTeaserData),
    }}
  />
);
