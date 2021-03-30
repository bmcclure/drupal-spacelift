import React from 'react';

import RecommendedProductsCarousel from './RecommendedProductsCarousel.twig';

import RecommendedProductsCarouselData from './RecommendedProductsCarousel.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Recommended Products Carousel' };

export const RecommendedProductsCarouselExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: RecommendedProductsCarousel(RecommendedProductsCarouselData),
    }}
  />
);
