import React from 'react';

import BodyContentBlock from './BodyContentBlock.twig';

import BodyContentBlockData from './BodyContentBlock.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Body Content Block' };

export const bodyContentBlock = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: BodyContentBlock(BodyContentBlockData),
    }}
  />
);
