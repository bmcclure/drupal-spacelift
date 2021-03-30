import React from 'react';

import SideBySideImages from './SideBySideImages.twig';
import SideBySideImagesData from './SideBySideImages.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/SideBySide Images' };

export const sideBySideImages = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: SideBySideImages(SideBySideImagesData),
    }}
  />
);
