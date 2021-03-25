import React from 'react';

import AddToCart from './AddToCart.twig';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Add To Cart' };

export const addToCart = () => (
  <div dangerouslySetInnerHTML={{ __html: AddToCart() }} />
);
