import React from 'react';

import IndividualOfficeLocation from './IndividualOfficeLocation.twig';

import IndividualOfficeLocationData from './IndividualOfficeLocation.yml';

/**
 * Storybook Definition.
 */

export default { title: 'Molecules/Individual Office Location' };

export const IndividualOfficeLocationExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: IndividualOfficeLocation(IndividualOfficeLocationData),
    }}
  />
);
