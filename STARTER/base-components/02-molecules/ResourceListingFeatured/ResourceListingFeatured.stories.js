import React from 'react';

import ResourceListingFeatured from './ResourceListingFeatured.twig';

import ResourceListingFeaturedData from './ResourceListingFeatured.yml';
import ResourceListingFeaturedVideoData from './ResourceListingFeatured--video.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Resource Listing Featured' };

export const resourceListingFeatured = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: ResourceListingFeatured(ResourceListingFeaturedData),
    }}
  />
);

export const resourceListingFeaturedVideo = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: ResourceListingFeatured(ResourceListingFeaturedVideoData),
    }}
  />
);
