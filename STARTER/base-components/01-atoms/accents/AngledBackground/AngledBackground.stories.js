import React from 'react';

import AngledBackground from './AngledBackground-demo.twig';

/**
 * Add storybook definition for angled backgrounds
 */
export default { title: 'Atoms/Angled Background' };

export const example = () => (
  <div dangerouslySetInnerHTML={{ __html: AngledBackground({}) }} />
);
