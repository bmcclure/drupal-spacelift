import React from 'react';

import RepLocatorResults from './RepLocatorResults.twig';

import RepLocatorResultsData from './RepLocatorResults.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Rep Locator Results' };

export const repLocatorResults = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: RepLocatorResults(RepLocatorResultsData),
    }}
  />
);
