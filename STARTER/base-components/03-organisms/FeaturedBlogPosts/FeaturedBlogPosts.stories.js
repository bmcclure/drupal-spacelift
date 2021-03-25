import React from 'react';

import FeaturedBlogPosts from './FeaturedBlogPosts.twig';

import FeaturedBlogPostsData from './FeaturedBlogPosts.yml';
import FeaturedBlogPostsAltData from './FeaturedBlogPosts--alt.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Featured Blog Posts' };

export const featuredBlogPosts = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: FeaturedBlogPosts(FeaturedBlogPostsData),
    }}
  />
);

export const altFeaturedBlogPosts = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: FeaturedBlogPosts(FeaturedBlogPostsAltData),
    }}
  />
);
