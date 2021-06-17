import React from 'react';

import ResourceListingTeaser from './ResourceListingTeaser.twig';

import ResourceListingTeaserData from './ResourceListingTeaser.yml';
import ResourceListingTeaserVideoData from './ResourceListingTeaser--video.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Resource Listing Teaser' };

export const resourceListingTeaser = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: ResourceListingTeaser(ResourceListingTeaserData),
    }}
  />
);

export const resourceListingTeaserVideo = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: ResourceListingTeaser(ResourceListingTeaserVideoData),
    }}
  />
);
