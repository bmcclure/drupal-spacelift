import React from 'react';

import IndividualProductTeaserTinyWithPrice from './IndividualProductTeaserTinyWithPrice.twig';

import IndividualProductTeaserTinyWithPriceData from './IndividualProductTeaserTinyWithPrice.yml';

/**
 * Storybook Definition.
 */

export default { title: 'Molecules/Individual Product Teaser Tiny With Price' };

export const individualProductTeaserTinyWithPrice = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: IndividualProductTeaserTinyWithPrice(
        IndividualProductTeaserTinyWithPriceData,
      ),
    }}
  />
);
