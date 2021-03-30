import React from 'react';

import RepLocatorFilterBar from './RepLocatorFilterBar.twig';

import RepLocatorFilterBarData from './RepLocatorFilterBar.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Rep Locator Filter Bar' };

export const repLocatorFilterBar = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: RepLocatorFilterBar(RepLocatorFilterBarData),
    }}
  />
);
