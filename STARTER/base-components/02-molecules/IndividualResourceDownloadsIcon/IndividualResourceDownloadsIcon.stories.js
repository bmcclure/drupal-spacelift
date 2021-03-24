import React from 'react';

import IndividualResourceDownloadsIcon from './IndividualResourceDownloadsIcon.twig';

import IndividualResourceDownloadsIconData from './IndividualResourceDownloadsIcon.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Individual Resource Downloads Icon' };

export const IndividualResourceDownloadsIconExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: IndividualResourceDownloadsIcon(
        IndividualResourceDownloadsIconData,
      ),
    }}
  />
);
