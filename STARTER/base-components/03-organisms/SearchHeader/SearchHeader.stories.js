import React from 'react';

import SearchHeader from './SearchHeader.twig';
import SearchHeaderData from './SearchHeader.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Search Header' };

export const searchHeader = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: SearchHeader(SearchHeaderData),
    }}
  />
);
