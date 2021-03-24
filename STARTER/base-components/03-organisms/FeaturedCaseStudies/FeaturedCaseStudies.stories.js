import React from 'react';

import FeaturedCaseStudies from './FeaturedCaseStudies.twig';

import FeaturedCaseStudiesData from './FeaturedCaseStudies.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Featured Case Studies' };

export const FeaturedCaseStudiesExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: FeaturedCaseStudies(FeaturedCaseStudiesData),
    }}
  />
);
