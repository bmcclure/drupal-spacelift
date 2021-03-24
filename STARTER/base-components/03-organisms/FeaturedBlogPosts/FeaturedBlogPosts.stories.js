import React from 'react';

import FeaturedBlogPosts from './FeaturedBlogPosts.twig';

import FeaturedBlogPostsData from './FeaturedBlogPosts.yml';
import FeaturedBlogPostsAltData from './FeaturedBlogPosts--alt.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Featured Blog Posts' };

export const FeaturedBlogPostsExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: FeaturedBlogPosts(FeaturedBlogPostsData),
    }}
  />
);

export const FeaturedBlogPostsAltExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: FeaturedBlogPosts(FeaturedBlogPostsAltData),
    }}
  />
);
