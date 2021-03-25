import React from 'react';

import IndividualCaseStudyTeaser from './IndividualCaseStudyTeaser.twig';

import IndividualCaseStudyTeaserData from './IndividualCaseStudyTeaser.yml';

// Todo: Remove if we can load via twig attach_library()
import '../../../src/js/aos-init';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Individual Case Study Teaser' };

export const individualCaseStudyTeaser = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: IndividualCaseStudyTeaser(IndividualCaseStudyTeaserData),
    }}
  />
);
