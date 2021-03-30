import React from 'react';

import ShortCalloutStrip from './ShortCalloutStrip.twig';
import ShortCalloutStripData from './ShortCalloutStrip.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/ShortCalloutStrip' };

export const shortCalloutStrip = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: ShortCalloutStrip(ShortCalloutStripData),
    }}
  />
);
