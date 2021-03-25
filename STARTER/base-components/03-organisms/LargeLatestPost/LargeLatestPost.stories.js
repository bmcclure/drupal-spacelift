import React from 'react';

import LargeLatestPost from './LargeLatestPost.twig';

import LargeLatestPostData from './LargeLatestPost.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Large Latest Post' };

export const largeLatestPost = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: LargeLatestPost(LargeLatestPostData),
    }}
  />
);
