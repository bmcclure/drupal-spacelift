import React from 'react';

import FeaturedTestimonials from './FeaturedTestimonials.twig';

import FeaturedTestimonialsData from './FeaturedTestimonials.yml';
import FeaturedTestimonialsAltData from './FeaturedTestimonials--alt.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Featured Testimonials' };

export const featuredTestimonials = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: FeaturedTestimonials(FeaturedTestimonialsData),
    }}
  />
);

export const altFeaturedTestimonials = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: FeaturedTestimonials(FeaturedTestimonialsAltData),
    }}
  />
);
