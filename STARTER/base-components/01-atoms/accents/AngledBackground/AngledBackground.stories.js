import React from 'react';

import AngledBackground from './AngledBackground.twig';

/**
 * Add storybook definition for angled backgrounds
 */
export default { title: 'Atoms/Angled Background' };

export const Example = () => (
  <div dangerouslySetInnerHTML={{ __html: AngledBackground({}) }} />
);
