import React from 'react';

import ProductTeaserBlock from './ProductTeaserBlock.twig';

import ProductTeaserBlockData from './ProductTeaserBlock.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Product Teaser Block' };

export const productTeaserBlock = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: ProductTeaserBlock(ProductTeaserBlockData),
    }}
  />
);
