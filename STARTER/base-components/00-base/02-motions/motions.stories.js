import React from 'react';

import motions from './motions.twig';

import motionData from './motions.yml';

/**
 * Add storybook definition for Animations.
 */
export default { title: 'Base/Motion' };

export const examples = () => (
  <div dangerouslySetInnerHTML={{ __html: motions(motionData) }} />
);
