import React from 'react';

import OfficeLocationsListing from './OfficeLocationsListing.twig';

import OfficeLocationsListingData from './OfficeLocationsListing.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Office Locations Listing' };

export const officeLocationsListing = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: OfficeLocationsListing(OfficeLocationsListingData),
    }}
  />
);
