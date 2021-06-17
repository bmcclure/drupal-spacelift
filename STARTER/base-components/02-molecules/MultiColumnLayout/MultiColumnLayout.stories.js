import React from 'react';

import MultiColumnLayout from './MultiColumnLayout.twig';

import MultiColumnLayoutData from './MultiColumnLayout.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Multi-Column Layout/Layout' };

export const layout = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: MultiColumnLayout(MultiColumnLayoutData),
    }}
  />
);
