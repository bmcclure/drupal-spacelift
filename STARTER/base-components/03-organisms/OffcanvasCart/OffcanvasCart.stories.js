import React from 'react';

import OffcanvasCart from './OffcanvasCart.twig';

import OffcanvasCartData from './OffcanvasCart.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Offcanvas Cart' };

export const offcanvasCart = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: OffcanvasCart(OffcanvasCartData),
    }}
  />
);
