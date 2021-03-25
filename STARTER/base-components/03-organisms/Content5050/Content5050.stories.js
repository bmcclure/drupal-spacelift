import React from 'react';

import Content5050 from './Content5050.twig';

import Content5050Data from './Content5050.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Content 50-50' };

export const content5050 = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: Content5050(Content5050Data),
    }}
  />
);
