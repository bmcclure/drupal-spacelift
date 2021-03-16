import React from 'react';

import IndividualCaseStudyTeaser from './IndividualCaseStudyTeaser.twig';

import IndividualCaseStudyTeaserData from './IndividualCaseStudyTeaser.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Individual Case Study Teaser' };

export const IndividualCaseStudyTeaserExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: IndividualCaseStudyTeaser(IndividualCaseStudyTeaserData),
    }}
  />
);
