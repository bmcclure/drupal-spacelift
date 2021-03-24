import React from 'react';

import CustomFacetDisplay from './CustomFacetDisplay.twig';

import CustomFacetDisplayData from './CustomFacetDisplay.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Custom Facet Display' };

export const CustomFacetDisplayExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: CustomFacetDisplay(CustomFacetDisplayData),
    }}
  />
);
