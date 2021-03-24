import React from 'react';

import FeaturedTestimonials from './FeaturedTestimonials.twig';

import FeaturedTestimonialsData from './FeaturedTestimonials.yml';
import FeaturedTestimonialsAltData from './FeaturedTestimonials--alt.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Featured Testimonials' };

export const FeaturedTestimonialsExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: FeaturedTestimonials(FeaturedTestimonialsData),
    }}
  />
);

export const FeaturedTestimonialsAltExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: FeaturedTestimonials(FeaturedTestimonialsAltData),
    }}
  />
);
