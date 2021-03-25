import React from 'react';

import BlueContentStrip from './BlueContentStrip.twig';

import BlueContentStripData from './BlueContentStrip.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Blue Content Strip' };

export const blueContentStrip = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: BlueContentStrip(BlueContentStripData),
    }}
  />
);
