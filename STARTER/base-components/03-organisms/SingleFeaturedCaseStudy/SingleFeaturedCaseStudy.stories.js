import React from 'react';

import SingleFeaturedCaseStudy from './SingleFeaturedCaseStudy.twig';

import SingleFeaturedCaseStudyData from './SingleFeaturedCaseStudy.yml';
import SingleFeaturedCaseStudyBlueData from './SingleFeaturedCaseStudy--blue.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Single Featured Case Study' };

export const singleFeaturedCaseStudy = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: SingleFeaturedCaseStudy(SingleFeaturedCaseStudyData),
    }}
  />
);

export const blueSingleFeaturedCaseStudy = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: SingleFeaturedCaseStudy(SingleFeaturedCaseStudyBlueData),
    }}
  />
);
