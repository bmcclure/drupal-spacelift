import React from 'react';

import IndividualTestimonial from './IndividualTestimonial.twig';

import IndividualTestimonialData from './IndividualTestimonial.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Individual Testimonial' };

export const IndividualTestimonialExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: IndividualTestimonial(IndividualTestimonialData),
    }}
  />
);
