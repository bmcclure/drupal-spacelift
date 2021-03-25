import React from 'react';

import SingleImageBlock from './SingleImageBlock.twig';

import SingleImageBlockData from './SingleImageBlock.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Single Image Block' };

export const singleImageBlock = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: SingleImageBlock(SingleImageBlockData),
    }}
  />
);
