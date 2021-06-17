import React from 'react';

import ResourceListing from './ResourceListing-demo.twig';

import ResourceListingData from './ResourceListing.yml';

import './ResourceListing';

/**
 * Add storybook definition for angled backgrounds
 */
export default { title: 'Organisms/Resource Listing' };

export const resourceListing = () => (
  <div
    dangerouslySetInnerHTML={{ __html: ResourceListing(ResourceListingData) }}
  />
);
