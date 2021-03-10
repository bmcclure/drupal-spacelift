import React from 'react';

import Line from './Line.twig';

/**
 * Add storybook definition for lines
 */
export default { title: 'Atoms/Line' };

export const example = () => (
  <div dangerouslySetInnerHTML={{ __html: Line({}) }} />
);
