import React from 'react';

import SingleFeaturedBlogPost from './SingleFeaturedBlogPost.twig';

import SingleFeaturedBlogPostData from './SingleFeaturedBlogPost.yml';
import SingleFeaturedBlogPostDataLight from './SingleFeaturedBlogPost--light.yml';
import SingleFeaturedBlogPostDataBlue from './SingleFeaturedBlogPost--blue.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Single Featured Blog Post' };

export const singleFeaturedBlogPost = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: SingleFeaturedBlogPost(SingleFeaturedBlogPostData),
    }}
  />
);
export const lightSingleFeaturedBlogPost = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: SingleFeaturedBlogPost(SingleFeaturedBlogPostDataLight),
    }}
  />
);
export const blueSingleFeaturedBlogPost = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: SingleFeaturedBlogPost(SingleFeaturedBlogPostDataBlue),
    }}
  />
);
