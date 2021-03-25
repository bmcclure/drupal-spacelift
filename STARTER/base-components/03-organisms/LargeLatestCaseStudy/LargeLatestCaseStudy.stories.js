import React from 'react';

import LargeLatestCaseStudy from './LargeLatestCaseStudy.twig';

import LargeLatestCaseStudyData from './LargeLatestCaseStudy.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Large Latest Case Study' };

export const largeLatestCaseStudy = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: LargeLatestCaseStudy(LargeLatestCaseStudyData),
    }}
  />
);
