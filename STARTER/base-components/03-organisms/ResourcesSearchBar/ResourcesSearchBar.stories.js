import React from 'react';

import ResourcesSearchBar from './ResourcesSearchBar.twig';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Resources Search Bar' };

export const resourcesSearchBar = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: ResourcesSearchBar(),
    }}
  />
);
