import React from 'react';

import OffcanvasFilter from './OffcanvasFilter.twig';

import OffcanvasFilterData from './OffcanvasFilter.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/OffcanvasFilter' };

export const offcanvasFilter = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: OffcanvasFilter(OffcanvasFilterData),
    }}
  />
);
