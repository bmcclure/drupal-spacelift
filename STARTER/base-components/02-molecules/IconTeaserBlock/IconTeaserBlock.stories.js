import React from 'react';

import IconTeaserBlock from './IconTeaserBlock.twig';

import IconTeaserBlockData from './IconTeaserBlock.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Icon Teaser Block' };

export const iconTeaserBlock = () => (
  <div
    dangerouslySetInnerHTML={{ __html: IconTeaserBlock(IconTeaserBlockData) }}
  />
);
