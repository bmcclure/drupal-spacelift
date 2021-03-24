import React from 'react';

import Content5050 from './Content5050.twig';

import Content5050Data from './Content5050.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Content 5050' };

export const Content5050Example = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: Content5050(Content5050Data),
    }}
  />
);
