import React from 'react';

import AddtoCart from './AddtoCart.twig';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Add To Cart' };

export const AddtoCartExample = () => (
  <div dangerouslySetInnerHTML={{ __html: AddtoCart() }} />
);
