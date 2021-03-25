import React from 'react';

import Header from './Header.twig';

import HeaderData from './Header.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Header' };

export const header = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: Header(HeaderData),
    }}
  />
);
