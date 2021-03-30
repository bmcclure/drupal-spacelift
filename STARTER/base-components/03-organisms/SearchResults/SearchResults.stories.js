import React from 'react';

import SearchResults from './SearchResults.twig';
import SearchResultsData from './SearchResults.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Search Results' };

export const searchResults = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: SearchResults(SearchResultsData),
    }}
  />
);
