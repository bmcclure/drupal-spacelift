import React from 'react';

import IndividualPostTeaser from './IndividualPostTeaser.twig';

import IndividualPostTeaserData from './IndividualPostTeaser.yml';

/**
 * Storybook Definition.
 */

export default { title: 'Molecules/Individual Post Teaser' };

export const individualPostTeaser = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: IndividualPostTeaser(IndividualPostTeaserData),
    }}
  />
);
