import React from 'react';

import Video from './Video.twig';

import VideoData from './Video.yml';
import VideoFullData from './Video--full.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Videos' };

export const wide = () => (
  <div dangerouslySetInnerHTML={{ __html: Video(VideoData) }} />
);

export const full = () => (
  <div dangerouslySetInnerHTML={{ __html: Video(VideoFullData) }} />
);
