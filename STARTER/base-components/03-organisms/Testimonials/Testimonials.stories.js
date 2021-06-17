import React from 'react';

import Testimonials from './Testimonials.twig';

import TestimonialsData from './Testimonials.yml';

import './Testimonials';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Testimonials' };

export const testimonialSlider = () => (
  <div dangerouslySetInnerHTML={{ __html: Testimonials(TestimonialsData) }} />
);
