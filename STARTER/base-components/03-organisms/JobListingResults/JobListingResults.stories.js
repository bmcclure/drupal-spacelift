import React from 'react';

import JobListingResults from './JobListingResults.twig';

import JobListingResultsData from './JobListingResults.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Job Listing Results' };

export const jobListingResults = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: JobListingResults(JobListingResultsData),
    }}
  />
);
