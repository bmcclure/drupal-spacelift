import React from 'react';

import ShareButtons from './ShareButtons.twig';

import ShareButtonsData from './ShareButtons.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Share Buttons' };

export const shareButtons = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: ShareButtons(ShareButtonsData),
    }}
  />
);
