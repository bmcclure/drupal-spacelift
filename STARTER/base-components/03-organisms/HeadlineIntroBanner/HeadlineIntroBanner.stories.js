import React from 'react';

import HeadlineIntroBanner from './HeadlineIntroBanner.twig';

import HeadlineIntroBannerData from './HeadlineIntroBanner.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Headline Intro Banner' };

export const headlineIntroBanner = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: HeadlineIntroBanner(HeadlineIntroBannerData),
    }}
  />
);
