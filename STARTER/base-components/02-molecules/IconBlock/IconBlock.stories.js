import React from 'react';

import IconBlock from './IconBlock.twig';

import IconBlockData from './IconBlock.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Icon Block' };

export const iconBlock = () => (
  <div dangerouslySetInnerHTML={{ __html: IconBlock(IconBlockData) }} />
);
