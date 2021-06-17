import React from 'react';

import Line from './Line.twig';

/**
 * Add storybook definition for lines
 */
export default { title: 'Atoms/Accents/Line' };

export const line = () => (
  <div>
    <h2 className="h2">Line:</h2>
    <div dangerouslySetInnerHTML={{ __html: Line({}) }} />
  </div>
);
