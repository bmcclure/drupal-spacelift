import React from 'react';

import FeaturedServices from './FeaturedServices.twig';

import FeaturedServicesData from './FeaturedServices.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Featured Services' };

export const featuredServices = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: FeaturedServices(FeaturedServicesData),
    }}
  />
);
