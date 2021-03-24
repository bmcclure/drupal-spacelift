import React from 'react';

import ResourcesHeader from './ResourcesHeader.twig';

import ResourcesHeaderData from './ResourcesHeader.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Resources Header' };

export const ResourcesHeaderExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: ResourcesHeader(ResourcesHeaderData),
    }}
  />
);
