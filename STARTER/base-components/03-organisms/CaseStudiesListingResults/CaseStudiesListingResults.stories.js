import React from 'react';

import CaseStudiesListingResults from './CaseStudiesListingResults.twig';

import CaseStudiesListingResultsData from './CaseStudiesListingResults.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Case Studies Listing Results' };

export const CaseStudiesListingResultsExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: CaseStudiesListingResults(CaseStudiesListingResultsData),
    }}
  />
);
