import React from 'react';

import Column from './Column.twig';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Multi-Column Layout/Column' };

export const column = () => (
  <div dangerouslySetInnerHTML={{ __html: Column({}) }} />
);
