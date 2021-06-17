import React from 'react';

import AngledBackground from './AngledBackground-demo.twig';

/**
 * Add storybook definition for angled backgrounds
 */
export default { title: 'Atoms/Accents/Angled Background' };

export const angledBackground = () => (
  <div dangerouslySetInnerHTML={{ __html: AngledBackground({}) }} />
);
