import React from 'react';

import DualCalloutStrips from './DualCalloutStrips.twig';

import DualCalloutStripsData from './DualCalloutStrips.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Dual Callout Strip' };

export const dualCalloutStrips = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: DualCalloutStrips(DualCalloutStripsData),
    }}
  />
);
