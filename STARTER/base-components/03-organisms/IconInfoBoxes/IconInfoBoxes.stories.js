import React from 'react';

import IconInfoBoxes from './IconInfoBoxes.twig';

import IconInfoBoxesData from './IconInfoBoxes.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Icon Info Boxes' };

export const iconInfoBoxes = () => (
  <div dangerouslySetInnerHTML={{ __html: IconInfoBoxes(IconInfoBoxesData) }} />
);
