import React from 'react';

import HeaderBannerImage from './HeaderBannerImage.twig';

import HeaderBannerImageData from './HeaderBannerImage.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Header Banner Image' };

export const headerBannerImage = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: HeaderBannerImage(HeaderBannerImageData),
    }}
  />
);
