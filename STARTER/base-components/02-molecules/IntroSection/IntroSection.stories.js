import React from 'react';

import IntroSection from './IntroSection.twig';

import IntroSectionData from './IntroSection.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Individual Testimonial' };

export const introSection = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: IntroSection(IntroSectionData),
    }}
  />
);
