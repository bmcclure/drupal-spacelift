import React from 'react';

import ProductListingFilter from './ProductListingFilter.twig';

import ProductListingFilterData from './ProductListingFilter.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Product Listing Filter' };

export const productListingFilter = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: ProductListingFilter(ProductListingFilterData),
    }}
  />
);
