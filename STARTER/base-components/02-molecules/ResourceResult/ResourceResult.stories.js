import React from 'react';

import ResourceResult from './ResourceResult.twig';

import ResourceResultData from './ResourceResult.yml';
import ResourceResultVideoData from './ResourceResult--video.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Resource Result' };

export const resourceResult = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: ResourceResult(ResourceResultData),
    }}
  />
);

export const resourceResultVideo = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: ResourceResult(ResourceResultVideoData),
    }}
  />
);
