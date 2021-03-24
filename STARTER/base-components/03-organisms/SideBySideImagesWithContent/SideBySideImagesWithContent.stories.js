import React from 'react';

import SideBySideImagesWithContent from './SideBySideImagesWithContent.twig';

import SideBySideImagesWithContentData from './SideBySideImagesWithContent.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Side by Side Images with Content' };

export const SideBySideImagesWithContentExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: SideBySideImagesWithContent(SideBySideImagesWithContentData),
    }}
  />
);
