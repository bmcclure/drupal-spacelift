import React from 'react';

import ReusableCalloutStrip from './ReusableCalloutStrip.twig';
import ReusableCalloutStripData from './ReusableCalloutStrip.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Reusable Callout Strip' };

export const reusableCalloutStrip = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: ReusableCalloutStrip(ReusableCalloutStripData),
    }}
  />
);
