import React from 'react';

import IndividualResourceDownloadsThumbnail from './IndividualResourceDownloadsThumbnail.twig';

import IndividualResourceDownloadsThumbnailData from './IndividualResourceDownloadsThumbnail.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Individual Resource Downloads Thumbnail' };

export const IndividualResourceDownloadsThumbnailExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: IndividualResourceDownloadsThumbnail(
        IndividualResourceDownloadsThumbnailData,
      ),
    }}
  />
);
