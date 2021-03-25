import React from 'react';

import FeaturedResourceCategories from './FeaturedResourceCategories.twig';

import FeaturedResourceCategoriesData from './FeaturedResourceCategories.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Featured Resource Categories' };

export const featuredResourceCategories = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: FeaturedResourceCategories(FeaturedResourceCategoriesData),
    }}
  />
);
