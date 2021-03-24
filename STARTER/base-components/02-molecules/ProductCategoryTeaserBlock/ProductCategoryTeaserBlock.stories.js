import React from 'react';

import ProductCategoryTeaserBlock from './ProductCategoryTeaserBlock.twig';

import ProductCategoryTeaserBlockData from './ProductCategoryTeaserBlock.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Product Category Teaser Block' };

export const ProductCategoryTeaserBlockExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: ProductCategoryTeaserBlock(ProductCategoryTeaserBlockData),
    }}
  />
);
