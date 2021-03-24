import React from 'react';

import OtherPagesTeaserBlock from './OtherPagesTeaserBlock.twig';

import OtherPagesTeaserBlockData from './OtherPagesTeaserBlock.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Other Pages Teaser Block' };

export const OtherPagesTeaserBlockExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: OtherPagesTeaserBlock(OtherPagesTeaserBlockData),
    }}
  />
);
