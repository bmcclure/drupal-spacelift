import React from 'react';

import Testimonial from './Testimonial.twig';

import TestimonialData from './Testimonial.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Testimonial' };

export const testimonial = () => (
  <div dangerouslySetInnerHTML={{ __html: Testimonial(TestimonialData) }} />
);
