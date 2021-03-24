import React from 'react';

import ResourceResult from './ResourceResult.twig';

import ResourceResultData from './ResourceResult.yml';
import ResourceResultVideoData from './ResourceResult--video.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Resource Result' };

export const ResourceResultExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: ResourceResult(ResourceResultData),
    }}
  />
);

export const ResourceResultVideoExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: ResourceResult(ResourceResultVideoData),
    }}
  />
);
