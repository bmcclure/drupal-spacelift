import React from 'react';

import ProductComparisons from './ProductComparisons.twig';

import ProductComparisonsData from './ProductComparisons.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Product Comparisons' };

export const productComparisons = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: ProductComparisons(ProductComparisonsData),
    }}
  />
);
