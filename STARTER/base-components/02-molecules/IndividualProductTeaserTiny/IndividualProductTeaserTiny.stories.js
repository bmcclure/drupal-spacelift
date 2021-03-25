import React from 'react';

import IndividualProductTeaserTiny from './IndividualProductTeaserTiny.twig';

import IndividualProductTeaserTinyData from './IndividualProductTeaserTiny.yml';

/**
 * Storybook Definition.
 */

export default { title: 'Molecules/Individual Product Teaser Tiny' };

export const individualProductTeaserTiny = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: IndividualProductTeaserTiny(IndividualProductTeaserTinyData),
    }}
  />
);
