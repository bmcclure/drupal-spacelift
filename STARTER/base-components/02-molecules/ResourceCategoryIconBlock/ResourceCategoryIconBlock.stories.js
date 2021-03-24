import React from 'react';

import ResourceCategoryIconBlock from './ResourceCategoryIconBlock.twig';

import ResourceCategoryIconBlockData from './ResourceCategoryIconBlock.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Resource Category Icon Block' };

export const ResourceCategoryIconBlockExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: ResourceCategoryIconBlock(ResourceCategoryIconBlockData),
    }}
  />
);
