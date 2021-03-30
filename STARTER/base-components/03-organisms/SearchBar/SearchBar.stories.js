import React from 'react';

import SearchBar from './SearchBar.twig';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Search Bar' };

export const searchBar = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: SearchBar(),
    }}
  />
);
