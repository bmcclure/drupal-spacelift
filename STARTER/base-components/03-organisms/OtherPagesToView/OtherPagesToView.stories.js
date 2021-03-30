import React from 'react';

import OtherPagesToView from './OtherPagesToView.twig';

import OtherPagesToViewData from './OtherPagesToView.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Other Pages to View' };

export const otherPagesToView = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: OtherPagesToView(OtherPagesToViewData),
    }}
  />
);
