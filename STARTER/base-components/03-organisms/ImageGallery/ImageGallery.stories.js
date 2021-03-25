import React from 'react';

import ImageGallery from './ImageGallery.twig';

import ImageGalleryData from './ImageGallery.yml';
import ImageGalleryAltData from './ImageGallery--alt.yml';
import './ImageGallery';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Image Gallery' };

export const imageGallery = () => (
  <div dangerouslySetInnerHTML={{ __html: ImageGallery(ImageGalleryData) }} />
);

export const imageGalleryCarousel = () => (
  <div
    dangerouslySetInnerHTML={{ __html: ImageGallery(ImageGalleryAltData) }}
  />
);
