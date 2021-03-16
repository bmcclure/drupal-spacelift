import React from 'react';

import HalfCalloutStrip from './HalfCalloutStrip.twig';

import HalfCalloutStripData from './HalfCalloutStrip.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Half Callout Strip' };

export const HalfCalloutStripExample = () => (
  <div
    dangerouslySetInnerHTML={{ __html: HalfCalloutStrip(HalfCalloutStripData) }}
  />
);
