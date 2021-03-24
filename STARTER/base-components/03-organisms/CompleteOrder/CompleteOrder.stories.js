import React from 'react';

import CompleteOrder from './CompleteOrder.twig';

import CompleteOrderData from './CompleteOrder.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Complete Order' };

export const CompleteOrderExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: CompleteOrder(CompleteOrderData),
    }}
  />
);
