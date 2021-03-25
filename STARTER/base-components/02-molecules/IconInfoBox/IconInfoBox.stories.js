import React from 'react';

import IconInfoBox from './IconInfoBox.twig';

import IconInfoBoxData from './IconInfoBox.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Icon Info Box' };

export const iconInfoBox = () => (
  <div dangerouslySetInnerHTML={{ __html: IconInfoBox(IconInfoBoxData) }} />
);
