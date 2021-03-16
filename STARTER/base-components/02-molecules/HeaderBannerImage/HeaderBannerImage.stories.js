import React from 'react';

import HeaderBannerImage from './HeaderBannerImage.twig';

import HeaderBannerImageData from './HeaderBannerImage.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Header Banner Image' };

export const HeaderBannerImageExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: HeaderBannerImage(HeaderBannerImageData),
    }}
  />
);
