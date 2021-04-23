import React from 'react';

import SearchForm from './SearchForm.twig';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Search Form' };

export const searchForm = () => (
  <div dangerouslySetInnerHTML={{ __html: SearchForm({}) }} />
);
